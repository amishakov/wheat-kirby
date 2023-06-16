<section class="_image"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?>>
    <div class="ctn" in>
        <figure fx="fadein">
            <?php if ($picture = $block->picture()->toFile()): ?>
            <?= snippet('img', ['image'=>$picture]) ?>
            <?php endif ?>            
        </figure>
    </div>
</section>
