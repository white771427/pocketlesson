<?php

App::uses('AppModel', 'Model');

class Test extends AppModel{

	var $actsAs = array(
			'UploadPack.Upload' => array(
					'image' => array(     //☆ここでは、"_file_name"を除いたカラム名を書く
							'path' => ':webroot/img/:model/:style:id.:extension',
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
