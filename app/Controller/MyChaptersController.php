<?php

App::uses('AppCotroller', 'Controller');
class MyChaptersController extends AppController{

	public  $name="MyChapters";

	public $uses=array('Lesson','Chapter','Section');


	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効


		//認証不要のページの指定
		$this->Auth->allow('index','edit');
		//$this->Auth->allow('search');
	}


	public function index($lessonId=null){

		$result = $this->Chapter->find('all',array('conditions'=>array('lesson_id'=>$lessonId)));

		//Debugger::dump($result);

		$this->set("chapters",$result);
		$this->set("lessonId",$lessonId);
	}

	public function edit($chapterId=null){


		$this->Chapter->id=$chapterId;

		if($this->request->is('post')||$this->request->is('put')){

			if($this->Chapter->save($this->request->data)){

			}
		}

		$result = $this->Chapter->read(null,$chapterId);



		$this->set('lessonId',$result['Chapter']['lesson_id']);
		//$this->set('chapter',$result);

		$this->request->data=$result;
	}


	public function sectionEditing($sectionId=null){


	}

}