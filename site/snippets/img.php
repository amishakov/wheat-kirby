<?php if ($image): ?>
<figure style="--aspect-ratio:<?= $image->width() . '/' . $image->height() ?>;" is="lazy-img">
    <img
        alt="<?= $image->alt() ?>"
        src="<?= $image->resize(300)->url() ?>"
        srcset="<?= $image->srcset('webp') ?>"
        width="<?= $image->width() ?>"
        height="<?= $image->height() ?>"
        loading="lazy"
    >
    <img-ph></img-ph>
</figure>
<?php endif ?>