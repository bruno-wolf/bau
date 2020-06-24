let settingsBtn = document.querySelector('.nav .btn-icon');
let nav = document.querySelector('.nav nav');
let svgOpen = '<svg><use href="#i-burguer"></use></svg>';
let svgClose = '<svg><use href="#i-cross"></use></svg>';

settingsBtn.addEventListener('click', () => {
	nav.classList.toggle('show');
	if (settingsBtn.innerHTML === svgOpen) {
		settingsBtn.innerHTML = svgClose;
	} else {
		settingsBtn.innerHTML = svgOpen;
	}
});

