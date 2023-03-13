class LazyVideo extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.video = this.querySelector("video");
		this.source = this.video.querySelector("source");
        this.ph = this.querySelector("lazy-video-ph");
		this.video.setAttribute("poster", this.video.dataset.poster);
		this.source.setAttribute("src", this.source.dataset.src);
        this.video.load();
        this.setAttribute("loaded", "");

        this.video.removeAttribute("data-poster");
        this.source.removeAttribute("data-src");

	}
}
customElements.define("lazy-video", LazyVideo);
