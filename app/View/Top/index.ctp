<!-- Main jumbotron for a primary marketing message or call to action -->
<!--  <div class="jumbotron">
      <div class="container">
        <h1>PocketLesson</h1> -->
<!-- <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p>いつでもどこでも気軽に3分レッスン。3日坊主も継続できる。一つ一つステップアップ</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>
-->
<div class="container">
	<div class="page-header" id="banner">
		<div class="row">
			<div class="col-lg-12">
				<h1>PocketLesson</h1>
				<!--  <small>Subtext for header</small>-->
				<p class="lead">いつでもどこでも気軽に3分レッスン</p>
			</div>
		</div>
	</div>
</div>

<!--  test す3-->
<div class="container"
	align="center">


	<!--<h1>Bootstrap starter template2</h1>-->

	<div class="row" align="center">
		<div class="col-lg-6">
			<!-- <p><a href="sample2.html"><img src="bootstrap/img/sample.png"  width="270" /></a></p>-->
			<h3>学びたい講座を探す</h3>
			<p>学びたい講座がきっと見つかるはず。自分の受けたい講座を探してみましょう</p>
			<p>
				<?php echo $this->Html->link('講座を探す &raquo;',array('controller'=>'Lessons','action'=>'search'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>
			</p>
		</div>

		<div class="col-lg-6">
			<!-- <p><a href="sample2.html"><img src="bootstrap/img/sample.png"  width="270" /></a></p>-->
			<h3>講座を作成する</h3>
			<p>是非あなたの知識をポケットレッスンに登録してください</p>
			<p>

				<?php echo $this->Html->link('講座作成 &raquo;',array('controller'=>'MyLessons','action'=>'index'),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

			</p>
		</div>

	</div>
	<hr>
</div>



<div class="container">
	<h4>pickup</h4>
	<br />



	<div id="thumbnails">

		<?php foreach($lessons as $lesson):?>

		<?php
		$userId=-1;

		if(isset($lesson['Lesson']['user_id'])){
			$userId=$lesson['Lesson']['user_id'];
		};

		?>

		<div class="thumb col-lg-3 col-md-3 col-sm-4 col-xs-6">
			<div class="thumbnail">
				<!--  <img data-src="holder.js/300x200" alt="...">-->

				<?php echo $this->Html->link($this->Html->image('sample.png'),array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('class'=>'thumbnail','escape'=>false));?>

				<!--  <img data-src="img/sample.png" alt="...">-->
				<div class="caption">
					<h4>
						<?php



						echo $this->Html->link($lesson['Lesson']['name'],array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false)); ?>
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
						<?php echo $this->Html->link('受講する',array('controller'=>'Lessons','action'=>'index',$lesson['Lesson']['id'],$userId),array('escape'=>false,'class' => 'btn btn-default','role' => 'button')); ?>

					</p>
				</div>
			</div>
			<br />
		</div>

		<?php endforeach;?>

	</div>




	<!-- <div class="row">
		<div class="col-lg-4">
			<p>
				<a href="sample2.html"><img src="bootstrap/img/sample.png"
					width="270" /> </a>
			</p>
			<h4>
				<a href="sample2.html">Donec id elit non mi porta gravida at eget
					metus. Fusce dapibus, tellus ac cursus commodo,</a>
			</h4>
			<p>
				<i class="icon-tag"></i>life<i class="icon-user"></i>Taichi
				Kutsukake
			</p>
			<p>
				<i class="icon-heart"></i>\1,000<i class="icon-user"></i>30人
			</p>
		</div>
		<div class="col-lg-4">
			<h2>Heading</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus commodo, tortor mauris condimentum nibh, ut
				fermentum massa justo sit amet risus. Etiam porta sem malesuada
				magna mollis euismod. Donec sed odio dui.</p>
			<p>
				<a class="btn btn-default" href="#">View details &raquo;</a>
			</p>
		</div>
		<div class="col-lg-4">
			<h2>Heading</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
				egestas eget quam. Vestibulum id ligula porta felis euismod semper.
				Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
				nibh, ut fermentum massa justo sit amet risus.</p>
			<p>
				<a class="btn btn-default" href="#">View details &raquo;</a>
			</p>
		</div>

	</div>
	 -->

</div>
