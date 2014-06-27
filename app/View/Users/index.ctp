
<div class="container" >

<div class="bs-callout bs-callout-info">
		<ul>
			<li>ユーザーの登録をしている方は「ログイン」ボタンをクリックしてログインしてください</li>
			<li>ユーザーの登録が未完了の方は「新規登録」ボタンをクリックしてユーザーの新規登録をしてください</li>
		</ul>

</div>


<?php echo $this->Html->link('ログイン &raquo;',array('controller'=>'Users','action'=>'login'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

<?php echo $this->Html->link('新規登録 &raquo;',array('controller'=>'Users','action'=>'signup'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>


</div>