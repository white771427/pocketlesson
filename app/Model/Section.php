<?php

App::uses('AppModel', 'Model');
class Section extends AppModel{

	public $belongsTo = array(
			'Chapter'=>array('className'=>'Chapter','foreignKey'=>'chapter_id','conditions'=>'','order'=>''),

	);
}