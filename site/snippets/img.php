<?php if ($image): ?>
<lazy-img style="--aspect-ratio:<?= $image->width() . '/' . $image->height() ?>;">
    <img
        alt="<?= $image->alt() ?>"
        src="<?= $image->resize(300)->url() ?>"
        srcset="<?= $image->srcset('webp') ?>"
        width="<?= $image->width() ?>"
        height="<?= $image->height() ?>"
        loading="lazy">
    <lazy-img-ph></lazy-img-ph>
</lazy-img>
<?php endif ?>