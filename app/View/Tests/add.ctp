
<div class="container">


	<?php echo $this->Form->create('Test',array('type'=>'file')); ?>

	<div class="form-group">
		<label for="LessonImg" class="col-lg-3 control-label">画像</label>
		<div class="col-lg-9">
			<!-- <?php echo $this->Form->input('image',array('type'=>'file','label'=>'')); ?> -->
			<?php echo $this->Form->file('image');?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<?php echo $this->Form->end(array('label'=>'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登録&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','div'=>false,'class'=>'btn btn-primary')); ?>

			<!-- <button class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-primary">Submit</button>-->
		</div>
	</div>


</div>
