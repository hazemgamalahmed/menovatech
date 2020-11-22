/* ===============  WoW Animations ========================== */

$(document).ready(function() {

	"use strict";

	/* ================= sliders =================  */
			/* =================  Owl Carousel Gallery =============  */

			$("#screenshots_slider").owlCarousel({
				loop: true,
				nav: true,
				animateOut: 'fadeOutLeft',
    		animateIn: 'bounceInRight',
				dots: true,
				autoplay: false,
		    autoplayTimeout: 4000,
				autoplayHoverPause:false,
		    smartSpeed:1000,
				center:true,
				margin : 0,
				responsiveClass: true,
				responsive: {
					0: {
							items: 1,
					},
					575: {
							items: 2,
					},
					767:{
						items: 2,
					}
				}
			});

			/* ============  Owl Carousel For clients ============== */

			$("#clients_slider").owlCarousel({
				autoplay: true,
				autoplayTimeout: 5000,
				items: 1,
				loop: true,
				margin: 30,
				nav: false,
				smartSpeed:1000,
				pagination: false,
				dots: true,
			});

			/* ============  Owl Carousel For Team  ============== */

			$("#team_slider").owlCarousel({
				autoplay: true,
				autoplayTimeout: 5000,
				loop: true,
				margin: 18,
				nav: false,
				pagination: false,
				dots: true,
				smartSpeed:1000,
				responsiveClass: true,
				responsive: {
					0: {
							items: 1,
					},
					575: {
							items: 2,
					},
					767: {
							items: 3,
					},
					1199: {
							items: 4,
					}
		  	}
		  });

      /* ============  hero slider  ============== */

      $("#hero_slider").owlCarousel({
				autoplay: true,
				autoplayTimeout: 5000,
				loop: true,
				margin: 18,
        items:1,
				nav: true,
				pagination: false,
				dots: false,
				smartSpeed:1000,
				responsiveClass: false,
		  });

			// ============== counter ==================== //

			$(".counter_value").countimator();

			/* =================  mailChimp  =================  */

			var form = $('#subscribe_form');

					if (form.length) {
						form.ajaxChimp({
							callback: mailchimpCallback,
							// Replace the URL above with your mailchimp URL (put your URL inside '').
							url: 'https://ah-theme.us17.list-manage.com/subscribe/post?u=1deb8f74c591046810c8ac1ec&amp;id=ebe56afd26'
						});
					}

					// callback function when the form submitted, show the notification box
					function mailchimpCallback(resp) {

						if (resp.result === 'success') {
							$('.subscription_success').html(resp.msg).slideDown().addClass('active-message');
							$('.subscription_error').slideUp().removeClass('active-message');
						} else {
							$('.subscription_error').html(resp.msg).slideDown().addClass('active-message');
							$('.subscription_success').slideUp().removeClass('active-message');
						}
						setTimeout(function () {
							$('.active-message').slideUp('slow', 'swing');
						}, 4000);
					}

      /* =================  portfolio  =================  */

      $(function() {
    		var selectedClass = "";
    		$(".fil-cat").on('click',function(){
          $('.fil-cat').removeClass('active');
          $(this).addClass('active');
      		selectedClass = $(this).attr("data-rel");
          $("#portfolio_items").fadeTo(100, 0.1);
      		$("#portfolio_items .portfolio_item").not("."+selectedClass).fadeOut().removeClass('scale-anm');
          setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('scale-anm');
            $("#portfolio_items").fadeTo(300, 1);
          }, 300);
    	  });
      });

});

