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
					'match' => array(
							'rule' => array( 'confirmPassword', 'password', 'confirmPassword'),
							'message' => 'バスワードと確認用パスワードが一致しません'
					),
			),


	);


	public function confirmPassword($password,$confirmPassword){

	if ($password == $confirmPassword) {
          // パスワードハッシュ化
          $this->request->data['User']['password'] = Security::hash( $plain, 'sha512', true);
          return true;
        }
	}



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
