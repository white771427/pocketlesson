<?php

App::uses('AppController', 'Controller');

class MyLessonsController extends AppController{

	public $name='MyLessons';

	public $uses=array('Category','Classification','Lesson','Chapter','Section','LessonUsers','Users');

	var $helpers = array('UploadPack.Upload');

	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効


		//認証不要のページの指定
		//$this->Auth->allow('index','add','search','edit');
		$this->set('auth',$this->Auth);
		//$this->Auth->allow('search');
	}

	public function index(){

// 		//自分の作成したレッスンと受講しているレッスンの一覧を表示する
// 		$this->Lesson->find('all',array('conditiions'=>array('user_id'=>70)));

		//Debugger::dump($this->LessonUsers->find('count',array('conditions'=>array('user_id'=>70))));
		//debug($this->LessonUsers->find('count',array('conditions'=>array('user_id'=>70))));

		//ログインしているか取得
		if ($auth->loggedIn()){

		}

		$learnLessonCount = $this->LessonUsers->find('count',array('conditions'=>array('user_id'=>70)));

		$teachLessonCount=$this->Lesson->find('count',array('condition'=>array('user_id'=>70)));

		$this->set('learnLessonCount',$learnLessonCount);
		$this->set('teachLessonCount',$teachLessonCount);

// 		//詳細情報の取得
// 		Debugger::dump($this->Chapter->find( 'all', array('conditions' => array('Chapter.lesson_id' => $lessonId))));

// 		//Debugger::dump($this->Chapter->find());

// 		$result = $this->Chapter->find( 'all', array('conditions' => array('Chapter.lesson_id' => $lessonId)
// 		));

// 		$this->set('chapters',$result);


	}


	public function search($userId=null,$type=null){
		$result =null;
		$conditions=null;


// 		//現在ログインしているユーザーから情報を取得する
// 		$this->paginate=array('limit'=>5,'order'=>array('name'=>'asc'));
// 		//作成した講座の取得

// 		//$this->paginate=array('Lesson'=>array('conditions'=>array('Lesson.user_id'=>70),'limit'=>5,'order'=>array('name'=>'asc')));
// 		$conditions=array('Lesson.user_id'=>70);
// 		$createLessons = $this->paginate('Lesson',$conditions);

		if($type==AppController::$LEARN_LESSON){

			//受講しているレッスンの取得
			//TODO joinして必要なLessonを取得する
			$result=$this->LessonUsers->find('all',array('conditions'=>array('LessonUsers.user_id'=>70)));

			//Debugger::dump($result);


			$lessonIds=array();
			foreach($result as $val){
				if(!empty($val['LessonUsers']['lesson_id'])){
					array_push($lessonIds,$val['LessonUsers']['lesson_id']);
				}
			}

			$conditions = array('Lesson.id'=>$lessonIds);

			$this->paginate=array('Lesson'=>array('conditions'=>array('Lesson.id'=>$lessonIds),'limit'=>3,'order'=>array('name'=>'asc')));

			//$result = $this->Lesson->find('all',array('conditions'=>$conditions));



			$this->set('type',0);

		}else if($type==AppController::$CREATE_LESSON){
			//作成したレッスンの取得

			//$this->paginate = array('limit' => 20);
			$this->paginate=array('limit'=>2,'order'=>array('name'=>'asc'),'paramType' => 'querystring');
			//作成した講座の取得

			//$this->paginate=array('Lesson'=>array('conditions'=>array('Lesson.user_id'=>70),'limit'=>5,'order'=>array('name'=>'asc')));
			$conditions=array('Lesson.user_id'=>70);
			$result = $this->paginate('Lesson',$conditions);

			//受講している講座の取得
			//$this->paginate=array('Lesson'=>array('limit'=>5,'order'=>array('name'=>'asc')));

//			Debugger::dump($result);

			//$result = $this->paginate('Lesson',$conditions,array('limit'=>20,'order'=>array('name'=>'asc')));
			//$result = $this->paginate('Lesson',$conditions);
			//Debugger::dump($createLessons);

// 			$this->paginate=array('Lesson'=>array('conditions'=>array('Lesson.user_id'=>70),'limit'=>3,'order'=>array('name'=>'asc')));
			//$result=$this->Lesson->find('all',array('conditions'=>array('user_id'=>70)));
// 			Debugger::dump($result);
// 			$result = $this->paginate();
// 			Debugger::dump($result);
			$this->set('type',1);
		}

//		$result = $this->paginate();
		//$this->set('lessons',$result);
		//Debugger::dump($result);
		$this->set('lessons',$result);
		//$this-set($this->paginate());
	}

	/**
	 *
	 * @param string $lessonId
	 */
	public function edit($lessonId=null){

		$flg=true;
		//$result =$this->Lesson->find('first',array('conditions'=>array('id'=>$lessonId)));
		$this->Lesson->id=$lessonId;

		if($this->request->is('post')||$this->request->is('put')){

			if($this->Lesson->save($this->request->data)){
				//$this->Session->setFlush("完了");
			}else{
				//$this->Session->setFlush("失敗");
				$flg=false;
			}
			//$this->redirect(array('action'=>'index'));
		}

		if($flg){
			$categories = $this->Category->find('list',array('fields'=>array('Category.id','Category.name')));
			$classifications=$this->Classification->find('list',array('fields'=>array('Classification.id','Classification.name')));

			$this->set('categories',$categories);
			$this->set('classifications',$classifications);

			$result = $this->Lesson->read(null,$lessonId);
			//			Debugger::dump($result);

			$classificationId = $result['Lesson']['classification_id'];

			$this->set('classification',$this->Classification->read(null,$classificationId));

			//			Debugger::dump($classification);

			$this->request->data=$result;

		}

	}


	/**
	 * レッスン新規作成
	 */
	public function add(){

		$userId= $this->Auth->user('id');

		if($this->request->is('post')||$this->request->is('put')){

			$this->Lesson->create();
			//ユーザーIDをリクエストデータに追加する
			$this->request->data['Lesson']['user_id']=$userId;


			if($this->Lesson->save($this->request->data)){
				$this->Session->setFlash("登録が完了しました");

				//チャプター・セクション登録画面へ

				$this->redirect(array('action'=>'edit',$this->Lesson->id));

			}
		}else{

			//参考ドロップダウンの表示をコード＋名前とかにする方法
			//http://hitarts.com/blog/?p=112
			$categories = $this->Category->find('list',array('fields'=>array('Category.id','Category.name')));
			$classifications=$this->Classification->find('list',array('fields'=>array('Classification.id','Classification.name')));

			$this->set('categories',$categories);
			$this->set('classifications',$classifications);

			$this->set('categories', $categories);
			$this->set('classifications', $classifications);

			$this->set('userId',$userId);
		}

	}


}