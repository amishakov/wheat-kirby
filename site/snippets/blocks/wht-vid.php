<wht-vid class="block">
    <div class="ctn">
        <?php if ($v = $block->video()->toFile()): ?>
        <?php $p = $block->poster()->isNotEmpty() ? $block->poster()->toFile(): "" ?>
        <?= snippet('lazy-video', ['poster'=>$p, 'video'=>$v]) ?>
        <?php endif ?>
    </div>
</wht-vid>
