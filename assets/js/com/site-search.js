class SiteSearch extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		const toggles = document.querySelectorAll("[site-search-toggle]");
		toggles.forEach(toggle => {
			toggle.addEventListener("click", function() {
				alert("[todo]");
			})
		});
	}


}
customElements.define("site-search", SiteSearch);
