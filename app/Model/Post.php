<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );

    public $findMethods = array('search' => true);

    public function search($post){
        $posts = $this->find('all', array(
            'conditions' => array('Post.title' => $post)
        ));
        return $posts;
    }

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }

//    public function latest() {
//        $latest = Cache::read('latest', 'long');
//        if (!$latest) {
//            $latest = $this->find('all', array('order' => 'Post.created DESC', 'limit' => 10));
//            Cache::write('latest', $latest, 'long');
//        }
//        return $latest;
//    }
}