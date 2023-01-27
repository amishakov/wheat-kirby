(function () {
	"use strict";
	document.body.addEventListener("htmx:beforeOnLoad", boosted);

	function boosted() {
		document.body.classList.add("boosted");
		window.removeEventListener("htmx:beforeOnLoad", boosted);
	}
})();
