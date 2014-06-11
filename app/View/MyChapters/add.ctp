<div class="container">

<ul class="nav nav-tabs">
  <li><a href="mylessons/editing/1">Lesson</a></li>
  <li class="active"><a href="">Chapter</a></li>
  <li><a href="#">Section</a></li>
</ul>

<?php echo $this->Form->create('Chapter'); ?>

<?php echo $this->Form->input('code',array('label'=>false)); ?>
<?php echo $this->Form->input('name',array('label'=>false)); ?>
<?php echo $this->Form->hidden('lesson_id' ,array('value' => $lessonId)); ?>

<?php echo $this->Form->button("登録"); ?>
<?php echo $this->Form->end(); ?>


</div>

