
<div class="container">

	<div class="bs-callout bs-callout-info">
		<h4>ユーザー新規登録</h4>
		<ul>
			<li>メールの確認がとれました。本登録を行ってください</li>
		</ul>

	</div>
	<hr>

	<?php echo $this->Form->create('User',array('type'=>'post')); ?>
	<div class="form-group">
		<div class="col-lg-8">
			<?php echo $this->Form->input('nickname',array('type'=>'text','class'=>'form-control',
					'label' => array('text' => 'ニックネーム','class' => 'control-label'),
					'placeholder'=>'ニックネームを入力してください')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-6">
			<?php echo $this->Form->input('pass',array('maxlength' => '50', 'type' => 'password','class'=>'form-control','label'=>array('text'=>'パスワード','class'=>'form-group-vertical-control-label'),'placeholder'=>'パスワードを入力してください')); ?>

			<?php echo $this->Form->input('pass_confirm',array('class'=>'form-control','maxlength' => '50', 'type' => 'password','label'=>array('text'=>'パスワード(確認用)','class'=>'form-group-vertical-control-label'),'placeholder'=>'上記と同じパスワードを入力してください')); ?>

			<!--  <label class="form-group-vertical-control-label">パスワード(確認用)</label><input type="password"
				id="confirmPassword" class="form-control" required="true" placeholder="上記と同じパスワードを入力してください"/> -->
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-8">
			<div class="form-group-button-margin">
				<?php echo $this->form->submit('登録',array('class'=>'btn btn-default')); ?>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>





