class SiteSearch extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.veil = this.querySelector(".veil");
		this.input = this.querySelector("input");
		this.toggles = document.querySelectorAll("[site-search-toggle]");
		this.results = this.querySelector(".results");
		this.toggles.forEach((toggle) => {
			toggle.addEventListener("click", () => {
				this.setAttribute("active", "");
				this.input.focus();
			});
		});

		this.veil.addEventListener("click", () => {
			this.removeAttribute("active");
			this.reset;
		});

		window.addEventListener("keydown", (event) => {
			if (event.key === "Escape") {
				this.removeAttribute("active");
				this.reset();
			} else if (event.ctrlKey && event.key == "k") {
				event.preventDefault();
				this.setAttribute("active", "");
				this.input.focus();
			}
		});
	}

	reset() {
		this.results.innerHTML = "";
		this.input.value = "";
	}
}
customElements.define("site-search", SiteSearch);
