 <script src="js/vendor/jquery.js"></script>
 <script src="js/foundation.min.js"></script>
 <script>
      $(document).foundation();
 </script>
     <script src="js/jquery.shuffleLetters.js"></script>
     <script type="text/javascript">
	 function shuffle(target)
	 {
		 if(target=="page")
		 {
			 var container = $(".orange-text")
			
		 }
		 container.shuffleLetters();
	 }
	 shuffle("page");	 	 
	 </script>
<script src="js/freewall.js"></script> 
<script type="text/javascript">
			var wall = new freewall("#freewall");
			wall.reset({
				selector: '.brick',
				animate: true,
				cellW: 150,
				cellH: 'auto',
				onResize: function() {
					wall.fitWidth();
				}
			});
			
			wall.container.find('.brick img').load(function() {
				wall.fitWidth();
			});


		</script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
     <script src="js/ourwork.js"></script>
     <script>
			$(function() {
				Grid.init();   
			});
</script>

  <script class="rs-file" src="js/easing.js"></script>
<script type="text/javascript">
 $(function() {
	 
	 $('#hero a, #haveachat a').bind('click',function(event){
        var $anchor = $(this);
 
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');

          event.preventDefault();
    });
     });
     
     </script>

  



   