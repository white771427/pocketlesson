<?php

App::uses('AppController', 'Controller');

Class TopController extends AppController{
	//public $name='Lessons';
	public $uses = array('Lesson','Classification');

	public function beforeFilter(){

		parent::beforeFilter();

		$this->Auth->allow('index');

		//$this->set('auth',$this->Auth);
	}

	public function index(){

// 		$result = $this->Lesson->find( 'all', array('conditions' => array('Lesson.user_id' => 70)
// 		));

// 		Debugger::dump($result);

		//ランダムにデータの取得RANDOM()はpostgresql固有のランダムに取得する関数なので
		//別途取得方法を考慮する必要あり
		$list = $this->Lesson->find('all',array('order' => 'RANDOM()','limit' => 6));


		//Debugger::dump($list);
		//ランダムにレッスンを取得する
		$this->set('lessons',$list);



	}
}
