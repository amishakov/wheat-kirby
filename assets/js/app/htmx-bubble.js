(function () {
	"use strict";
    document.addEventListener("htmx:load", (event) => {
        document.querySelectorAll("[hx-get]").forEach(el => {
            el.parentElement.addEventListener("htmx:load", (event) => {
                event.stopPropagation();
            });
        });
    });
})();
