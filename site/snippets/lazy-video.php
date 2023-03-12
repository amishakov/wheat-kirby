<figure style="--aspect-ratio:<?= $poster->width() . '/' . $poster->height() ?>;" is="lazy-video">
    <video 
        data-poster="<?= $poster->url() ?>" 
        autoplay 
        loop 
        muted 
        playsinline 
        disableremoteplayback>
        <source type="video/mp4" data-src="<?= $video->url() ?>">
    </video>
    <video-ph></video-ph>
</figure>
