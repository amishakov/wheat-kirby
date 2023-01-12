<?php
$sizes = "(min-width: 1200px) 25vw, (min-width: 900px) 33vw, (min-width: 600px) 50vw, 100vw";
if ($image): ?>
    <picture>
        <source
            srcset="<?= $image->srcset('webp') ?>"
            sizes="<?= $sizes ?>"
            type="image/webp"
        >
        <img
            alt="<?= $image->alt() ?>"
            src="<?= $image->resize(300)->url() ?>"
            srcset="<?= $image->srcset() ?>"
            sizes="<?= $sizes ?>"
            width="<?= $image->resize(1800)->width() ?>"
            height="<?= $image->resize(1800)->height() ?>"
            loading="lazy"
        >
    </picture>
<?php endif ?>
