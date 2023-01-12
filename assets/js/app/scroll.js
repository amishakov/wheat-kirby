(function () {
	"use strict";
	const b = document.body;
	let lastScroll = 0;
	if (window.scrollY < 20) {
		b.classList.add("top");
	}
	window.addEventListener("scroll", () => {
		const currentScroll = window.pageYOffset;
		// top
		if (window.scrollY < 20) {
			b.classList.add("top");
		} else {
			b.classList.remove("top");
		}
		// down
		if (currentScroll > lastScroll + 10) {
			b.classList.remove("up");
			b.classList.add("down");
			// up
		} else if (currentScroll < lastScroll - 10) {
			b.classList.remove("down");
			b.classList.add("up");
		}
		lastScroll = currentScroll;
	});
})();

function toggleScroll() {
	document.body.classList.toggle("disable-scroll");
}

function toggleScrollOn() {
	document.body.classList.remove("disable-scroll");
}

function toggleScrollOff() {
	document.body.classList.add("disable-scroll");
}

function scrollToTop() {
	window.scrollTo({ top: 0, behavior: 'smooth' });
}

document.body.addEventListener("htmx:load", (event) => {
	toggleScrollOn();
});
