<?php echo $this->Form->create('Section'); ?>
<?php echo $this->Form->input('name',array('label'=>false)); ?>
<?php echo $this->Form->hidden('chapter_id',array('value'=>$chapterId)); ?>
<?php echo $this->Form->end('登録'); ?>