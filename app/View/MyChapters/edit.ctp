<div class="container">
<div class="row">
			<div class="col-lg-12">
	<!-- <h2 id="nav-tabs">編集</h2>-->
	<ul class="nav nav-tabs">
		<li><a
			href="<?php echo "/pocketLesson/MyLessons/edit/".$this->data['Lesson']['id']; ?>">レッスン登録・編集</a>
		</li>
		<li class="active"><a
			href="<?php echo "/pocketLesson/mychapters/index/".$this->data['Lesson']['id']; ?>">チャプター登録・編集</a>
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

					<?php echo $this->Form->create('Chapter',array('class'=>'form-horizontal','url'=>array('controller'=>'MyChapters','action'=>'edit'))); ?>

					<fieldset>
						<legend>チャプター登録・編集</legend>

						<div class="form-group">
							<label for="LessonName" class="col-lg-3 control-label">チャプター名</label>
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
								<?php echo $this->Form->input('reader',array('type'=>'text' ,'div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'レッスン終了後に取得できる知識等を記載してください'));?>
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


