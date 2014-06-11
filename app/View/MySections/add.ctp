<div class="container">

<ul class="nav nav-tabs">
  <li><a href="mylessons/editing/1">Lesson</a></li>
  <li class="active"><a href="">Chapter</a></li>
  <li><a href="#">Section</a></li>
</ul>



<?php echo $this->Form->create('Section'); ?>
<?php echo $this->Form->input('name',array('label'=>false)); ?>
<?php echo $this->Form->hidden('chapter_id',array('value'=>$chapterId)); ?>
<?php echo $this->Form->end('登録'); ?>
</div>

