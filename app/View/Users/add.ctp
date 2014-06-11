
<div class="container">
	<div class="col-lg-6">
		<h3>メンバー登録</h3>
		<hr>
			<?php echo $this->Form->create('User',array('type'=>'post')); ?>
			<?php echo $this->Form->input('familyname'); ?>
			<?php echo $this->Form->input('password'); ?>
			<?php echo $this->Form->input('nickname'); ?>
				<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo $this->Form->end(); ?>
	</div>
</div>



