<div class="container">

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

			  	<li class="nav-header"><?php echo $category['Category']['name']; ?></li>

			  	<?php foreach($category['Classification'] as $classification):?>
			  		<li><?php echo '<a href="/pocketLesson/categories/search/'.$category['Category']['code'].'/'.$classification['code'].'/'.$classification['name'].'">'.$classification['name'].'</a>'; ?></li>
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
				foreach($sxml2->entry as $entry){

					$media = $entry->children('http://search.yahoo.com/mrss/');

	 				$content = $media->group->content->attributes();

					print '<iframe title="YouTube video player" class="youtube-player" type="text/html" width="300" height="300" src="'.$content -> url.'" frameborder="0"></iframe>';
				}
				?>
				<!-- <iframe title="YouTube video player" class="youtube-player" type="text/html" width="300" height="300" src="<?php echo $content -> url; ?>" frameborder="0"></iframe> -->

			</div>

			<div class="col-lg-4">
				<p><a href="sample2.html"><img src="bootstrap/img/sample.png"  width="270" /></a></p>
				<h4><a href="sample2.html">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,</a></h4>
				<p><i class="icon-tag"></i>life<i class="icon-user"></i>Taichi Kutsukake</p>
				<p><i class="icon-heart"></i>\1,000<i class="icon-user"></i>30人</p>
				</div>
			<div class="col-lg-4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
				<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
			</div>
			<div class="col-lg-4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
			</div>
       </div>


</div>