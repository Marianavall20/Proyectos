$(document).ready(function(){
	
	$('.enlace').click(function()
	{
		h=$('a', this).attr('href');
		$(location).attr('href',h);
		return false;
	});
	
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();
		if ($(this).hasClass('activado'))
		{
           $(this).removeClass('activado');
           $(this).children('ul').slideUp();		  
		   
		   //$(location).attr('href',h);
		   //h = $(this).children('ul').children('li').find('a').attr('href');
		//alert(h);
			
		}
		else
		{
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
			
		}
		
	});
});