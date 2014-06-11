
<!--
<div class="container">

<div class="row">

</div>


<?php
	if($type==0){

		echo '<p>受講しているレッスン</p>';
		echo '</br>';

	}elseif($type==1){

		echo '<p>作成しているレッスン</p>';
		echo '</br>';
	}
?>

<?php foreach($lessons as $lesson): ?>

	<p><a href="<?php echo "/pocketLesson/mylessons/edit/".$lesson['Lesson']['id']; ?>"><?php echo $lesson['Lesson']['name']; ?></a></p>

<?php endforeach; ?>


</div>
 -->


<div class="container">
	<h4>pickup</h4>
	<br />



	<div class="row">

		<?php foreach($lessons as $lesson):?>

		<?php
		$userId=-1;

		if(isset($lesson['Lesson']['user_id'])){
			$userId=$lesson['Lesson']['user_id'];
		};

		?>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail" align="center">
				<!--  <img data-src="holder.js/300x200" alt="...">-->

				<?php if($type==AppController::$LEARN_LESSON):?>
				<!--  受講しているレッスンの場合-->

				<?php echo $this->Html->link($this->Html->image('sample.png'),array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false));?>

				<?php else:?>
				<!--  作成したレッスンの場合-->

				<?php echo $this->Html->link($this->Html->image('sample.png'),array('controller'=>'MyLessons','action'=>'edit',$lesson['Lesson']['id'],$userId),array('escape'=>false));?>

				<?php endif;?>

				<!--  <img data-src="img/sample.png" alt="...">-->
				<div class="caption">
					<h4>
						<?php if($type==AppController::$LEARN_LESSON):?>
						<?php echo $this->Html->link($lesson['Lesson']['name'],array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false)); ?>
						<?php else:?>
						<?php echo $this->Html->link($lesson['Lesson']['name'],array('controller'=>'MyLessons','action'=>'edit',$lesson['Lesson']['id'],$userId),array('escape'=>false)); ?>
						<?php endif;?>

					</h4>
					<p>
						<?php
						if(empty($lesson['Lesson']['aim'])){
							echo "<br/>";
						}else{
							echo $lesson['Lesson']['aim'];
						};
						?>
					</p>
					<p>

						<?php echo "teacher:".$lesson['User']['familyname'].$lesson['User']['firstname'] ?>
					</p>
					<p>
						<!--  <a href="#" class="btn btn-primary" role="button">Button</a>-->

						<?php if($type==AppController::$LEARN_LESSON):?>
						<?php echo $this->Html->link('受講する',array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>
						<?php else:?>
						<?php echo $this->Html->link('編集する',array('controller'=>'MyLessons','action'=>'edit',$lesson['Lesson']['id'],$userId),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

						<?php endif;?>


					</p>
				</div>
			</div>
			<br />
		</div>

		<?php endforeach;?>


	</div>

</div>

<div class="container" align="center">
<ul class="pagination">
	<?php
	//$this->Paginator->options(array('url'=>$searchword));
	echo $this->Paginator->prev('←'.__('previous'),array(),null,array('class'=>'previous disabled'));
	echo $this->Paginator->numbers(array('separator'=>''));
	echo $this->Paginator->next('→'.__('next'),array(),null,array('class'=>'next disabled'));

	?>
	</ul>
</div>
