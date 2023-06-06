(function () {
	"use strict";
	const b = document.body;
	let lastScroll = 0;
	if (window.scrollY < 20) {
		b.classList.add("top");
	}
	window.addEventListener("scroll", () => {
		const currentScroll = window.pageYOffset;
		if (window.scrollY < 20) {
			b.classList.add("top");
		} else {
			b.classList.remove("top");
		}
		if (currentScroll > lastScroll + 10) {
			b.classList.remove("up");
			b.classList.add("down");
		} else if (currentScroll < lastScroll - 10) {
			b.classList.remove("down");
			b.classList.add("up");
		}
		lastScroll = currentScroll;
	});
	document.addEventListener("htmx:afterSwap", function (event) {
		if (event.detail.boosted) {
			scrollToTop("auto");
		}
	});
})();

function scrollOn() {
	document.body.style.removeProperty("overflow");
	document.body.style.removeProperty("padding-right");
}

function scrollOff() {
	document.body.style.overflow = "hidden";
	let userAgent = window.navigator.userAgent.toLowerCase(),
	macosPlatforms = /(macintosh|macintel|macppc|mac68k|macos)/i,
	windowsPlatforms = /(win32|win64|windows|wince)/i,
	iosPlatforms = /(iphone|ipad|ipod)/i,
	os = null;
	if (macosPlatforms.test(userAgent)) {
		// Nothing
	} else if (iosPlatforms.test(userAgent)) {
		// Nothing
	} else if (windowsPlatforms.test(userAgent)) {
		document.body.style.paddingRight = "17px";
	} else if (/android/.test(userAgent)) {
		// Nothing
	} else if (!os && /linux/.test(userAgent)) {
		// Nothing
	}
}

function scrollToTop(behavior = "smooth") {
	window.scrollTo({ top: 0, behavior: behavior });
}

document.body.addEventListener("htmx:load", (event) => {
	scrollOn();
});