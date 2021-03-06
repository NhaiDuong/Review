<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('CakeSession', 'Model/Datasource');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $layout = 'layout';
    public $helpers = array("Html","Form");
    public $components = array(
        'Session',
        'Cookie',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login',
            ),
            'authenticate' => array(
                'Form' => array(
//                    'passwordHasher' => 'Blowfish',
                ),
            ),
            'authorize' => array('Controller')
        )
    );


    public function beforeFilter() {
        $this->_setLanguage();
        $this->Auth->allow('index', 'view', 'login');
    }

//    function _setLanguage() {
//        if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
//            $this->Session->write('Config.language', $this->Cookie->read('lang'));
//        }
//        else if (isset($this->params['language']) && ($this->params['language']
//                !=  $this->Session->read('Config.language'))) {
//            $this->Session->write('Config.language', $this->params['language']);
//            $this->Cookie->write('lang', $this->params['language'], false, '20 days');
//        }
//    }

    function _setLanguage() {
        if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
            $this->Session->write('Config.language', $this->Cookie->read('lang'));
        }
        else if (isset($this->params['language']) && ($this->params['language']
                !=  $this->Session->read('Config.language'))) {
            switch( $this->params['language'] ) {
                case 'vie':
                    $lang = 'vie';
                    break;
                case 'eng':
                default:
                    $lang = 'eng';
                    break;
            }

            $this->Session->write('Config.language', $lang);
            $this->Cookie->write('lang', $lang, false, '20 days');
        }
    }

    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        // Default deny
        return false;
    }

    public function redirect( $url, $status = NULL, $exit = true ) {
        if (!isset($url['language']) && $this->Session->check('Config.language')) {
            $url['language'] = $this->Session->read('Config.language');
        }
        parent::redirect($url,$status,$exit);
    }
}
