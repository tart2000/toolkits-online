<?php if ($page->acat() != '') : ?>
    <?php $thecat = page('categories')->children()->find($page->acat()) ?>
    <a href="">
        <span class="badge mr-3" style="background-color: <?= $thecat->col() ?>">
            <i class="fas fa-<?= $thecat->fas() ?> mr-1"></i>
            <?= $thecat->title() ?>
        </span>
    </a>
<?php endif ?>

<ul class="list-inline text-small d-inline-block">
    <?php if ($page->atime() != '') : ?>
        <li class="list-inline-item"><i class="fas fa-clock mr-1"></i> <?= $page->atime() ?></li>
    <?php endif ?>
    <?php if ($page->amoney() != '') : ?>
        <li class="list-inline-item"><i class="fas fa-tint mr-1 ml-1"></i> <?= $page->amoney() ?></li>
    <?php endif ?>
    <?php if ($page->aenergy() != '') : ?>
        <li class="list-inline-item"><i class="fas fa-bolt mr-1 ml-1"></i> <?= $page->aenergy() ?></li>
    <?php endif ?>
</ul>