<?php
$sizes = "(min-width: 1200px) 25vw, (min-width: 900px) 33vw, (min-width: 600px) 50vw, 100vw";
if ($image): ?>
<img
    alt="<?= $image->alt() ?>"
    src="<?= $image->resize(300)->url() ?>"
    srcset="<?= $image->srcset('webp') ?>"
    sizes="<?= $sizes ?>"
    width="<?= $image->resize(1800)->width() ?>"
    height="<?= $image->resize(1800)->height() ?>"
    loading="lazy"
>
<?php endif ?>