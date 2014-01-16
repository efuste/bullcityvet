$(document).ready(function() { 
		
		
		$(document).on('focusin', '.field, textarea', function() {
			if(this.title==this.value) {
				this.value = '';
			}
		}).on('focusout', '.field, textarea', function(){
			if(this.value=='') {
				this.value = this.title;
			}
		});
	
		//$(".slider ul").carouFredSel({
		//	auto: 3500
		//});
	
		$(document).on('mouseenter', '.navigation ul li', function () {
			$(this).addClass('current').find('> ul').stop(true,true).slideDown(200);
		}).on('mouseleave', '.navigation ul li', function () {
			$(this).removeClass('current').find('> ul').stop(true,true).slideUp(200);
		});
	
		// parallex bg:
		$('body').stellar();
		
		$('.logo').hide().show().addClass('animated fadeIn');
		$('.page-holder').hide().show().addClass('animated fadeIn');
		$('.box1:first-child').hide().show().addClass('animated fadeInLeft');
		$('.box1:last-child').hide().show().addClass('animated fadeInRight');
		$('.box1:nth-child(2)').hide().show().addClass('animated fadeIn');

		$('.service_box:even').hide().show().addClass('animated fadeInLeft');
		$('.service_box:odd').hide().show().addClass('animated fadeInRight');


		$('.quote').quovolver();
		$('.banner').revolution({
				delay:6000,
				startwidth:933,
				startheight:299,
				onHoverStop: "on",
				navigationType:"bullet",
         		navigationArrows:"nexttobullets",
         		navigationStyle:"round",
 				navigationHAlign:"center",
         		navigationVAlign:"bottom"
		});

});

