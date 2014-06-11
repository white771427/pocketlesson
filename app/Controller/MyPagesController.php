<?php

App::uses('AppController', 'Controller');
class MyPagesController extends AppController{

	public $name='MyPages';

	public $uses=array('Lesson','LessonUsers','Users');

	//public $paginate=array('Lesson'=>array('limit'=>5,'order'=>array('name'=>'asc')));


	public function index(){

		//現在ログインしているユーザーから情報を取得する
		$this->paginate=array('limit'=>5,'order'=>array('name'=>'asc'));
		//作成した講座の取得

		//$this->paginate=array('Lesson'=>array('conditions'=>array('Lesson.user_id'=>70),'limit'=>5,'order'=>array('name'=>'asc')));
		$conditions=array('Lesson.user_id'=>70);
		$createLessons = $this->paginate('Lesson',$conditions);

		//受講している講座の取得
		//$this->paginate=array('Lesson'=>array('limit'=>5,'order'=>array('name'=>'asc')));
		$learnLessons = $this->paginate('Lesson');


		$learnLessonCount = $this->LessonUsers->find('count',array('conditions'=>array('user_id'=>70)));

		//$result=$this->Lesson->find('all',array('conditions'=>array('user_id'=>70)));

		$teachLessonCount=$this->Lesson->find('count',array('condition'=>array('user_id'=>70)));

		$this->set('learnLessonCount',$learnLessonCount);
		$this->set('teachLessonCount',$teachLessonCount);




		$this->set('user',$this->Users->read(null,70));
		//Debugger::dump($this->paginate());
		$this->set('learnLessons',$learnLessons);
		$this->set('createLessons',$createLessons);
	}

	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効

		//認証不要のページの指定
		$this->Auth->allow('index');

	}




}