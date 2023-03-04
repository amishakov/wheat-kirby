(function () {
	"use strict";

	crawl();
	window.addEventListener("htmx:load", crawl);

	function crawl() {
		const links = document.querySelectorAll("a");

		links.forEach((a) => {
			if (!!a) {
				setLinkAttr(a);
			}
		});
	}

	function isSameDomain(a) {
		var currentUrl = window.location.href;
		var linkUrl = a.href;
		var currentDomain = currentUrl.split("/")[2];
		var linkDomain = linkUrl.split("/")[2];

		if (
			linkUrl.includes("mailto:") ||
			linkUrl.includes("tel:") ||
			linkUrl.includes(".pdf")
		) {
			return false;
		} else if (!linkDomain || currentDomain === linkDomain) {
			return true;
		} else {
			return false;
		}
	}

	function setLinkAttr(a) {
		if (!isSameDomain(a)) {
			a.setAttribute("target", "_blank");
			htmx.process(a);
		}
	}
})();
