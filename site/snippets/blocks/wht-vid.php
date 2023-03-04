<wht-vid class="block">
    <div class="ctn">
        <?php if ($v = $block->video()->toFile()): ?>
        <?php $p = $block->poster()->isNotEmpty() ? $block->poster()->toFile()->url() : "" ?>
        <video poster="<?= $p ?>" autoplay loop muted playsinline disableremoteplayback>
            <source type="video/mp4" src="<?= $v->url() ?>">
	    </video>
        <?php endif ?>
    </div>
</wht-vid>
