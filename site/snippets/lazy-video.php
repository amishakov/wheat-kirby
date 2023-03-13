<lazy-video style="--aspect-ratio:<?= $poster->width() . '/' . $poster->height() ?>;">
    <video 
        data-poster="<?= $poster->url() ?>" 
        autoplay 
        loop 
        muted 
        playsinline 
        disableremoteplayback>
        <source type="video/mp4" data-src="<?= $video->url() ?>">
    </video>
    <lazy-video-ph></lazy-video-ph>
</lazy-video>
