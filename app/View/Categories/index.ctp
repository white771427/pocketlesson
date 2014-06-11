<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php echo $this->Form->create(null,array('action'=>'nameSearch')); ?>

			 <div class="form-group">
                  <!-- <label class="control-label">Input addons</label>-->
                  <div class="input-group">
                    <input type="text" class="form-control" name="categoryText" placeholder="Search"/>
                    <span class="input-group-btn">
                      <?php echo $this->form->submit('検索',array('name'=>'categorySearch','class'=>'btn btn-default')); ?>
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



		</div>

	</div>
</div>


<div class="container"></div>

<div class="container bs-docs-container">
	<div class="row">
		<div class="col-md-3">
			<div class="bs-sidebar hidden-print" role="complementary">
				<ul class="nav bs-sidenav">

					<div class="container bs-docs-container">
						<div class="row">
							<div class="col-md-3">
								<div class="bs-sidebar hidden-print" role="complementary">

									<ul class="nav bs-sidenav">
										<?php foreach($categories as $category): ?>

										<li class="nav-header"><?php echo $category['Category']['name']; ?>
										</li>

										<?php foreach($category['Classification'] as $classification):?>
										<!-- youtubeの検索をする場合 -->
										<!-- <li><?php echo '<a href="/pocketLesson/categories/search/'.$category['Category']['code'].'/'.$classification['code'].'/'.$classification['name'].'">'.$classification['name'].'</a>'; ?></li>-->
										<li><?php echo '<a href="/pocketLesson/categories/search/'.$classification['id'].'">'.$classification['name'].'</a>'; ?>
										</li>
										<!-- .'/'.$classification['code']'.' -->
										<?php endforeach; ?>

										<?php endforeach; ?>

									</ul>
								</div>
							</div>
							<div class="col-md-9" role="main">
								<!-- Glyphicons
  ================================================== -->
								<div class="bs-docs-section">
									<div class="page-header">
										<h1 id="glyphicons">Glyphicons</h1>
									</div>

								</div>

								<div class="row">

									<div class="span12">

										<?php
										if(isset($sxml2)){

				foreach($sxml2->entry as $entry){

					$media = $entry->children('http://search.yahoo.com/mrss/');

					$content = $media->group->content->attributes();

					print '<iframe title="YouTube video player" class="youtube-player" type="text/html" width="300" height="300" src="'.$content -> url.'" frameborder="0"></iframe>';
				}
				}
				?>
										<!-- <iframe title="YouTube video player" class="youtube-player" type="text/html" width="300" height="300" src="<?php echo $content -> url; ?>" frameborder="0"></iframe> -->

									</div>

									<div class="col-lg-4">
										<p>
											<a href="sample2.html"><img src="bootstrap/img/sample.png"
												width="270" /> </a>
										</p>
										<h4>
											<a href="sample2.html">Donec id elit non mi porta gravida at
												eget metus. Fusce dapibus, tellus ac cursus commodo,</a>
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
										<p>Donec id elit non mi porta gravida at eget metus. Fusce
											dapibus, tellus ac cursus commodo, tortor mauris condimentum
											nibh, ut fermentum massa justo sit amet risus. Etiam porta
											sem malesuada magna mollis euismod. Donec sed odio dui.</p>
										<p>
											<a class="btn btn-default" href="#">View details &raquo;</a>
										</p>
									</div>
									<div class="col-lg-4">
										<h2>Heading</h2>
										<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis
											in, egestas eget quam. Vestibulum id ligula porta felis
											euismod semper. Fusce dapibus, tellus ac cursus commodo,
											tortor mauris condimentum nibh, ut fermentum massa justo sit
											amet risus.</p>
										<p>
											<a class="btn btn-default" href="#">View details &raquo;</a>
										</p>
									</div>
								</div>


							</div>

							<form class="well form-search">
								<input type="text" class="input-medium search-query">
								<button type="submit" class="btn">
									<i class="glyphicon glyphicon-home"></i>
								</button>
							</form>

							<table>
								<?php echo $this->element('sql_dump'); ?>
								<?php

								foreach ($categories as $category):
								?>

								<tr>
									<td><?php echo $category['Category']['code']; ?></td>
									<td><?php echo $category['Category']['name']; ?></td>
								</tr>


								<tr>
									<?php
									foreach ($category['Classification'] as $classification):
									?>

									<td><?php echo $classification['code']; ?></td>
									<td><?php echo $classification['name']; ?></td>
								</tr>
								<?php endforeach;?>
								<!--<tr>
<td> <?php echo $classification['Classification']['name']; ?></td>
</tr>-->
								<?php endforeach;?>
							</table>