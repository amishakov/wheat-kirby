(function () {
	"use strict";
	let els = document.querySelectorAll("[hx-get]");
	els.forEach((el) => {
		el.parentElement.addEventListener("htmx:beforeOnLoad", (event) => {
			console.log('initial');
			event.stopPropagation();
		});
	});

	document.addEventListener("htmx:load", (event) => {
		els = document.querySelectorAll("[hx-get]");
		els.forEach((el) => {
			el.parentElement.addEventListener("htmx:load", (event) => {
				console.log('after load');
				event.stopPropagation();
			});
		});
	});

})();