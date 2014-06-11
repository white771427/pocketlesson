<?php

App::uses('AppController', 'Controller');

class ChaptersController extends AppController{

	public $name='Chapters';

	public $uses=array('Lesson','Chapter','Section');


	public function beforeFilter(){
		parent::beforeFilter();

		//認証不要のページの指定
		$this->Auth->allow('index','add');
	}

	public function index($lessonId=null){

		$this->set('lessonId',$lessonId);
	}

	public function add($lessonId){

		//$this->Chapter->lesson_id=$lessonId;

		if($this->request->is('post')){
			$this->Chapter->create();

			if($this->Chapter->save($this->request->data)){
				$this->Session->setFlash("登録完了");

				//セクション登録画面へ
				$this->redirect('./index/'.$this->Chapter->lesson_id);
				//$this->redirect('../chapters/index/'.$this->Lesson->id);
			}

		}

		$this->set('lessonId',$lessonId);

	}

}