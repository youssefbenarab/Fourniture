$(document).ready(function() {
	$('.decline').click(function() {
		$('.mfp-close').click();
	})
	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom',
		callbacks: {

			open: function() {                        // When you open the
				$('body').css('overflow', 'hidden');  // window, the element
			},                                        // "body" is used "overflow: hidden".
	
			close: function() {                       // When the window
				$('body').css('overflow', '');        // is closed, the 
			},                                        // "overflow" gets the initial value.
	
		}
	});
});