<?php
App::uses('AppModel', 'Model');
App::uses('SluggableBehavior', 'Model/Behavior');
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

    public $useTable = 'posts';

    public $actsAs = array(
        'Sluggable.Sluggable' => array(
            'field'     => 'title',  // Field that will be slugged
            'slug'      => 'slug',  // Field that will be used for the slug
            'lowercase' => true,    // Do we lowercase the slug ?
            'separator' => '-',     //
            'overwrite' => false    // Does the slug is auto generated when field is saved no matter what
        )
    );
}
