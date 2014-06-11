<?php

App::uses('AppController', 'Controller');

class SectionsController extends AppController{

	public $name='Sections';

	public $uses=array('Lesson','Chapter','Section');

	public function beforeFilter(){

		parent::beforeFilter();

		//認証不要のページの指定
		$this->Auth->allow('index','add');
	}

	public function index($sectionId=null){

		$a = $this->Section->read(null,$sectionId);

		//Debugger::dump($a);

// 		$youtubeId;
// 		if(preg_match('/.*v=([\d\w]+).*/',  $a['Section']['movie_url'])==1){
// 			$youtubeId=preg_replace('/.*v=([\d\w]+).*/', '$1', $a['Section']['movie_url']);
// 		}else if(preg_match('/.*v=([\d\w]+).*/',  $a['Section']['movie_url'])==1){
// 			$youtubeId=preg_replace('/.*v=([\d\w]+).*/', '$1', $a['Section']['movie_url']);
// 		}


		//Debugger::dump(preg_replace('/.*v=([\d\w]+).*/', '$1', $a['Section']['movie_url']));

		//movie_urlはyoutubeの共有から埋め込みコードのsrcの内容

		$this->set('section',$this->Section->read(null,$sectionId));

// 		$feedURL = "https://www.youtube.com/watch?v=1_geCR9gaYM";

// 		$sxml2 = simplexml_load_file($feedURL);

// 			//$this->set('yotubeInfoXml',$sxml);

// 		$this->set('sxml2',$sxml2);



	}


	public function add($chapterId=null){

		if($this->request->is('post')){

			$this->Section->create();
			if($this->Section->save($this->request->data)){
				$this->Session->setFlash('登録完了');
			}

		}

		$this->set('chapterId',$chapterId);
	}

}