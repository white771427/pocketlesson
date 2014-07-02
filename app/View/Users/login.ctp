
<?php echo $this->Html->scriptStart(array('inline'=>false)); ?>

$(function(){

	$("#cancel").click(function(){
		$("#UserUsername").val("");
		$("#UserPassword").val("");

		return false;
	});


});


<?php echo $this->Html->scriptEnd(); ?>



<div class="container">
	<div class="bs-callout bs-callout-info">
		<h4>ログイン</h4>
		<ul>
			<li>ユーザー名（メールアドレス）及びパスワードを入力してログインしてください</li>
			<li>ユーザーの登録がお済でない方はユーザーの登録を行ってください</li>
		</ul>

	</div>
	<hr>

	<div class="col-lg-6">

		<div class="well">
			<fieldset>
				<legend>ログイン</legend>

				<?php echo $this->Form->create('User',array('class'=>'bs-example form-horizontal')); ?>

				<div class="form-group">
					<div class="col-lg-10">
						<?php echo $this->Form->input('username',array('label' => 'ユーザー名','class'=>'form-control')); ?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-10">
						<?php echo $this->Form->input('password',array('label' => 'パスワード','class'=>'form-control')); ?>
					</div>
				</div>

				<div class="checkbox">
					<label> <input type="checkbox"> パスワードを記憶する
					</label>
				</div>
				<br>
				<div class="form-group">
					<div class="col-lg-10">
						<button id="cancel" class="btn btn-primary">Cancel</button>
						<button type="submit" class="btn btn-default">ログイン</button>
					</div>
				</div>

				<?php echo $this->Form->end(); ?>
			</fieldset>
		</div>
	</div>

	<div class="col-lg-6">

		<div class="well-back-color-white">
			<fieldset>
				<legend>ユーザー登録を行ってない方へ</legend>

				ユーザー登録を行うと以下の内容が出来るようになります。
				<ul>
					<li>講座の作成</li>
					<li>お気に入りの講座登録</li>

				</ul>

				<div class="form-group">
					<div class="col-lg-10">
						<?php echo $this->Html->link('ユーザー登録 &raquo;',array('controller'=>'Users','action'=>'signup'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

					</div>
				</div>


			</fieldset>
		</div>
	</div>
</div>


