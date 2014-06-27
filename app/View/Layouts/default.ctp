<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo __('CakePHP: the rapid development php framework:'); ?>
	<?php echo $title_for_layout; ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->


<style>
body {
	padding-top: 60px;
	/* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
<?php echo $this->Html->css('bootstrap.min'); ?>
<?php echo $this->Html->css('bootstrap-responsive.min'); ?>
<?php echo $this->Html->css('original'); ?>




<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Le fav and touch icons -->
<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->


<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('masonry.pkgd.min'); ?>
<?php echo $this->Html->script('imagesloaded'); ?>


<script type="text/javascript">

$(function(){

	  //タイリング設定
 // $('#container').masonry(
	 //   {
  	//        itemSelector:   '.thumbnails',
  	  //      columnWidth:    200,    //width,margin,border等の合計
  	    //});

	 var $container = $('#thumbnails');
	   $container.imagesLoaded(function() {
	   $container.masonry({
	      columnWidth: '.thumb',
	      itemSelector: '.thumb'
	      });
	    });

	   // $container.imagesLoaded(function(){ //imagesLoadedを入れて崩れないように
	     //   $('#container').masonry({ // id="container"の中の
	       //     itemSelector : '.item', // class="item"に対して適用
	         //   columnWidth: 270, //一列の幅サイズを指定
	           // isAnimated: true, //スムースアニメーション設定
	           // isFitWidth: true, //親要素の幅サイズがピッタリ
	        //});

});

</script>


<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<link
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"
	rel="stylesheet" />
</head>



<body>


	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">PocketLesson</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/pocketLesson/top/">Home</a></li>
					<li><a href="/pocketLesson/categories/">講座一覧</a></li>
					<li><a href="#contact">講座作成</a></li>
					<li><a href="">PocketLessonとは？</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Dropdown <b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!--<li><a href="http://builtwithbootstrap.com/" target="_blank">ログイン</a></li>-->
					<?php if ($auth->loggedIn()) : ?>
					<li><a href="/pocketLesson/mypages">マイページ</a></li>
					<!-- <li><?php echo htmlspecialchars($auth->user('username')); ?></li>-->
					<li><a href="/pocketLesson/users/logout">ログアウト</a></li>
					<?php else:?>
					<li><a href="/pocketLesson/users/login">ログイン</a></li>
					<li><a href="/pocketLesson/users/signup">新規登録</a></li>
					<?php endif ?>


					<!--<li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">新規登録</a></li>-->
				</ul>

			</div>
			<!--/.navbar-collapse -->
		</div>
	</div>

	<div id="content">
		<div class="container">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<hr>

	</div>

	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<footer>
					<p>&copy; Dear&Hugger.Co 2014</p>
				</footer>
			</div>
		</div>

	</div>







	<!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<?php echo $this->fetch('script'); ?>

</body>
</html>
