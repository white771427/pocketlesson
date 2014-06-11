<?php

App::uses('AppController', 'Controller');
class CategoriesController extends  AppController{

	public $name='Categories';

	public $uses=array('Category','Classification','Lesson',);

	public function beforeFilter(){
		//親クラスのbeforeFilterの読み込み
		parent::beforeFilter();

		//SSLの有効


		//認証不要のページの指定
		$this->Auth->allow('index');
		$this->Auth->allow('search');
		$this->Auth->allow('idSearch');
		$this->Auth->allow('nameSearch');


	}

	public function index(){
		$this->set('categories',$this->paginate());

	}


	public function nameSearch(){

		if($this->request->isPost()||$this->request->isPut()){

			if(isset($this->request->data['categorySearch'])&& isset($this->request->data['categoryText'])){

				$value = $this->request->data['categoryText'];
				$result = $this->Lesson->find('all',array('conditions'=>array('Lesson.name like'=>'%'.$value.'%')));
				$this->setAction("search",$result);
			}
		}

	}

	public function idSearch($classificationId=null){

		if(isset($classificationId)){




			//find 条件参考
			//http://booyan.lopan.jp/cakephp_find/

			$result = $this->Lesson->find( 'all', array(//'order' => array('Item.itemcode'),
					'conditions' => array('Lesson.classification_id' => $classificationId)
			));


			$this->setAction("search",$result);

		}
	}

	public function search($lessons=null){

		$this->set('categories',$this->paginate());
		$this->set('lessons',$lessons);


	}

	public function youtubeSearch($categoryCode=null,$classificationCode=null,$classificationName=null){
		//$this->layout='lesson_default';

		//if($this->request->is('post')){

		//$this->Session->setFlash($category.$classification);
		$this->set('categories',$this->paginate());

		//動画情報を取得する
		//http://logic.moo.jp/data/archives/706.html
		//http://memocarilog.info/jquery/5597#sample1
		if(isset($categoryCode)){
			$feedURL = "http://gdata.youtube.com/feeds/api/videos?vq=".$classificationName."&max-results=12&start-index=1&orderby=viewCount";

			$sxml2 = simplexml_load_file($feedURL);

			//$this->set('yotubeInfoXml',$sxml);

			$this->set('sxml2',$sxml2);
		}

		//TODO 分類を取得して対象のレッスンを取得する
		//$classes = $this->Classification->find('all');

		//TODO DBからレッスンの取得
// 		$this->Zend->loadClass('Zend_Gdata_YouTube');
// 		$yt = new Zend_Gdata_YouTube();

// 		$searchTerms = "グラビア 水着";
// 		try{
// 			$query = $yt->newVideoQuery();
// 			$query->setRacy('include');				//制限なし
// 			$query->setMaxResults(15);				//15件取得
// 			$query->setOrderBy('viewCount');		//視聴回数でソート
// 			$query->setVideoQuery($searchTerms);	//検索対象

// 			// 検索実行
// 			$videoFeed = $yt->getVideoFeed($query);
// 			// 検索結果
// 			$this->set('videoFeed', $videoFeed);
// 		}
// 		catch(Exception $e){
// 			// Exceptionの際にどうぞ
// 		}
		//}



	}

	private function getYoutube(){



	}

}