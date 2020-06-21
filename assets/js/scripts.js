// toggle menu
const menuBtn = document.querySelector('#menu');
const siteNav = document.querySelector('header nav');
menuBtn.addEventListener('click', () => {
	siteNav.classList.toggle('open');
});

//intro animation
function introAnimation() {
	const figures = Array.from(document.querySelectorAll('#intro svg'));
	var index;
	figures.forEach((figure, i) => {
		if (figure.classList.contains('selected')) {
			index = i + 1;
		}
		figure.classList.remove('selected');
	});
	if (index <= figures.length - 1) {
		figures[index].classList.add('selected');
	} else {
		figures[0].classList.add('selected');
	}
}

setInterval(() => {
	introAnimation();
}, 5000);
