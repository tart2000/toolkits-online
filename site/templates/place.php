
<?php snippet('header') ?>

<div class="main-container">
    <?php if ($page->header() != '') : ?>  
        <?php $header = $page->header()->toFile() ?>
    	<div class="header-image" style="background-image: url('<?= $header->url() ?>')"></div>
    <?php endif ?>
    <section class="space-sm">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-12 col-md-8 col-lg-7 mt--8">
            		<div class="d-flex align-items-end mb-4">
                        <?php if ($page->logo() != '') : ?>
                            <?php $logo = $page->logo()->toFile() ?>
                            <?php $logo = $logo->crop(100,100) ?>
                            <img alt="Image" src="<?= $logo->url() ?>" class="avatar avatar-lg rounded" />
                        <?php endif ?>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb p-0 ml-4">
                                <li class="breadcrumb-item"><a href="<?= $site->url() ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="<?= $page->parent()->url() ?>"><?= $page->parent()->title() ?></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $page->title() ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                    	<h1 class="mb-0"><?= $page->title() ?></h1>
                        <h2 class="lead mb-2 italic">"<?= $page->baseline() ?>"</h2>
                    </div>

                    <hr>

                	<article>
                		<h5>Information</h5>
                		<?= $page->text()->kirbytext() ?>

                	</article>
                  
                </div>
                <!--end of col-->


                <div class="col-12 col-md-4">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <?php if ($page->staff() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Staff
                                        </div>
                                        <span>
                                        	<?= $page->staff() ?> <i class="fas fa-users ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->budget() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Budget annuel
                                        </div>
                                        <span>
                                        	<?= $page->budget() ?> <i class="fas fa-dollar-sign ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->location() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Localisation
                                        </div>
                                        <span>
                                            <?= $page->location() ?> <i class="fas fa-map-pin ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                            <?php if ($page->theurl() != '') : ?>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="<?= $page->theurl() ?>" taegt="_blank">
                                                <?= $page->theurl() ?>
                                            </a>
                                        </div>
                                        <span>
                                             <i class="fas fa-globe ml-1"></i>
                                        </span>
                                    </div>
                                </li>
                            <?php endif ?>

                        </ul>
                    </div>
                    <!-- end card -->

                    <?php $practices = page('toolkits')->children()->children()->filterBy('exloc', $page->uid()) ?>
                    <?php foreach ($practices as $practice) : ?>
                        <?= snippet('practice-card', array('practice' => $practice)) ?>
                    <?php endforeach ?>
                
                    
                    <!-- see also card
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <span class="h5">Voir aussi...</span>
                            </div>
                            <a href="#">Voir tous &rsaquo;</a>
                        </div>
                        <div class="card-body">
                            <a class="media" href="#">
                                <img alt="Image" src="<?= $site->url() ?>/assets/images/chester-beatty-library.jpg" class="avatar avatar-sm mr-3" />
                                <div class="media-body">
                                    <span class="h6 mb-0">Chester Beatty library</span>
                                    <span class="text-muted">Dublin, Ireland</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    -->

                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!--end of section-->

</div>


<?php snippet('footer') ?>
