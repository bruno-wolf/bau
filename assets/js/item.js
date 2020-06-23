// carousel
let carrousel = document.querySelector('.carousel');
let settings = {
	cellAlign: 'left',
	contain: true,
	prevNextButtons: false
};
new Flickity(carrousel, settings);

// nav
let nav = document.querySelector('#item nav');
let btnClose = nav.querySelector('.drawer .close');
let btnComment = nav.querySelector('.btn-icon.comment');
let commentHandler = nav.querySelector('.comment-handler');

// close nav
btnClose.addEventListener('click', () => {
	btnComment.classList.remove('selected');
	commentHandler.classList.add('hide');
	nav.classList.remove('show');
});

// trigger comments
btnComment.addEventListener('click', function() {
	this.classList.toggle('selected');
	commentHandler.classList.toggle('hide');
	nav.classList.toggle('show');
});
