<?= snippet('header') ?>

<nav aria-label="breadcrumb" role="navigation" class="bg-info text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    	<a href="<?= $site->url() ?>"><?= page('home')->title() ?></a>
                    </li>
                    <li class="breadcrumb-item">
                    	<a href="<?= $page->parent()->parent()->url() ?>"><?= $page->parent()->parent()->title() ?></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    	<a href="<?= $page->parent()->url() ?>"><?= $page->parent()->title() ?></a>
                    </li>
                </ol>
            </div>
            <!--end of col-->
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</nav>
<section class="bg-white space-sm">
    <div class="container">
        <div class="row justify-content-between">
        	<div class="col-lg-5 mb-4 mb-sm-0">
                <?php $image = $page->header()->toFile() ?>
                <?php $image = $image->crop('600', '300') ?>
                <img alt="Image" src="<?= $image->url() ?>" data-action="zoom" class="rounded img-fluid" />
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-between mr-auto ml-auto">
                <div class="media align-items-center">
                    <div class="media-body">
                        <h1 class="mb-0"><?= $page->title() ?></h1>
                        <h2 class="lead mb-2"><?= $page->baseline() ?></h2>
                        <div class="d-flex align-items-center">
                            <?= snippet ('meta-icons', array('page' => $page)) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<!--end of section-->

<!--end of section-->
<section class="space-sm">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-8">
            	<article>
                    <?php if ($page->goals() != '') : ?>
                        <h5><?= l::get('goals') ?></h5>
                        <?= $page->goals()->kirbytext() ?>
                    <?php endif ?>

                    <?php if ($page->process() != '') : ?>
                		<h5><?= l::get('process') ?></h5>
                        <?= $page->process()->kirbytext() ?>
                    <?php endif ?>

                    <?php if ($page->outputs() != '') : ?>
    					<h5><?= l::get('outputs') ?></h5>
                        <?= $page->outputs()->kirbytext() ?>
                    <?php endif ?>

                    <?php if ($page->communication() != '') : ?>
    					<h5><?= l::get('comstrat') ?></h5>
    					<?= $page->communication()->kirbytext() ?>
                    <?php endif ?>

                    <?php if ($page->success() != '') : ?>
    					<h5><?= l::get('success') ?></h5>
    					<?= $page->success()->kirbytext() ?>
                    <?php endif ?>

            	</article>
              
            </div>
            <!--end of col-->


            <div class="col-12 col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?= l::get('tips') ?></h5>
                        <h6 class="card-subtitle text-muted"><?= l::get('start') ?></h6>
                    </div>
                	<div class="card-body">
					    <?php foreach ($page->tips()->toStructure() as $tip) : ?>
                            <p class="card-text"><?= $tip->tip() ?></p>
                        <?php endforeach ?>
					</div>
                </div>

                <?php if ($page->example() != '') : ?>
                    <div class="card">
                    	<div class="card-header">
                    		<h5 class="card-title"><?= l::get('example') ?></h5>
                    	</div>
                    	<div class="card-body">
                    		<p><?= $page->example() ?></p>
                            <?php snippet('place-card-s', array('page' => $page)) ?>
                    	</div>
                    </div>
                    <!-- end card -->
                <?php endif ?>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <span class="h5"><?= l::get('see also') ?></span>
                        </div>
                        <a href="#"><?= l::get('view all') ?> &rsaquo;</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-spacing-sm">
                            <?php $links = page('toolkits')->children()->children()->shuffle()->limit(4) ?>
                            <?php foreach ($links as $link) : ?>
                                <?php if ($link->url() != $page->url()) : ?>
                                    <li>
                                        <i class="fas fa-file text-muted mr-1"></i>
                                        <a href="<?= $link->url() ?>"><?= $link->title() ?></a>
                                    </li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <!--end of card-->

            </div>
            <!--end of col-->
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<!--end of section-->
<?= snippet('footer') ?>
