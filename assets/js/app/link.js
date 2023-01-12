class NavLink extends HTMLAnchorElement {
    constructor() {
        super();
    }
    connectedCallback() {
        const href = this.getAttribute("href");
        if (!!href) {
            if (href.match("^/") || href.includes(window.location.protocol + '//' + window.location.hostname)) {
            } else {
                this.setAttribute("target", "_blank");
                this.setAttribute("rel", "noopener");
            }
        }
	}
}
customElements.define("nav-link", NavLink, { extends: "a" });
