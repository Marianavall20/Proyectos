$(document).ready(function(){

	$("#myCarousel").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 400){
			if(!flag){
				

				$("header").css({"background-color": "#00b19c"});
				flag = true;
			}
		}else{
			if(flag){
				

				$("header").css({"background-color": "transparent"});
				flag = false;
			}
		}


	});

});