<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php echo $this->Form->create(null,array('action'=>'nameSearch')); ?>

			<div class="form-group">
				<!-- <label class="control-label">Input addons</label>-->
				<div class="input-group">
					<input type="text" class="form-control" name="categoryText"
						placeholder="Search" /> <span class="input-group-btn"> <?php echo $this->form->submit('検索',array('name'=>'categorySearch','class'=>'btn btn-default')); ?>
					</span>
				</div>
			</div>
			<?php echo $this-> Form->end(); ?>

		</div>
	</div>
</div>

<div class="container">

	<div class="row">
		<div class="col-md-3">
			<ul class="nav bs-sidenav">
				<?php foreach($categories as $category): ?>

				<li class="nav-header"><?php echo $category['Category']['name']; ?>
				</li>

				<?php foreach($category['Classification'] as $classification):?>

				<li><?php echo '<a href="/pocketLesson/categories/idSearch/'.$classification['id'].'">'.$classification['name'].'</a>'; ?>
				</li>

				<?php endforeach; ?>

				<?php endforeach; ?>

			</ul>
		</div>
		<div class="col-md-9">

			<div class="row">

				<?php foreach($lessons as $lesson):?>

				<?php $userId=-1;
				if(isset($lesson['Lesson']['user_id'])){
					$userId=$lesson['Lesson']['user_id'];
				};
				?>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail" align="center">

						<?php echo $this->Html->link($this->Html->image('sample.png'),array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false));?>

						<div class="caption">
							<h4>
								<?php echo $this->Html->link($lesson['Lesson']['name'],array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false)); ?>
							</h4>
							<p>
								<?php if(empty($lesson['Lesson']['aim'])){
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
								<?php echo $this->Html->link('受講する',array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

							</p>
						</div>
					</div>
					<br />
				</div>




				<?php endforeach;?>

			</div>



		</div>

	</div>
</div>
