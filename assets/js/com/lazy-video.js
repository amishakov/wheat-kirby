class LazyVideo extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		const video = this.querySelector("video");
		const source = video.querySelector("source");
		const ph = this.querySelector("lazy-video-ph");

		let lazyVideoObserver = new IntersectionObserver(function (
			entries,
			observer
		) {
			entries.forEach(function (el) {
				if (el.isIntersecting) {
					video.setAttribute("poster", video.dataset.poster);
					source.setAttribute("src", source.dataset.src);
					video.load();
					el.target.setAttribute("loaded", "");
					video.removeAttribute("data-poster");
					source.removeAttribute("data-src");
					lazyVideoObserver.unobserve(el.target);
				}
			});
		});
		lazyVideoObserver.observe(this);
	}
}
customElements.define("lazy-video", LazyVideo);
