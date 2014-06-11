<?php

App::uses('AppController', 'Controller');

class LessonsController extends AppController{

	public $name='Lessons';

	public $uses=array('Category','Classification','Lesson','Chapter','Section','User');



	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効


		//認証不要のページの指定
		$this->Auth->allow('index','add');
		//$this->Auth->allow('search');
	}


	public function index($lessonId=null,$userId=null){

		//詳細情報の取得
		//Debugger::dump($this->Chapter->find( 'all', array('conditions' => array('Chapter.lesson_id' => $lessonId))));

		//Debugger::dump($this->Chapter->find());

		$user;
		if(isset($userId)){
			$user= $this->User->find('first',array('conditions'=>array('id'=>$userId)));
		}


		$result = $this->Chapter->find( 'all', array(
				'conditions' => array('Chapter.lesson_id' => $lessonId),
				'order'=>array('Chapter.code')
		));



// 		Debugger::dump($result);
// 		Debugger::dump($user);

		$this->set('chapters',$result);
		$this->set('user',$user);



	}


	public function add(){

		if($this->request->is('post')){
			$this->Lesson->create();

			if($this->Lesson->save($this->request->data)){
				$this->Session->setFlash($this->Lesson->name);

				//チャプター・セクション登録画面へ
				$this->redirect('../chapters/index/'.$this->Lesson->id);

			}
		}else{

			//参考ドロップダウンの表示をコード＋名前とかにする方法
			//http://hitarts.com/blog/?p=112

			$categories =  $this->Category->find('list',array('fields'=>array('Category.name')));
			//$categories =set::combine($categories,);

			$classifications = $this->Classification->find('list',array('fields' => array('Classification.name')));
			//$classifications =Set::combine($classifications,'{n}.Classification.id',);

			$this->set('categories', $categories);
			$this->set('classifications', $classifications);

		}

	}

	public function search($lessonName=null){

		if($this->request->is('put') || $this->request->is('post')){
			//検索結果を入れる
			$value = $this->request->data['categoryText'];

			$this->paginate=array('limit'=>6,'order'=>array('name'=>'asc'),'paramType' => 'querystring');

			$conditions=array('Lesson.name like'=>'%'.$value.'%');

			$result = $this->paginate('Lesson',$conditions);

			//$result = $this->Lesson->find('all',array('conditions'=>array('Lesson.name like'=>'%'.$value.'%')));
			//$this->setAction("search",$result);

		}else{
			//pickup

			$this->paginate=array('limit'=>12,'paramType' => 'querystring');

			$result = $this->paginate('Lesson');
		}

		$categories = $this->Category->find('all',array('order'=>array('name'=>'asc')));

		$this->set('categories',$categories);
		$this->set('lessons',$result);

	}

}