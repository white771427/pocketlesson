<?php

App::uses('AppController', 'Controller');
class ClassificationsController extends AppController{
	public $name='Classifications';

	public $uses=array('Category','Classification','Lesson',);

	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効

		//認証不要のページの指定
		$this->Auth->allow('index');
		//$this->Auth->allow('search');


	}

	public function index(){

		$categories = $this->Category->find('list',array('fields'=>array('Category.id','Category.name')));
		$classifications=$this->Classification->find('list',array('fields'=>array('Classification.id','Classification.name')));


		$this->set('categories',$categories);
		$this->set('classifications',$classifications);
	}



	// 担当者の表示を切り替える
	public function ajax_classifications() {
		//$this->Classification-> = array('name' => "CONCAT(Tanto.sei, ' ', Tanto.mei)");

		//ajax送信でないときはアクセスできないようにする
		if (!$this->request->is('ajax')) {
			$this->redirect(array('controller' => 'mylessons', 'action'=>'index'));
		}

		echo "test";
// 		$this->set('classifications',$this->Classification->find('list'),array('conditions'=>array('category_id'=>$this->params['url']['data']['Category']['id']),'fields'=>array('id','name')));

// 		$result =$this->Classification->find('list',
// 				array(
// 						'conditions' => array(
// 								'Classification.category_id' => $this->params['url']['data']['Category']['category_id']
// 						),
// 						'fields' => array('Classification.id','Classification.name'
// 						)
// 				)
// 		);

// 		$this->set('classifications',$result);

	}

}