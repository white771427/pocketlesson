
<div class="container">
	<div class="row">
	画面要約：①ユーザーの新規登録する為の画面です。②メールアドレス入力欄にメールアドレスを入力。 ③「メール送信ボタン」をクリック。
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group">

					新規登録する為のＵＲＬをメールでお送りします。
					メールアドレスを入力後「メール送信ボタン」をクリックしてください。


					<?php echo $this->Form->create('User',array('type'=>'post','url'=>'signup')); ?>

					<?php echo $this->Form->input('username',array('class'=>'form-control','label'=>'メールアドレス', 'placeholder'=>'メールアドレスを入力してください')); ?>

					<span class="input-group-btn"> <?php echo $this->form->submit('メール送信',array('class'=>'btn btn-default')); ?>
					</span>
メール送信後、入力したメールアドレス宛に「新規登録画面ＵＲＬ通知メール」（携帯の場合は「読者登録画面ＵＲＬ通知メール」）が届きます。

					<?php echo $this->Form->end(); ?>
				</div>

			</div>
		</div>
	</div>
</div>



<!--  <div class="form-group">

                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Button</button>
                    </span>
                  </div>
           -->


