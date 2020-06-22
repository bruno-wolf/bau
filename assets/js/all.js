// toggle menu
const menuBtn = document.querySelector('#menu');
const siteNav = document.querySelector('header nav');
menuBtn.addEventListener('click', () => {
	siteNav.classList.toggle('open');
});
