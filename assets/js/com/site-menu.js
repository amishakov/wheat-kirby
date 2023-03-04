class SiteMenu extends HTMLElement {
	constructor() {
		super();
		this.open = false;
	}

	connectedCallback() {
		this.toggle = document.querySelector("#header button");
		this.veil = this.querySelector(".veil");

		this.toggle.addEventListener("click", () => {
			this.open = true;
		});

		this.veil.addEventListener("click", () => {
			this.open = false;
		});

		window.addEventListener("keydown", (event) => {
			if (event.key === "Escape" && this.open) {
				this.open = false;
			}
		});
	}

	set open(value) {
		this._open = value;
		requestAnimationFrame(() => {
			this.setAttribute("open", this._open ? "true" : "false");
		});
	}

	get open() {
		return this._open;
	}
}
customElements.define("site-menu", SiteMenu);
