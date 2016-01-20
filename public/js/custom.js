//Script for smooth scrolling between internal links
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    

	    var target = this.hash;
	    if(target) { 
		    e.preventDefault();
		    var $target = $(target);
		    var offset = $target.offset().top - 64;
		    $('html, body').stop().animate({
		        'scrollTop': offset
		    }, 700, 'swing');
		}
	});
});