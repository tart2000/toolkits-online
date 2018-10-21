<?php snippet('header') ?>

<div class="container pt-3 pb-3">
	<?= $page->text()->kirbytext() ?>

	<div class="row">
		<div class="col-12 mb-3">
			<h1>Toolkits</h1>
		</div>
		<?php foreach (page('toolkits')->children() as $p) : ?>
		<div class="card-group col-12 row mb-3">
			<div class="card col-md-3 pb-4">
				<div class="card-header">
					<h2 class="mb-1">
						<a href="<?= $p->url() ?>">
							<?php if ($p->fa() != '') : ?>
								<i class="fas fa-<?= $p->fa() ?>"></i>
							<?php endif ?>
							<?= $p->title() ?>
						</a>
					</h2>
				</div>
				<div class="card-body pb-4">
					<?php if ($p->baseline() != '') : ?>
						<h5 clss="text-lead"><?= $p->baseline() ?></h5>
					<?php endif ?>
					<?php if ($p->hasDocuments()) : ?>
						<div class="btn-group mb-2 dl-btn">
	                        <button type="button" class="btn btn-success btn-lg">Download</button>
	                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split dropdown-toggle-no-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <i class="fas fa-ellipsis-v"></i>
	                            <span class="sr-only">Toggle Dropdown</span>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm">
	                        	<?php foreach ($p->documents() as $d) : ?>
	                            	<a class="dropdown-item" href="#" download><?= $d->filename() ?>  (<?= $d->niceSize() ?>)</a>
	                            <?php endforeach ?>
	                        </div>
	                    </div>
	                <?php endif ?>
				</div>
			</div>
			<div class="card col-md-9">
				<div class="card-body row">
				<?php if ($p->hasChildren()) : ?>
					<div class="col-md-4">
					<?php foreach ($p->children()->sortBy('acat') as $practice) : ?>
						<?php $thecol = page('categories')->children()->find($practice->acat()) ?>
							<a href="<?= $practice->url() ?>" class="<?= $practice->acat() ?>" style="color: <?= $thecol->col() ?>">
								<?= $practice->title() ?>
							</a><br>
					<?php endforeach ?>
					</div>
				<?php endif ?>
				</div>
			</div>
			<!-- end card -->
		</div>
		<?php endforeach ?>
	</div>


</div>

<?php snippet('footer') ?>