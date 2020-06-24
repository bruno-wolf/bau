/*
 *
 * carousel
 * 
 */
let carrousel = document.querySelector('.carousel');
let settings = {
	cellAlign: 'left',
	contain: true,
	prevNextButtons: false
};
new Flickity(carrousel, settings);

/*
 *
 * item-nav
 * 
 */
// ON CLICK
// if this button has .select						// already open
// // close();
// else 																// not open
// // buttons -> remove .select
// // handlers -> add .hide
// // this button -> add .select
// // this handler -> remove .hide
// // nav -> add .show

// ON CLOSE = close();
// buttons -> remove .select
// handlers -> add .hide
// nav -> remove .show
let nav = document.querySelector('#item nav');
let btnClose = nav.querySelector('.drawer .close');
let btnsNav = Array.from(nav.querySelectorAll('.btn-group .btn-icon'));
let btnComment = nav.querySelector('.btn-icon.comment');
let btnShare = nav.querySelector('.btn-icon.share');
let handlers = Array.from(nav.querySelectorAll('.handler'));
let commentHandler = nav.querySelector('.comment.handler');
let shareHandler = nav.querySelector('.share.handler');

function close(show) {
	btnsNav.forEach((element) => {
		element.classList.remove('selected');
	});
	handlers.forEach((element) => {
		element.classList.add('hide');
	});
	if (show === 'all') {
		nav.classList.remove('show');
	}
}

btnsNav.forEach((element) => {
	element.addEventListener('click', function() {
		// already open
		if (this.classList.contains('selected')) {
			close('all');
		} else {
			// not open
			close('part');
			this.classList.add('selected');
			handlers.forEach((element) => {
				if (this.dataset.trigger === element.dataset.handler) {
					element.classList.remove('hide');
				}
			});
			nav.classList.add('show');
		}
	});
});

btnClose.addEventListener('click', () => {
	close('all');
});

/*
 *
 * copy share link to clipboard
 * * @https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/Interact_with_the_clipboard
 * 
 */
function copy() {
	var copyText = document.querySelector('#url');
	copyText.select();
	document.execCommand('copy');

	try {
		let msgHandler = document.querySelector('.share.handler p');
		let successful = document.execCommand('copy');
		let msg =
			successful ? 'copied' :
			'not copied';
		msgHandler.innerHTML = 'The link was ' + msg;
	} catch (err) {
		msgHandler.innerHTML = 'Oops, unable to copy';
	}
}
document.querySelector('#copy').addEventListener('click', copy);
