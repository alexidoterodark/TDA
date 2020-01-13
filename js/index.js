$(document).ready(function(){
	$(window).bind('scroll',function(){
		var scroll = $(window).scrollTop();
		if(scroll >= 10){
			$('.menu').addClass('fixed');
			console.log(scroll+">"+10+" position fixed");
		}else{
			$('.menu').removeClass('fixed');
			console.log(scroll+"!="+10+" original");
		}
		console.log(scroll);
	})
})
$(document).ready(function(){
	$('.calendarioMostrar').addClass('none');
	$('.calendarioMostrar2').addClass('none');
	$('.e-num-day').text(fecha.getDate());
	$('.e-mes').text(meses[fecha.getMonth()]);
	$('.e-day').text(diasCompleto[fecha.getDay()]);
	nextDate();
	$(window).bind('scroll',function(){
		var scroll = $(window).scrollTop();
		if(scroll >= 10){
			$('.menu').addClass('fixed');
			//console.log(scroll+">"+10+" position fixed");
		}else{
			$('.menu').removeClass('fixed');
			//console.log(scroll+"!="+10+" original");
		}
		//console.log(scroll);
	})
	/*document.querySelector('.entrada').addEventListener('click',function(){
		alert("Ingrese fecha de entrada");
	})*/
	$('.entrada').click(function(){
		//alert("Ingrese fecha de entrada");
		$('.calendarioMostrar').removeClass('none');
	});
	/*document.querySelector('.salida').addEventListener('click',function(){
		alert("Ingrese fecha de salida");
	})*/
	$('.salida').click(function(){
		$('.calendarioMostrar2').removeClass('none');
	});
})