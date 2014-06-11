<?php echo $this->Html->scriptStart(array('inline'=>false));?>

$(function(){
	$(".panel-heading").click(function(){

		$(this).parent().children(".panel-body").slideToggle();
		//$(this).children(".panel-body").slideToggle();

	});

});

<?php echo $this->Html->scriptEnd();?>

<!-- <div class="container" align="center">
	<div class="row">




		<div class="col-lg-12">

			<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				<li class="active"><a href="#home" data-toggle="tab">ユーザー情報</a>
				</li>
				<li><a href="#profile" data-toggle="tab">受講している講座 <span
						class="badge"><?php echo $learnLessonCount; ?> </span>
				</a>
				</li>
				<li><a href="#profile" data-toggle="tab"> 作成した講座<span class="badge"><?php echo $teachLessonCount; ?>
					</span>
				</a>
				</li>

			</ul>
		</div>
	</div>
</div>
-->

<!--
<div class="container" align="center">
<ul class="nav nav-pills nav-justified">
  <li> <button type="button" class="btn btn-success">aaaaa</button></li>
  <li>受講している講座</li>
  <li>作成した講座</li>
</ul>

</div>

<div class="container" align="center">
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li class="visited"><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
</div>
-->

<div class="container" align="center">
	<div class="row">
		<div class="col-lg-4">
			<div class="bs-component">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">ユーザー情報</h3>
					</div>
					<div class="panel-body" align="left">

						<p>
							<b>ログインID</b><br>
							<?php echo $user['Users']['username']; ?>
						</p>

						<p>
							<b>名前</b><br>
							<?php echo $user['Users']['username']; ?>
						</p>

						<p>
							<b>ニックネーム</b><br>
							<?php echo $user['Users']['username']; ?>
						</p>

						<p>
							<b>ホームページ</b><br>
							<?php echo $user['Users']['username']; ?>
						</p>

						<p>
							<b>性別</b><br>
							<?php echo $user['Users']['username']; ?>
						</p>

						<p>
							<b>自己紹介</b><br>
							<?php echo $user['Users']['username']; ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						受講している講座 <span class="badge"><?php echo $learnLessonCount; ?> </span>
					</h3>
				</div>
				<div class="panel-body" align="left">
					<?php echo $this->Html->link('レッスン一覧表示',array('controller'=>'MyLessons','action'=>'search',$user['Users']['id'],AppController::$LEARN_LESSON),array('class'=>'btn btn-default btn-sm'));  ?>

					<?php foreach ($learnLessons as $lesson): ?>
						<p><?php echo $lesson['Lesson']['name'];?></p>

					<?php endforeach;?>

					<!-- <div class="paging">

						<?php

						echo $this->Paginator->prev('< 前へ', array(), null, array('class' => 'prev disabled'));

						echo $this->Paginator->numbers(array('separator' => ''));

						echo $this->Paginator->next('次へ >', array(), null, array('class' => 'next disabled'));

						?>

					</div>
					 -->



				</div>
			</div>
		</div>


		<div class="col-lg-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">
						作成した講座 <span class="badge"><?php echo $teachLessonCount; ?> </span>
					</h3>
				</div>
				<div class="panel-body" align="left">
					<?php echo $this->Html->link('レッスン一覧表示',array('controller'=>'MyLessons','action'=>'search',$user['Users']['id'],AppController::$CREATE_LESSON),array('class'=>'btn btn-default btn-sm')) ?>

					<?php echo $this->Html->link('新規作成',array('controller'=>'MyLessons','action'=>'add',$user['Users']['id']),array('class'=>'btn btn-default btn-sm')); ?>

					<?php foreach ($createLessons as $lesson): ?>
						<p><?php echo $lesson['Lesson']['name'];?></p>

					<?php endforeach;?>

					<!-- <div class="paging">

						<?php

						echo $this->Paginator->prev('< 前へ', array(), null, array('class' => 'prev disabled'));

						echo $this->Paginator->numbers(array('separator' => ''));

						echo $this->Paginator->next('次へ >', array(), null, array('class' => 'next disabled'));

						?>

					</div> -->

				</div>
			</div>
		</div>

		</div>

</div>

