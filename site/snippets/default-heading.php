<?php if ($page->headline()->isNotEmpty()): ?>
<section class="default_heading">
    <div class="ctn" in>
        <h1 fx="fadein"><?= $page->headline() ?></h1>
    </div>
</section>
<?php endif ?>