
<div class="container" align="center">

<?php echo $message; ?>

<div class="row">
<?php echo $this->Html->link('ログイン &raquo;',array('controller'=>'Users','action'=>'login'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

<?php echo $this->Html->link('新規登録 &raquo;',array('controller'=>'Users','action'=>'signup'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>
</div>

</div>