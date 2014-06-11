<div class="container">

<div class="row">

</div>

<?php echo $this->Form->create('Lesson'); ?>

<?php echo $this->Form->input(null,array('type'=>'select','options'=>$categories,'empty'=>'-選択してください-')); ?>

<?php echo $this->Form->input('classification_id',array('type'=>'select','options'=>$classifications,'empty'=>'-選択してください-')); ?>

<?php echo $this->Form->select('select1',array("Mac" => 'マック',"Windows" => 'ウインドウズ',"Linux" => 'リナックス')); ?>

<?php echo $this->Form->input('name',array('label'=>false)); ?>

<?php echo $this->Form->button('登録'); ?>

<?php echo $this->Form->end(); ?>



</div>