<div class="row" style="margin:0;padding:;margin-top: 50px;">
	<div class="col-md-1">
		
	</div>
	<div class="col-md-11" style="background:rgba(0,0,0,0.7);">
		<div class="row">
		<?php foreach (App::getInstance()->getTable('post')->last() as $post) : ?>
			<div id="article" class="col-md-6">
			<div class="imageArticle"><img src="img/imageteste.png"></div>
			<div class="contenuArticle">
			<h2><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h2>
			<h4>Article posté par <?= $post->auteur ?> le <?= $post->date_creation ?></h4>
			<p><?= $post->contenu ?></p>
			</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<div class="col-md-1">
		
	</div>
</div>