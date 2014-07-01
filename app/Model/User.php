<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent','Controller/Component');
/**
 * User Model
 *
*/
class User extends AppModel {


	public $validate = array(
			'username' => array(
					//メールアドレスの形式であること
					'validEmail' => array(
							'rule' => array( 'email', true),
							'message' => 'メールアドレスを入力して下さい'
					),

					'emailExists' => array(
							'rule' => 'isUnique',
							'message' => 'メールアドレスは既に登録されています'
					),
			),
			'password'=> array(
					'notEmpty'=>array(
							'rule'=>array('notEmpty'),
							'message' =>'パスワードを入力してください'
					),
// 					'match' => array(
// 							'rule' => array( 'confirmPassword', 'password', 'confirmPassword'),
// 							'message' => 'バスワードと確認用パスワードが一致しません'
// 					),
			),
			'pass' => array(
					// パスワード・確認パスワードの一致
					'match' => array(
							'rule' => array( 'compareValue','pass_confirm'),
							'message' => 'バスワードと確認用パスワードが一致しません。もう一度入力してください'
					),
			)

	);


	public function compareValue($pass,$pass_confirm){

		if(parent::compareValue($pass,$pass_confirm)){
			$fieldname = key($pass);
			$password=AuthComponent::password($this->data['User'][$fieldname]);
			$this->data['User']['password']=$password;
			return true;
		}

		return false;
	}

// 	public function compareValue($field1,$field2){

// 		 // フィールド名とフォームへの入力値の配列から、キーであるフィールド名を取得
//         $fieldname = key($pass);

//         // 2つのフィールドの入力値を比較
//         if($this->data[$this->name][$fieldname] === $this->data[$this->name][$pass_confirm]){

//         	$this->data[$this->name][$fieldname];
//         	//パスワードのハッシュ化
//         	$password=AuthComponent::password($this->data[$this->name][$fieldname]);
//         	$this->data['User']['password']=$password;

//         	return true;
//         }

//         return false;
// 	}



	public function getActivationHash() {
		//$a = Security::hash(localtime(time()),'md5',true);

		//ハッシュ化
		//return Security::hash(localtime(time()),'md5',true);


		// ユーザIDの有無確認
		if (!isset($this->id)) {
			return false;
		}
		// 更新日時をハッシュ化
		//return Security::hash( $this->field('modified'), 'md5', true);
		return Security::hash(localtime(time()),'md5',true);
	}

}