/* =================  window load =================  */

 $(window).on('load',function(){
		/*----- loader ---------*/
		$('.loader').fadeOut();
    /* ===============  WoW Animations ========================== */

      wow = new WOW();
    	wow.init();

      /* =================  text-animation style 1  =================  */

			$('.text_animation').textillate({
			  // sets the minimum display time for each text before it is replaced
			  minDisplayTime: 2000,

			  // visibility: hidden to the element before running this plugin)
			  initialDelay: 0,

			  // set whether or not to automatically start animating
			  autoStart: true,

			  // in animation settings
			  in: {

			    // set the delay factor applied to each consecutive character
			    delayScale: 1.5,

			    // set the delay between each character
			    delay: 30,

			    // set to true to animate all the characters at the same time
			    sync: false,

			    // randomize the character sequence
			    // (note that shuffle doesn't make sense with sync = true)
			    shuffle: false,

			    // reverse the character sequence
			    // (note that reverse doesn't make sense with sync = true)
			    reverse: false,

			    // callback that executes once the animation has finished
			    callback: function () {}
			  },

			  // set the type of token to animate (available types: 'char' and 'word')
			  type: 'char'
			});
	});

	/* =================  window Scroll =================  */

 $(window).on('scroll , load',function(){
		var window_top = $(window).scrollTop();
		/*---------- menu fixed ----------*/

		if(window_top > 20){
			$('.site_header').addClass('header-scroll_bg_light');
		}
		else {
			$('.site_header').removeClass('header-scroll_bg_light');
		}

		/*---------- menu active item ----------*/

		$('#home , #home section').each(function () {
			var currLink = $(this);
			var refElement = $(currLink).attr("id");
				if ($(this).position().top -100 <= window_top) {
					if($('.site_header .nav-link[href*='+refElement+']').length>0){
						$('.site_header .active').removeClass('active');
						$('.site_header .nav-link[href*='+refElement+']').addClass('active');
					}
				}
		});

    /*---------- go to top button ---------*/
    if(window_top > 600){
      $('.go_to_top').fadeIn();
    }
    else {
      $('.go_to_top').fadeOut();
    }
	});
  /* =================  go to top button =================  */
    $('.go_to_top').on('click',function(e){
      e.preventDefault();
  		$('body , html').animate({
  			scrollTop: 0
  		},1000);
    })
/* =================  menu click animate =================  */

	$('.nav-item.nav-link').on('click',function(){
		var $target = $(this).attr('href');
		$('body , html').animate({
			scrollTop: $($target).position().top
		},1000);
		$('.navbar-collapse').removeClass('show');
		$('.navbar-toggler svg').toggleClass('fa-times').toggleClass('fa-bars');
	});
	$('.navbar-toggler').on('click',function(){
		$('.navbar-toggler svg').toggleClass('fa-times').toggleClass('fa-bars');
	});
	/* =================  play video popup =================  */

	$('#play_video').on('click',function(e){
		e.preventDefault();
    $('.video_popup').fadeIn();
		$('.video_popup').css('display','flex');
	});
	$('.video_popup').on('click',function(e){
		var $target = e.target.nodeName;
		var video_src = $(this).find('iframe').attr('src');
		if($target != 'IFRAME'){
		  $('.video_popup').css('display','none');
			$('.video_popup iframe').attr('src'," ");
			$('.video_popup iframe').attr('src',video_src);
		}
	});

  /* =================  accordion  =================  */

  $('.fillter_btn').on('click',function(){
    var tag = $(this).attr('id');
    $('.fillter_btn').removeClass('active');
    $(this).addClass('active');
    $('.accordion_tab').each(function(){
      var data = $(this).attr('data-target');
      if( data == tag){
        $('.accordion_tab').removeClass('open');
        $(this).addClass('open');
      }
    });
  });

  // =================  open contact form home page  =================  //
  $('#send_message').on('click',function(e){
    e.preventDefault();
    $('.contact_popup').css('display','flex');
  });
  $('.contact_popup').on('click',function(e){
    var $target = e.target.nodeName;
		if($target != 'FORM' && $target != 'INPUT' && $target != 'BUTTON' && $target != 'TEXTAREA'){
		  $(this).fadeOut();
      $(this).addClass('animated');
		}
  });
// =================  close button for coming soon page  =================  //
$('.comimg_header .nav-item').on('click',function(e){
  e.preventDefault();
  var tag = $(this).attr('href');
  $(tag).css('display','block');
});
$('.comingsoon_page .coming_data .close').on('click',function(e){
  e.preventDefault();
  $('.coming_data').fadeOut();
});
// =================  contact form  =================  //

	$("#contact_form").on('submit',function(t){
		t.preventDefault();
		$('#contact_submit .fa-spin').removeClass('hidden');
		submitForm();
	});

	  function submitForm(){
	    var name=$("#your_name").val(),
	        email=$("#email").val(),
	        phone=$("#phone").val(),
	        message=$("#message").val();
	      $.ajax({type:"POST",url:"contact.php",
	      data:"&name="+name+"&email="+email+"&phone="+phone+"&message="+message,
	      success:function(s){
	        "success"==s&&formSuccess()}})}
	    function formSuccess(){
				$('#contact_submit .fa-spin').addClass('hidden');
	      $("#msgSubmit").removeClass("hidden"),setTimeout(function(){$("#msgSubmit").addClass("hidden");
	    },2e3)
		}
