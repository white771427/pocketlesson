
<?php
 $this->Html->scriptStart(array('inline'=>false));
 ?>

$("#hide_button").click(function(){
    $("p").html("<strong>変更後</strong>");
    $("#paneltest").children('li').hide();
});

$("#show_button").click(function(){
	$("#paneltest").children('li').show();
});


$("#paneltest").click(function(){
    $(this).children('li').hide();
});

 <?php
 $this->Html->scriptEnd();
 ?>

<div class="container">

<div class="row">

</div>

<!-- <form action="/pocketLesson/chapters/add" method="post"> -->

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- List group -->
  <ul id ="paneltest" class="list-group">
    <li class="list-group-item"><?php echo $this->Html->link(__('chapter新規作成'),array('action'=>'add',$lessonId),array('class'=>'btn btn-primary btn-small')); ?>Cras justo odio</li>
    <li class="list-group-item"><?php echo $this->Html->link(__('section新規作成'),array('action'=>'../sections/add',1),array('class'=>'btn btn-primary btn-small')); ?>Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>

<button id="hide_button">隠す</button>
<p>aaaaaaa</p>

<button id="show_button">表示する</button>

</div>

<!-- </form> -->