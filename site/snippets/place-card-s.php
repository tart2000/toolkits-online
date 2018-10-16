<?php if ($page->exloc() != '') : ?>
    <?php $theplace = page('places')->children()->find($page->exloc()) ?>
	<a class="media" href="<?= $theplace->url() ?>">
        <?php if ($theplace->header() != '') : ?>
            <?php $header = $theplace->header()->toFile() ?>
            <img alt="Image" src="<?= $header->url() ?>" class="avatar avatar-sm mr-3" />
        <?php endif ?>
        <div class="media-body">
            <span class="h6 mb-0"><?= $theplace->title() ?></span>
            <span class="text-muted"><?= $theplace->location() ?></span>
        </div>
    </a>
<?php endif ?>