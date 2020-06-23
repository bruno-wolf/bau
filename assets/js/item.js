// card carousel
let carrousel = document.querySelector('.carousel');
let settings = {
	cellAlign: 'left',
	contain: true,
	prevNextButtons: false
};

new Flickity(carrousel, settings);
