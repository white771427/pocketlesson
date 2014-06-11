<?php
App::uses('AppModel','Model');

class Category extends AppModel{

// 	//カテゴリー
// 	const BUSINESS=001;
// 	const IRYOU=002;
// 	const PASOKON=003;

// 	//分類
// 	const ZEIRISHI




// 	public $hasMany= array(
//         'Classification' => array(
//             'className'  => 'Classification','conditions' => array('Classification.category_id' => '1'), 'foreignKey'=>'category_id','order' => 'code DESC')
//     );

	public $hasMany= array(
			'Classification' => array(
					'className'  => 'Classification','conditions' => '', 'foreignKey'=>'category_id','order' => 'name DESC')
	);

// 	public $hasMany= array(
// 			'Classification' => array(
// 					'className'  => 'Classification')
// 	);
}