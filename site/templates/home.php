<?php snippet('header') ?>

<div class="container pt-3 pb-3">
	<h1><?php echo $page->title()->html() ?></h1>
	<?= $page->text()->kirbytext() ?>

	<ul>
	<?php foreach (page('toolkits')->children() as $p) : ?>
		<a href="<?= $p->url() ?>">
			<li><?= $p->title() ?></li>
		</a>
	<?php endforeach ?>
</ul>
</div>

<?php snippet('footer') ?>