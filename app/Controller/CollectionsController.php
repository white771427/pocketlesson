<?php


class CollectionsController extends  AppController{


	public function beforeFilter(){

		parent::beforeFilter();

		$this->Auth->allow('edit');
	}
	public function add(){

		//データがPOSTされたら

		if($this->request->is('post')){

			//データを保存

			$this->Collection->save($this->request->data);

		}
	}

	public function edit($id=null){
		$this->Collection->id = $id;
	 if($this->request->is('post') || $this->request->is('put')){

	 	//リクエストデータの内容でデータを更新
		//$this->Collection->id=1;

	 	$this->Collection->save($this->request->data);

	 	//indexページへ移動する

	 	//$this->redirect('index');

	 	//リクエストがPOST,PUT以外の場合

	 }else{

	 	//指定プライマリーキーのデータをセット

	 	$this->request->data=$this->Collection->read(null,$id);

	 }

	}
}