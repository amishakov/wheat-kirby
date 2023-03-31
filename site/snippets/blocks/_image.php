<section class="_image">
    <div class="ctn">
        <?php if ($picture = $block->picture()->toFile()): ?>
        <?= snippet('img', ['image'=>$picture]) ?>
        <?php endif ?>
    </div>
</section>