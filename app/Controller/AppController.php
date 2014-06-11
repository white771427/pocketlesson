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

	public static $LEARN_LESSON=0;
	public static $CREATE_LESSON=1;

	public $helpers = array(
			'Session',
			'Html' => array('className' => 'TwitterBootstrap.BootstrapHtml'),
			'Form' => array('className' => 'TwitterBootstrap.BootstrapForm'),
			'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
			'Js' => array('Jquery'),
	);

// 	public $helpers = array(
// 			'Session',
// 			'Html',
// 			'Form',
// 			'Paginator' => array('className' => 'TwitterBootstrap.BootstrapPaginator'),
// 	);
	//public $layout = 'TwitterBootstrap.default';


	public $components =array(
			'Session','RequestHandler',
			'Auth'=> array(
					'loginRedirect'=> array('controller'=>'/', 'action'=>'index'),
					'logoutRedirect'=>array('controller'=>'users','action'=>'login'),
					'loginAction'=>array('controller'=>'users','action'=>'login'),
			)
	);


	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('auth',$this->Auth);
	}
}
