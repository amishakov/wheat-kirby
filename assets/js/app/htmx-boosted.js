(function () {
	"use strict";
    document.body.addEventListener("htmx:beforeOnLoad", (event) => {
        document.body.classList.add("boosted");
    });
})();
