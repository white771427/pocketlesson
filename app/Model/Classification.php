<?php

App::uses('AppModel', 'Model');


class Classification extends AppModel{
	public $belongsTo = array(
			'Category'=>array('className'=>'Category','foreignKey'=>'category_id','conditions'=>'','order'=>''),

	);
}