
<div class="container">

	<div class="bs-callout bs-callout-info">
		<h4>ユーザー新規登録</h4>
		<ul>
			<li>メールアドレス欄にメールアドレスを入力してください</li>
			<li>メールアドレスを入力後、「メール送信」ボタンをクリックしてください</li>
		</ul>
		※メール送信後、入力したメールアドレス宛に「新規登録画面ＵＲＬ通知メール」が届きます。
	</div>

	<div class="form-group">

		<?php echo $this->Form->create('User',array('type'=>'post','url'=>'signup')); ?>
		<div class="col-lg-8">
			<?php echo $this->Form->input('username',array('class'=>'form-control','label'=>'メールアドレス', 'placeholder'=>'メールアドレスを入力してください')); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-8">
			<div class ="form-group-button-margin"><?php echo $this->form->submit('メール送信',array('class'=>'btn btn-default')); ?></div>
		<?php echo $this->Form->end(); ?>
		</div>
	</div>

</div>






