<div class="container">

	<p class="lead">
		<?php echo $section['Section']['name']; ?>
	</p>
	<hr>
	<h4>学習目標</h4>
	<ul>
		<li><?php echo $section['Section']['aim']; ?></li>
	</ul>

	<!-- TODO 高さの自動調整が必須 -->
	<iframe title="YouTube video player" class="youtube-player"
		type="text/html" width="560" height="345"
		src="<?php echo $section['Section']['movie_url']; ?>?rel=0"
		frameborder="0"></iframe>
</div>
<!-- iframe youtube 参考URL:https://developers.google.com/youtube/player_parameters?hl=ja  -->
<!--  movie_urlはyoutubeの共有から埋め込みコードのsrcの内容 ?以下はyoutubeのapi 上記のURLを参考にする-->






<!--<iframe width="560" height="315" src="//www.youtube.com/embed/1_geCR9gaYM" frameborder="0" allowfullscreen></iframe>-->
