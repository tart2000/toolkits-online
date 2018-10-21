
<div class="card">
    <a href="<?= $practice->url() ?>">
    	<?php if ($header = $practice->header()) : ?>  
    		<?php $header = $header->toFile() ?>
    		<?php $header = $header->crop(600,350) ?>
            <?php $thecol = page('categories')->children()->find($practice->acat()) ?>
       		<div class="card-img-top header"  alt="Card image cap" style="background-color: <?= $thecol->col() ?>; background-blend-mode: screen; background-image: url(<?= $header->url() ?>)">
                <img src="<?= $header->url() ?>" class="hidden img-fluid">
            </div>
       	<?php endif ?>
    </a>
    <div class="card-body">
        <a href="<?= $practice->url() ?>">
            <h4 class="card-title"><?= $practice->title() ?></h4>
            <p class="card-text italic"><?= $practice->baseline() ?></p>
        </a>
    </div>
    <div class="card-footer card-footer-borderless d-flex justify-content-betwee pb-3">
        <div class="text-small">
            <?= snippet ('meta-icons', array('page' => $practice)) ?>
        </div>
        <!-- 
        <div class="dropup">
            <button class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-no-arrow" type="button" id="SidekickButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
            </button>
            
            <div class="dropdown-menu dropdown-menu-sm" aria-labelledby="SidekickButton">
                <a class="dropdown-item" href="#">Save</a>
                <a class="dropdown-item" href="#">Share</a>
                <a class="dropdown-item" href="#">Comment</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Report</a>
            </div>
       
        </div>
        -->
    </div>
</div>
