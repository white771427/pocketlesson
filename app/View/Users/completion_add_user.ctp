<div class="container">

	<div class="bs-callout bs-callout-info">
		<h4>ユーザー登録完了</h4>
		<ul>
			<li>ユーザーの登録が完了しました。</li>
			<li>「ログイン」ボタンを押下して、ログインを行ってください</li>
		</ul>
	</div>

	<?php echo $this->Html->link('ログイン &raquo;',array('controller'=>'Users','action'=>'login'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

</div>