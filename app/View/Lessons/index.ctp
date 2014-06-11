<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<p class="lead"></p>

			<!-- chapterからレッスン情報を取得 ここで表示されるchapterはどれも同じレッスンを指す-->

			<p class="lead">
				<?php echo $chapters[0]['Lesson']['name']; ?>
			</p>
			<hr>
			<h4>学習目標</h4>
			<ul>
				<li><?php echo $chapters[0]['Lesson']['aim']; ?>
				</li>
			</ul>

			<h4>対象者</h4>
			<ul>
				<li><?php echo $chapters[0]['Lesson']['reader']; ?>
				</li>
			</ul>

			<!--  <h4>前提条件</h4>
		<ul>
		<li><?php echo $chapters[0]['Lesson']['precondition']; ?></li>
		</ul>
		-->
			<hr>
			<?php foreach($chapters as $chapter):?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<?php echo 'chapter'.$chapter['Chapter']['code'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$chapter['Chapter']['name'] ?>
				</div>



				<div class="panel-body">
				<ol>
				<?php foreach($chapter['Section'] as $section):?>
				<!--  <div class="panel-body">-->

					<li><?php echo $this->Html->link($section['name'],array('controller'=>'sections','action'=>'index',$section['id'])); ?></li>
					<p><?php echo $section['aim'];?></p>
					<hr>
					<!--  documentが必要な場合はここでダウンロードできるようにする-->

				<!--   -->
				<?php endforeach;?>
				</ol>
				</div>
			</div>

			<?php endforeach;?>
		</div>




		<div class="col-lg-4">
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

		</div>
	</div>
</div>



