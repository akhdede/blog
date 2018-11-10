$(document).ready(function(){
	$('.page-scroll').click(function(e){
		var tujuan = $(this).attr('href');
		var elemenTujuan = $(tujuan);

		$('#home').animate({
			scrollTop: elemenTujuan.offset().top - 50
		}, 1250, 'easeInOutExpo');

		e.preventDefault();
	});
});

// parralax
// about
$(window).on('load', function(){
	$('.pKiri, .pKanan').addClass('muncul');
});

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/5 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wScroll/2 +'%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
	});

	// portfolio
	if (wScroll > $('.portfolio').offset().top - 250) {
		$('.portfolio .img-thumbnail').each(function(i){
			setTimeout(function(){
				$('.portfolio .img-thumbnail').eq(i).addClass('muncul');
			}, 200 * (i+1));
		});
	}

	if(wScroll > $('.about').offset().top - 100){
		$('#gotoTop').addClass('goMuncul');
	}
	else{
		$('#gotoTop').removeClass('goMuncul');
	}
});