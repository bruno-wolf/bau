let settingsBtn = document.querySelector('.nav .btn-icon');
let settingsNav = document.querySelector('.nav nav');

settingsBtn.addEventListener('click', () => {
	settingsNav.classList.toggle('show');
	settingsBtn.classList.toggle('open');
});

// V1
// let settingsNav = document.querySelector('.nav nav');
// let svgOpen = '<svg><use href="#i-burguer"></use></svg>';
// let svgClose = '<svg><use href="#i-cross"></use></svg>';
// settingsBtn.innerHTML = svgOpen;
// settingsBtn.addEventListener('click', () => {
// 	settingsNav.classList.toggle('show');
// 	if (settingsBtn.innerHTML === svgOpen) {
// 		settingsBtn.innerHTML = svgClose;
// 	} else {
// 		settingsBtn.innerHTML = svgOpen;
// 	}
// });
