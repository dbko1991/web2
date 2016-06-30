$(function(){

	/*pagetop*/
	$(document).ready(function() {
	  var pagetop = $('.pagetop');
	    $(window).scroll(function () {
	       if ($(this).scrollTop() > 100) {
	            pagetop.fadeIn();
	       } else {
	            pagetop.fadeOut();
	            }
	       });
	       pagetop.click(function () {
	           $('body, html').animate({ scrollTop: 0 }, 500);
	              return false;
	   });
	});

	/*fixnav*/
	$(document).ready(function() {
	  var fixnav = $('.fixnav');
	    $(window).scroll(function () {
	       if ($(this).scrollTop() > 200) {
	            fixnav.fadeIn();
	       } else {
	            fixnav.fadeOut();
	            }
	       });
	});

	/*vi_nav*/
	$(".vi_navhover").each(function(){
		var set = $(this);
		var vi_navcolor = set.find(".vi_navcolor");
		var vi_navgray = set.find(".vi_navgray");
		vi_navcolor.hover(
		function(){
			vi_navgray.animate({
				left:60
			},"1000");
			vi_navgray.removeClass("rotate2");
			vi_navgray.addClass("rotate1");
		},
		function(){
			vi_navgray.animate({
				left:5
			},"1000");
			vi_navgray.removeClass("rotate1");
			vi_navgray.addClass("rotate2");

		});
	});

	/*linkid*/
	$('#src_insyoku').click(function(){
		$("body, html").animate({scrollTop: $('#insyoku').offset().top}, 1000);
		return false;
	});
	$('#src_kaimono').click(function(){
		$("body, html").animate({scrollTop: $('#kaimono').offset().top}, 1000);
		return false;
	});
	$('#src_kenkou').click(function(){
		$("body, html").animate({scrollTop: $('#kenkou').offset().top}, 1000);
		return false;
	});

	$('#od_arr').click(function(){
		$("body, html").animate({scrollTop: $('#oneday').offset().top}, 1000);
		return false;
	});
	
	/*onedayhover*/
	var odhover=$('#od_arr').find('a')
	odhover.hover(
		function(){
			$('#od_arr_img').attr("src","images/od_arrow2.png");
		},
		function(){
			$('#od_arr_img').attr("src","images/od_arrow.png");
		});

});