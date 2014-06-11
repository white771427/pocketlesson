<?php

App::uses('AppModel', 'Model');

class Lesson extends AppModel{

	//public $belonsTo = array('Classification' =>array('className' =>'Classification','foreign_key'=>'classification_id'));
	//,array('User' =>array('className' =>'User','foreign_key'=>'user_id')));


	// 	public $belongsTo = array('Classification'=>array('className'=>'Classification','foreignKey'=>'classification_id','conditions'=>'','order'=>''),
	// 			'User' =>array('className' =>'User','foreign_key'=>'user_id','conditions'=>'','order'=>'')
	// 	);

	public $belongsTo = array(
			'User' =>array('className' =>'User','foreignKey'=>'user_id','conditions'=>'','order'=>''),
			'Classification'=>array('className'=>'Classification','foreignKey'=>'classification_id','conditions'=>'','order'=>'')
	);

	// 	public $belongsTo = array('Classification','User');


	//public $validate=array('name'=>array('notEmpty'=>array('rule='=>array('notEmpty'),'message'=>'レッスン名を登録してください')),);

	//参考URL http://blog.livedoor.jp/spyder_5615/archives/25845225.html
	var $actsAs = array(
			'UploadPack.Upload' => array(
					'image' => array(     //☆ここでは、"_file_name"を除いたカラム名を書く
							'path' => ':webroot/img/:model/:id/:style:id.:extension',
							'quality' => 95,   //☆画質指定、デフォルトでは75
							'styles' => array(
									'big' => '200x200',
									'small' => '85x85',  //☆リサイズしたいサイズを書く
									'thumb' => '80x80'
							)
					)
			),
	);


}