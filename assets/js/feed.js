// card carousel
var cards = document.querySelectorAll('.carousel');
cards.forEach((card) => {
	new Flickity(card, {
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false
	});
});
