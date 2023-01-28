<wht-img class="block">
    <div class="ctn">
        <?php if ($picture = $block->picture()->toFile()): ?>
        <?= snippet('img', ['image'=>$picture]) ?>
        <?php endif ?>
    </div>
</wht-img>