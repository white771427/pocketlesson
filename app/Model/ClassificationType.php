<?php
App::uses('AppModel','Model');

class ClassificationType extends AppModel{

	public $hasMany= array(
        'Classification' => array(
            'className'  => 'Classification','conditions' => '', 'foreignKey'=>'classification_type_id','order' => 'code DESC')
    );

// 	public $hasMany= array(
// 			'Classification' => array(
// 					'className'  => 'Classification')
// 	);
}