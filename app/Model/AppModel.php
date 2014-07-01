<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
*/
class AppModel extends Model {

// 	public $validate =array(
// 			'username' => array(
// 					'notEmpty'=>array(
// 							'rule'=>array('notEmpty'),
// 							'message' =>'ユーザー名を入力してください',
// 					)
// 			),

// 			'password'=> array(
// 					'notEmpty'=>array(
// 							'rule'=>array('notEmpty'),
// 							'message' =>'パスワードを入力してください',
// 					)
// 			),

// 	);

	public function compareValue($field1,$field2){

		// フィールド名とフォームへの入力値の配列から、キーであるフィールド名を取得
		$fieldname = key($field1);

		// 2つのフィールドの入力値を比較
		if($this->data[$this->name][$fieldname] == $this->data[$this->name][$field2]){

			return true;
		}

		return false;
	}

}
