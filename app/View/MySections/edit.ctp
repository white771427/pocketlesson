<div class="container">
<div class="row">
			<div class="col-lg-12">
	<!-- <h2 id="nav-tabs">編集</h2>-->
	<ul class="nav nav-tabs">
		<li><a
			href="<?php echo "/pocketLesson/MyLessons/edit/".$lessonId; ?>">レッスン登録・編集</a>
		</li>
		<li class="active"><a
			href="<?php echo "/pocketLesson/mychapters/index/".$this->data['Section']['chapter_id']; ?>">チャプター登録・編集</a>
		</li>
		<li><a href="#">Section</a></li>
	</ul>
</div>
</div>
</div>
	<!-- </div>-->
<div class="container">
	<div class="bs-docs-section">
		<!-- <div class="row">
			<div class="col-lg-12">
				<!-- <div class="page-header">
					<h1 id="forms">Forms</h1>
				</div>

			</div>
		</div>
-->



		<div class="row">
			<div class="col-lg-6">
				<div class="well bs-component">

					<?php echo $this->Form->create('Section',array('class'=>'form-horizontal','url'=>array('controller'=>'MySections','action'=>'edit'))); ?>

					<fieldset>
						<legend>セクション登録・編集</legend>

						<div class="form-group">
							<label for="LessonName" class="col-lg-3 control-label">セクション名</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('name',array('type'=>'text' ,'div'=>false,'label'=>false,'class'=>'form-control'));?>
							</div>
						</div>

						<div class="form-group">
							<label for="LessonAim" class="col-lg-3 control-label">目標</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('aim',array('type'=>'textarea' ,'div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'レッスン終了後に取得できる知識等を記載してください'));?>
							</div>
						</div>

						<div class="form-group">
							<label for="textUrl" class="col-lg-3 control-label">必要なテキスト</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('textUrl',array('type'=>'text' ,'div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'レッスン終了後に取得できる知識等を記載してください'));?>
							</div>
						</div>


						<div class="form-group">
							<label for="textUrl" class="col-lg-3 control-label">動画URL</label>
							<div class="col-lg-9">
							<?php echo $this->Form->input('moveiUrl',array('type'=>'text','div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'youtubeのURLを入力してください'));?>
							</div>
						</div>




						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								<?php echo $this->Form->end(array('label'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登録&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','div'=>false,'class'=>'btn btn-primary')); ?>

								<!-- <button class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-primary">Submit</button>-->
							</div>
						</div>

					</fieldset>

				</div>
			</div>


		</div>

	</div>

</div>





<!--

<div class="container">

<ul class="nav nav-tabs">
  <li><a href="<?php echo "/pocketLesson/MyLessons/edit/".$lessonId; ?>">Lesson</a></li>
  <li class="active"><a href="">Chapter</a></li>
  <li><a href="#">Section</a></li>
</ul>



<?php echo $this->Form->create('Section');
echo $this->Form->label('name','<font color="red">*</font>セクション名',array('class'=>'control-label','for'=>'name'));
echo $this->Form->input('name',array('label'=>false,'class'=>'form-control','div'=>array('class'=>'controls')));
?>

<input type="hidden" name="lesson_id" value="<?php echo $lessonId ?>">


<?php echo $this->Form->end('登録'); ?>
</div>

 -->