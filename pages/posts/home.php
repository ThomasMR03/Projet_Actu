<div class="row" style="margin:0;padding:0;">
	<div class="col-md-1">
		
	</div>
	<div class="col-md-7" style="background:rgba(0,0,0,0.7);">
		<div class="row">
		<div class="col-md-12"><h1 class="actu">Actualité</h1></div>
		<?php foreach (App::getInstance()->getTable('post')->last() as $post) : ?>
			<div id="article" class="col-md-6">
			<div class="imageArticle"><img src="img/news.jpg"></div>
			<div class="contenuArticle">
			<h2><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h2>
			<h4>Article posté par <?= $post->auteur ?> le <?= $post->date_creation ?></h4>
			<p><?= $post->contenu ?></p>
			</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-2" id="colonneGauche">
		<h3 class="actu">Articles récents</h3>
		<?php foreach (App::getInstance()->getTable('post')->lastRecent() as $post) : ?>
			<div class="fondRecent">
				<h5><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h5>
				<div class="imageArticleRecent"><img src="img/news.jpg"></div>
				<p>Article posté par <?= $post->auteur ?> <br> Le <?= $post->date_creation ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>