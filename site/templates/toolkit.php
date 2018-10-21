<?php snippet('header') ?>

<div class="container pt-3 pb-3">
	<h1><?php echo $page->title()->html() ?></h1>
	<?= $page->description()->kirbytext() ?>
</div>
<div class="container pt-3 pb-3">

	<ul class="row feature-list feature-list-sm">
    	<?php foreach ($page->children()->sortBy('acat') as $practice) : ?>
    		<li class="col-12 col-md-6 col-lg-4">
	            <?php snippet('practice-card', array('practice' => $practice)) ?>
	        </li>
        <?php endforeach ?>
    </ul>
    <!--end of row-->
</div>

<?php snippet('footer') ?>