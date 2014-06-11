<?php
App::uses('AppController', 'Controller');

class TestsController extends AppController {

	public $name='Tests';
	var $uses = array('Test');
	var $helpers = array('UploadPack.Upload');

	public function beforeFilter(){

		parent::beforeFilter();

		//認証不要のページの指定
		$this->Auth->allow('index','add');
	}

    public function index() {
        //$this -> autoRender = false;
//         echo "<html><head></head><body>";
//         echo "<h1>サンプルページ</h1>";
//         echo "<p>これがサンプルのページです。</p>";
//         echo "</body></html>";
    }

    //add test23

    public function add(){
    	if (!empty($this->data)) {

    		Debugger::dump($this->request->data);
    		if($this->Test->save($this->request->data)){

    		}
    	}
    }
}