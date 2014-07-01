<?php

App::uses('AppController', 'Controller');
class UsersController extends AppController{

	public $name ='Users';
	public $uses=array('User');

	public static $addLessonLogin = 0;
	//public static $addLessonMessage = "講座の作成にはユーザーの作成をしてログインしてください";

	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効


		//認証不要のページの指定
		$this->Auth->allow('index','login','signup','active');


	}

	public function index(){

	}



	public function login(){

		if($this->request->is('post')){

			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash('ログインに失敗しました');
			}


		}else{

		}

	}

	public function signup(){

		//TODO メールのアドレスを変更する事
		if(!empty($this->request->data)){

			if($this->User->save($this->request->data)){
				// ユーザアクティベート(本登録)用URLの作成
				$url = FULL_BASE_URL                     // ドメイン
				. $this->request->webroot            // サブディレクトリ
				. $this->name . DS . 'active' . DS // コントローラ/アクション
				. $this->User->id . DS               // ユーザID
				. $this->User->getActivationHash();

				//メール送信
				$email = new CakeEmail('gmail');                        // インスタンス化
				$email->from( array('berina0621@gmail.com' => 'Sender'));  // 送信元
				$email->to('white771427@gmail.com');                      // 送信先
				$email->subject('メールタイトル');                      // メールタイトル

				$email->send($url);

				//フォワード
				$this->setAction("completionMailSend");

			}
		}

	}

	public function completionMailSend(){
		//$this->Session->setFlash("メールを送信しました。送信されたメールから本登録を行ってください");

	}

	public function completionAddUser(){
		//$this->Session->setFlash("メールを送信しました。送信されたメールから本登録を行ってください");

	}

	public function edit($user_id=null){

		$this->User->id=$user_id;

		if($this->request->is('post') || $this->request->is('put')){

			$this->User->save($this->request->data);

		}else{

			$this->request->data=$this->User->read(null,$user_id);

		}
	}

	public function active($userId=null,$inHash=null){

		$this->User->id=$userId;

		if($this->User->exists() && $this->User->getActivationHash()==$inHash){

			$this->setAction('add',$userId);

		}else{
			$this->Session->setFlash('メールの確認が取れませんでした。もう一度登録してください');
		}

	}


	public function add($userId=null){

		$this->User->id=$userId;

		if($this->request->is('post')){
			//$this->User->saveField( 'status', 0);

// 			$password=AuthComponent::password($this->request->data['User']['password']);
// 			$this->request->data['User']['password']=$password;
			if($this->User->save($this->request->data)){
				$this->setAction('completionAddUser');
			}

		}

	}


	public function logout(){
		$this->redirect($this->Auth->logout());
	}


}





