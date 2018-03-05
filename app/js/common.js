$(function() {

	$('[data-toggle="tooltip"]').tooltip({
    'placement': 'top'
	});
	
	// адаптивная карусель
	  $(".owl-carousel").owlCarousel({
		margin: 20,
		nav: false,
		responsiveClass: true,
	    responsive:{
	        0:{
	            items:1,
	        },
	        480:{
	            items:2,
	        },
	        730:{
	            items:3,
	        },
	        1050:{
	            items:4,
	        },
	        1230:{
	            items:5,
	        }
	    }
	  });

	  // блоки одинаковой высоты
		$(function(){ $('.cardWrap .card').equalHeights(); });

		$(function(){ $('.content-faq').equalHeights(); });

		$(function(){ $('.card-servis').equalHeights(); });
		
		$(function(){ $('.item-news').equalHeights(); });

		$(function(){ $('.card_home_news').equalHeights(); });


	  // скрол до блока
	  $("a[rel='m_PageScroll2id']").mPageScroll2id({
	      
	    });


	$('.popup-zoom').magnificPopup({
		type: 'inline',
		overflowY: 'scroll',
		closeBtnInside: true,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	//E-mail Ajax Send
	$(".callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			$(th).find('.success').addClass('active').css("display", "flex").hide().fadeIn();
			setTimeout(function() {
				$(th).find('.success').removeClass('active').fadeOut();
				th.trigger("reset");
			}, 2000);
		});
		return false;
	});


});






$(window).on('load', function() {
	$('.preloader').delay(1000).fadeOut('slow');
});
