
<div class="container">
<div class="row">
			<div class="col-lg-12">
	<!-- <h2 id="nav-tabs">編集</h2>-->
	<ul class="nav nav-tabs">
		<li class="active" background-color="red"><a
			href="<?php echo "/pocketLesson/MyLessons/index/".$this->data['Lesson']['id']; ?>">レッスン登録・編集</a>
		</li>
		<li><a
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

					<?php echo $this->Form->create('Lesson',array('class'=>'form-horizontal','url'=>array('controller'=>'MyLessons','action'=>'edit'))); ?>

					<fieldset>
						<legend>レッスン登録・編集</legend>

						<div class="form-group">
							<label for="LessonClassificationId"
								class="col-lg-3 control-label">大分類</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('category_id',array('type'=>'select','options'=>$categories,'selected' => $classification['Category']['id'], 'empty'=>'選択してください','label'=>false,'div'=>false,'class'=>'form-control'));?>
							</div>
						</div>

						<div class="form-group">
							<label for="LessonClassificationId"
								class="col-lg-3 control-label">カテゴリー</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('classification_id',array('type'=>'select','options'=>$classifications,'selected' => $this->data['Lesson']['classification_id'], 'empty'=>'選択してください','label'=>false,'div'=>false,'class'=>'form-control'));?>
							</div>
						</div>


						<div class="form-group">
							<label for="LessonName" class="col-lg-3 control-label">レッスン名</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('name',array('type'=>'text' ,'div'=>false,'label'=>false,'class'=>'form-control'));?>
							</div>
						</div>

						<div class="form-group">
							<label for="LessonAim" class="col-lg-3 control-label">レッスン目標</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('aim',array('type'=>'textarea' ,'div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'レッスン終了後に取得できる知識等を記載してください'));?>
							</div>
						</div>

						<div class="form-group">
							<label for="LessonReader" class="col-lg-3 control-label">対象受講者</label>
							<div class="col-lg-9">
								<?php echo $this->Form->input('reader',array('type'=>'text' ,'div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'レッスン終了後に取得できる知識等を記載してください'));?>
							</div>
						</div>


						<div class="form-group">
							<label for="LessonLevel" class="col-lg-3 control-label">対象レベル</label>
							<div class="col-lg-9">
								<?php
								$radios = array('0'=>'すべてのレベル','1'=>'入門','2'=>'中級','3'=>'上級');

								$default=0;

								if(!empty($this->data['Lesson']['level'])){
										$default=$this->data['Lesson']['level'];
									}

									echo $this->Form->input('level', array('legend' => false,'type'=>'radio' , 'options' => $radios,'div'=>false,'label'=>false,'value'=>$default));
									?>
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
<div class="form-group">
							<label for="inputEmail" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputEmail"
									placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" id="inputPassword"
									placeholder="Password">
								<div class="checkbox">
									<label> <input type="checkbox"> Checkbox
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textArea" class="col-lg-2 control-label">Textarea</label>
							<div class="col-lg-10">
								<textarea class="form-control" rows="3" id="textArea"></textarea>
								<span class="help-block">A longer block of help text that breaks
									onto a new line and may extend beyond one line.</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Radios</label>
							<div class="col-lg-10">
								<div class="radio">
									<label> <input type="radio" name="optionsRadios"
										id="optionsRadios1" value="option1" checked=""> Option one is
										this
									</label>
								</div>
								<div class="radio">
									<label> <input type="radio" name="optionsRadios"
										id="optionsRadios2" value="option2"> Option two can be
										something else
									</label>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="select" class="col-lg-2 control-label">Selects</label>
							<div class="col-lg-10">
								<select class="form-control" id="select">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select> <br> <select multiple="" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>




<div class="container">




	<?php
	$this->Js->get('#LessonCategoryId')->event(
    'change',
    $this->Js->request(
        array('controller'=>'classifications','action'=>'ajax_classifications'),
        array('update' => '#LessonClassificationId', 'dataExpression' => true, 'data' => '$("#LessonCategoryId").serialize()')
    )
);
echo $this->Js->writeBuffer();
?>



	<?php echo $this->Form->create('Lesson',array('url'=>array('controller'=>'MyLessons','action'=>'edit'))); ?>


	<?php
	echo $this->Form->input('category_id',array('type'=>'select','options'=>$categories,'selected' => $classification['Category']['id'],'empty'=>'選択してください'));
	echo $this->Form->input('classification_id',array('type'=>'select','options'=>$classifications,'selected' => $this->data['Lesson']['classification_id'], 'empty'=>'選択してください'));


	/** レッスン名*/
	echo $this->Form->label('name','<font color="red">*</font>レッスン名',array('class'=>'control-label','for'=>'name'));
	echo $this->Form->input('name',array('label'=>false,'class'=>'form-control','div'=>array('class'=>'controls')));


	echo $this->Form->label('aim','<font color="red">*</font>レッスンの目標',array('class'=>'control-label','for'=>'name'));
	echo $this->Form->input('aim',array('label'=>false,'class'=>'form-control','div'=>array('class'=>'controls')));

	echo $this->Form->label('reader','<font color="red">*</font>対象受講者',array('class'=>'control-label','for'=>'name'));
	echo $this->Form->input('reader',array('label'=>false,'class'=>'form-control','div'=>array('class'=>'controls')));

	echo $this->Form->label('reader','<font color="red">*</font>受講前提条件',array('class'=>'control-label','for'=>'name'));
	echo $this->Form->input('precondition',array('label'=>false,'class'=>'form-control','div'=>array('class'=>'controls')));

	echo $this->Form->radio('level',array('0'=>'すべてのレベル','1'=>'入門','2'=>'中級','3'=>'上級') ,null, array('value'=>$this->data['Lesson']['level']));

	?>

	<?php echo $this->Form->button('登録'); ?>
	<?php echo $this->Form->end(); ?>




</div>
-->
