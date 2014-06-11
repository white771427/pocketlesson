<?php

App::uses('AppModel', 'Model');

class Chapter extends AppModel{

	public $belongsTo = array(
			'Lesson'=>array('className'=>'Lesson','foreignKey'=>'lesson_id','conditions'=>'','order'=>''),

	);

	public $hasMany= array(
			'Section' => array(
					'className'  => 'Section','conditions' => '', 'foreignKey'=>'chapter_id','order' => 'code ASC')
	);

}