(function () {
	"use strict";

	window.addEventListener("load", loaded);

	function loaded() {
		document.body.classList.add("loaded");
		window.removeEventListener("load", loaded);
	}
})();
