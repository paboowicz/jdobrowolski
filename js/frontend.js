$(document).ready(function() {
    
      
      $('.gallery .thumbs a').click(function(event){
	  event.preventDefault();
	  
	  $(".gallery .preview img").attr('src',$(this).attr('href'));
      });
      
});


$(window).resize(function() {

});
