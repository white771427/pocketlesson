<div class="container">
	<div class="row" >
		<div class="col-lg-12">
			<p class="lead"></p>

			<!-- chapterからレッスン情報を取得 ここで表示されるchapterはどれも同じレッスンを指す-->

			<p class="lead">
				<?php echo $chapters[0]['Lesson']['name']; ?>
			</p>
			<hr>
			<h4>学習目標</h4>
			<ul>
				<li><?php echo $chapters[0]['Lesson']['aim']; ?></li>
			</ul>

			<h4>対象者</h4>
			<ul>
				<li><?php echo $chapters[0]['Lesson']['reader']; ?></li>
			</ul>

			<!--  <h4>前提条件</h4>
		<ul>
		<li><?php echo $chapters[0]['Lesson']['precondition']; ?></li>
		</ul>
		-->
			<hr>
			<?php foreach($chapters as $chapter):?>
			<div class="row" align="center">
				<div class="thumb col-sm-10 col-md-10">
					<div class="thumbnail">

						<dt><?php echo $chapter['Chapter']['code'];?></dt>
						<!-- <img data-src="img/sample.png" alt="...">-->
						<img src="/pocketlesson/img/640x960_test.jpg" alt="" >
						<hr>
						<div class="caption">
						<?php echo 'chapter'.$chapter['Chapter']['code'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$chapter['Chapter']['name'] ?>
							<h3>Thumbnail label</h3>
							<p>...</p>

						</div>
					</div>
				</div>
			</div>

			<?php endforeach;?>
		</div>




<!-- 		<div class="col-lg-4">
			<p>ここに先生の紹介を入れる</p>
			<?php if(!empty($user)){
				echo $user['User']['familyname'];
		} ?>


			<dl>
				<dt>記述リスト</dt>
				<dd>説明リストは、用語を定義するのに最適です。</dd>
				<dt>ツイッターブートストラップ</dt>
				<dd>CSSフレームワークの大本命！ツイッターのデザインをそのままお届け！</dd>
			</dl>

		</div>-->
	</div>
</div>



