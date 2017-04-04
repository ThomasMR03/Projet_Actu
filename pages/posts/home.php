<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<?php foreach (App::getInstance()->getTable('post')->last() as $post) : ?>
			<div>
			<h2><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h2>
			<h4>Article posté par <?= $post->auteur ?> le <?= $post->date_creation ?></h4>
			<p><?= $post->contenu ?></p>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="col-md-2">
		
	</div>
</div>