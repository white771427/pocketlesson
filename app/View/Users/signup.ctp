
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group">

					<?php echo $this->Form->create('User',array('type'=>'post','url'=>'signup')); ?>

					<?php echo $this->Form->input('username',array('class'=>'form-control','label'=>'メールアドレス', 'placeholder'=>'メールアドレスを入力してください')); ?>

					<span class="input-group-btn"> <?php echo $this->form->submit('送信',array('class'=>'btn btn-default')); ?>
					</span>

					<?php echo $this->Form->end(); ?>
				</div>

			</div>
		</div>
	</div>
</div>



<!--  <div class="form-group">

                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Button</button>
                    </span>
                  </div>
           -->


