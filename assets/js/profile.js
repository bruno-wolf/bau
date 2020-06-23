// card carousel
let cards = document.querySelectorAll('.carousel');
let highlights = document.querySelector('#highlights');
let settings = {
	cellAlign: 'left',
	contain: true,
	prevNextButtons: false
};

cards.forEach((card) => {
	new Flickity(card, settings);
});
new Flickity(highlights, settings);
