<?php
App::uses('AppController', 'Controller');
App::uses('SluggableBehavior', 'Utils/Behavior');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {
    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');
    public $helpers = array('Cache');
    public $cacheAction = array(
        'index' => array('callbacks' => true, 'duration' => 30),
//        'index' => 36000,
    );
    public $actsAs = array('Utils.Sluggable');

    /**
     * index method
     *
     * @return void
     */
    public function index($keyword = null) {
        //load model user
        $this->loadModel('User');
        if ($this->Auth->user('id')) {
            $this->set('user', $this->Auth->user('id'));
        }
        if ($this->request->is('get')){
            if(isset($this->params->query['keyword'])) {
                $this->search($this->params->query['keyword']);
            }else{
                $this->Paginator->settings = array(
                    'Post' => array(
                        'fields' => array('title', 'body', 'modified', 'created', 'slug', 'user_id', 'User.username', 'viewCount'),
                        'limit' => 10,
                        'order' => array('Post.modified' => 'desc'
                        )
                    )
                );
                $this->Post->recursive = 0;
                $this->set('posts', $this->Paginator->paginate());
            }
        }
        $this->oldest();
        $this->latest();
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */

    public function view($slug = null) {
        if (!$slug) {
            throw new NotFoundException('Invalid post');
        }
        $post = $this->Post->findBySlug($slug);
        if (!$post) {
            throw new NotFoundException('Invalid post');
        }
        $this->Post->updateAll(
            array('Post.viewCount' => 'Post.viewCount + 1'),
            array('Post.slug' => $slug)
        );
        if(isset($this->params->query['keyword'])) {
            $this->redirect(
                    array(
                        "controller" => "posts",
                        "action" => "index",
                        "?" => array(
                            "keyword" => $this->params->query['keyword']
                        )
                    )
            );
            $this->search($this->params->query['keyword']);
        }else {
            $this->set(compact('post'));
        }
        $this->oldest();
        $this->latest();
    }


    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            if (!$this->Auth->user('id')){
                $this->Session->setFlash(__('You must login first.'), 'default', array(), 'login');
            }else{
                $this->request->data['Post']['user_id'] = $this->Auth->user('id');
                $title = $this->request->data['Post']['title'];
                $this->request->data['Post']['slug'] = Inflector::slug($title ,'-');
                if ($this->Post->save($this->request->data)) {
                    $this->Session->setFlash(__('Your post has been saved.'), 'default', array(), 'addPostSuccess');
                    return $this->redirect(array('action' => 'index'));
                }
            }
        }
        $this->oldest();
        $this->latest();
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Post->id = $id;
            $title = $this->request->data['Post']['title'];
            $this->request->data['Post']['slug'] = Inflector::slug($title ,'-');
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'), 'default', array(), 'addPostSuccess');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array(), 'editPostError');
        }
        if (!$this->request->data) {
            $this->request->data = $post;
        }
        $this->oldest();
        $this->latest();
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */

    public function delete($id = null) {
        if ($this->request->is('get')) {
            if ($this->Post->delete($id)) {
                $this->Session->setFlash(__('Post was deleted'), 'default', array(), 'deletePostSuccess');
            } else {
                $this->Session->setFlash(__('Post was not deleted'), 'default', array(), 'deletePostError');
            }
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add') {
            return true;
        }
        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    //find the oldest modified posts
    public function oldest() {
        if (($modified = Cache::read('modified')) === false) {
            $condition = array(
                'limit' => 10,
                'order' => 'Post.modified asc',
            );
            $modified = $this->Post->find('all', $condition);
            return Cache::write('modified', $modified);
        }
    }

    //function find the latest post
    public function latest() {
        $condition1 = array(
            'fields' => array('title', 'slug'),
            'limit' => 10,
            'order' => 'Post.modified desc',
            'recursive' => -1
        );
        $latest = $this->Post->find('all', $condition1);
        return $this->set('latest', $latest);
    }

    //function search for posts' title
    public function search($keyword) {
        $con = array('Post.title' => $keyword);
        $posts = $this->Post->find('all',array('conditions' => $con));
        if ($posts){
            $this->Post->recursive = 0;
            $this->Paginator->settings = array(
                'limit' => 10,
                'conditions' => $con
            );
            $this->set('posts', $this->Paginator->paginate());
        }
        else
            $this->Session->setFlash(__('No result match!'), 'default', array(), 'noResult');
    }

}
