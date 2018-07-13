$(document).ready(function() {

/*SLIDER*/

$('.big-slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.big-slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
 
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});





// SLIDER

$('.icons').slick({
		//Basic settings
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: true,
		swipeToSlide: true,
		touchMove: true,
		ltr: true,
		touchThreshold: 2,
		variableWidth: true,
		dots: false,
			pauseOnHover: false,
			responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3
			}
		}, {
			breakpoint: 520,
			settings: {
				slidesToShow: 2
			}
		}]
	});
/*
	for ($i = 1; $i < 4; $i++) {
		$('#about_'.$i).mouseover(function(){
			$('#tab_'$i).css('display','flex');
		})
	}*/

	$('#about_1').mouseover(function(){
		$('#tab_1').css('display','flex');
		$('#tab_2').css('display','none');
		$('#tab_3').css('display','none');
		$('#tab_4').css('display','none');
	})
	$('#about_2').mouseover(function(){
		$('#tab_2').css('display','flex');
		$('#tab_1').css('display','none');
		$('#tab_3').css('display','none');
		$('#tab_4').css('display','none');
	})
	$('#about_3').mouseover(function(){
		$('#tab_3').css('display','flex');
		$('#tab_1').css('display','none');
		$('#tab_2').css('display','none');
		$('#tab_4').css('display','none');
	})
	$('#about_4').mouseover(function(){
		$('#tab_4').css('display','flex');
		$('#tab_1').css('display','none');
		$('#tab_2').css('display','none');
		$('#tab_3').css('display','none');
	})

	/*$('.quick-about').hover(function(e) {
	  $('.sub-menu').slideToggle('slow');
	  e.stopPropagation();
	});
*/

})