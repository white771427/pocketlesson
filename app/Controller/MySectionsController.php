<?php
App::uses('AppController', 'Controller');

class MySectionsController extends AppController{

	public $name='MySections';

	public $uses=array('Chapter','Section');


	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効


		//認証不要のページの指定
		$this->Auth->allow('add','edit');
		//$this->Auth->allow('search');
	}


	public function add($chapterId){

		if($this->request->is('post') || $this->request->is('put')){

			$this->Section->create();

			if($this->Section->save($this->request->data)){

				//$this->Session->setFlash($this->Section->name);
// 				Debugger::dump($this->Section->chapter_id);
				$result = $this->Chapter->find('first',
						array('conditions'=>array('Chapter.id'=>$this->request->data['Section']['chapter_id']),
						'fields' => Array('Chapter.lesson_id')));
// 				Debugger::dump($result);
// 				Debugger::dump($this->request->data['Section']['chapter_id']);
// 				Debugger::dump($result['Chapter']['lesson_id']);
				//$result = $this->Chapter->find('first',array('conditions'=>array('Chapter.id'=>$this->Section->chapter_id)));




				//チャプター・セクション登録画面へ
				$this->redirect('../MyChapters/index/'.$result['Chapter']['lesson_id']);

			}

		}

		$this->set('chapterId',$chapterId);

	}

	public function edit($sectionId=null,$lessonId=null){

	//	Debugger::dump($sectionId);
		$this->Section->id=$sectionId;

		if($this->request->is('post') || $this->request->is('put')){

			if($this->Section->save($this->request->data)){

				//Debugger::dump($this->data);
				$this->redirect('../MyChapters/index/'.$this->request->data['lesson_id']);
			}

		}

		$result = $this->Section->read(null,$sectionId);

		//Debugger::dump($result['Section']);

		$this->request->data=$result;
		//$this->set('section',$result);
		$this->set('lessonId',$lessonId);

	}


// 	public function add($chapterId){

// 		if($this->request->is('post')){

// 			$this->Section->create();
// 			if($this->Section->save($this->request->data)){
// 				$this->Session->setFlash('登録完了');
// 			}

// 		}

// 		$this->set('chapterId',$chapterId);
// 	}
}