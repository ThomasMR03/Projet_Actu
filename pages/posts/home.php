<div class="row" style="margin:0;padding:0;">
	<div class="col-md-1">
		
	</div>
	<div class="col-md-7" style="background:rgba(0,0,0,0.7);">
		<div class="row">
		<div id="scroll"></div>
		<div class="col-md-12"><h1 class="actu" style="padding-left: 30px;"><a class="actu2" href="index.php">Actualité</a></h1></div>
		</div>
		<div class="row" id="actuu">
		<?php foreach (App::getInstance()->getTable('post')->last() as $post) : ?>
			<span>
			<a href="<?= $post->Url ?>">
				<div id="article" class="col-md-6">
					<div class="ActuHover">
						<div class="imageArticle"><img src="img/<?=$post->img?>"></div>
						<div class="contenuArticle">
								<h2><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h2>
								<h4>Article posté par <?= $post->auteur ?> le <?= $post->date_creation_fr ?></h4>
								<p class="extrait"><?= $post->extrait ?></p>
						</div>
					</div>
				</div>
			</a>
		</span>
		<?php endforeach; ?>

		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-2" id="colonneGauche">
		<h3 class="actu">Articles récents</h3>
		<?php foreach (App::getInstance()->getTable('post')->lastRecent() as $post) : ?>
			<a href="<?= $post->Url ?>"><div class="fondRecent">
				<h5><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h5>
				<div class="imageArticleRecent"><img src="img/<?=$post->img?>"></div>
				<p>Article posté par <?= $post->auteur ?> <br> Le <?= $post->date_creation_fr ?></p>
			</div></a>
		<?php endforeach; ?>
		<p style="border-top: 3px solid rgb(199,211,29);"></p>
		<h3 class="actu">Membres Récents Inscrit</h3>
		<?php foreach (App::getInstance()->getTable('User')->lastUser() as $last) : ?>
			<h5 style="color: white; border-left: 2px solid rgb(199,211,29); border-right: 2px solid rgb(199,211,29);"><?= $last->name ?></h5>
		<?php endforeach; ?>
		<h5 style="color: white; border: 2px solid rgb(199,211,29);">Merci à vous !</h5>
	</div>
</div>
