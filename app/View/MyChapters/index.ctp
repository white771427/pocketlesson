
<?php

echo $this->Html->scriptStart(array('inline'=>false));

?>

$(function(){
	$(".panel-heading").click(function(){

		$(this).parent().children(".panel-body").slideToggle();

	});

	$("a[id^='headerEditing']").click(function(event){
		event.stopPropagation();

	});

});



<?php

echo $this->Html->scriptEnd();
?>






<!--
<div class="container">

<ul class="nav nav-tabs">
  <li><a href="<?php echo "/pocketLesson/MyLessons/edit/".$lessonId;?>">Lesson</a></li>
  <li class="active"><a href="">Chapter</a></li>
  <li><a href="#">Section</a></li>
</ul>
-->

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!-- <h2 id="nav-tabs">編集</h2>-->
			<ul class="nav nav-tabs">
				<li><a
					href="<?php echo "/pocketLesson/MyLessons/edit/".$lessonId; ?>">レッスン登録・編集</a>
				</li>
				<li class="active"><a href=""">チャプター登録・編集</a>
				</li>
				<li><a href="#">Section</a></li>
			</ul>
		</div>
	</div>
</div>




<div class="container">
	<div class="bs-docs-section">

		<div class="row">
			<div class="col-lg-6">
				<div class="well bs-component">
<p>新規作成</p>
					<?php foreach($chapters as $chapter): ?>

					<div class="panel panel-default">

						<div class="panel-heading">
							<?php echo $chapter['Chapter']['name'];?>
							&nbsp;&nbsp;

							<?php echo $this->Html->link('>>編集',array('controller'=>'mychapters','action'=>'edit',$chapter['Chapter']['id']),array('id'=>'headerEditing'.$chapter['Chapter']['id']));  ?>

						</div>
						<div class="panel-body">
<p>新規作成</p>
							<?php foreach($chapter['Section'] as $section): ?>

							<p><?php echo $section['name'];?>&nbsp;&nbsp;
							<?php echo $this->Html->link('>>編集',array('controller'=>'mysections','action'=>'edit',$section['id'],$lessonId)); ?>
							</p>

							<?php endforeach;?>
						</div>
					</div>
					<?php endforeach;?>

				</div>
			</div>
		</div>







		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Panel heading</div>
			<div class="panel-body">
				<p>...</p>
			</div>

			<!-- List group -->
			<ul id="paneltest" class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('chapter新規作成'),array('action'=>'add',$lessonId),array('class'=>'btn btn-primary btn-small')); ?>Cras
					justo odio</li>
				<?php foreach($chapters as $chapter): ?>
				<li><a
					href="/pocketLesson/MyChapters/edit/<?php echo $chapter['Chapter']['id'] ?>"><?php echo $chapter['Chapter']['name']?>
				</a></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('section新規作成'),array('controller'=>'MySections','action'=>'add',$chapter['Chapter']['id']),array('class'=>'btn btn-primary btn-small')); ?>Dapibus
					ac facilisis in</li>
				<?php foreach($chapter['Section'] as $section): ?>
				&nbsp;&nbsp;&nbsp;
				<li><a
					href="/pocketLesson/MySections/edit/<?php echo $section['id'] ?>"><?php echo $section['name']?>
				</a></li>

				<?php endforeach; ?>
				</br>
				</br>
				<?php endforeach; ?>

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


</div>
