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
    
    var webdesignwall = new freewall("#webdesignwall");
			webdesignwall.reset({
				selector: '.website',
				animate: true,
                cellW: 80,
				cellH: 'auto',
				onResize: function() {
					webdesignwall.fitWidth();
				}
			});
			
			webdesignwall.container.find('.website img').load(function() {
				webdesignwall.fitWidth();
			});
    
   
    
    
  
    

			
			


		</script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
     <script src="js/ourwork.js"></script>
     <script>
			$(function() {
				Grid.init();   
			});
</script>


<script src="js/readmore.min.js"></script>
<script>
     
$('.further-info').readmore({
  speed: 175,
    lessLink: '',
    moreLink: '<div class="large-6 columns init-button"><a class="text-center button right" href="#">Read More</a></div>',
    collapsedHeight: 0,
    beforeToggle: function(trigger, element, expanded) {
      
       
           
          
              
  
           
     
    }, 
    afterToggle: function(trigger, element, expanded) {
    if( expanded) { 
      $('.init-button').hide();
    }
    }
});
    
  
</script>


  <script class="rs-file" src="js/easing.js"></script>
<script type="text/javascript">
 $(function() {
	 
	 $('#hero a, #haveachat a, #ourwork a, .seemore').bind('click',function(event){
        var $anchor = $(this);
 
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');

          event.preventDefault();
    });
     });
     
     </script>

<script>

$(function(){
 
    $("#lawnperfection").load('../svg/lawn-perfection-infographic.svg',function(response){
 
        $(this).addClass("svgLoaded");
         
        if(!response){
            // Error loading SVG!
            // Make absolutely sure you are running this on a web server or localhost!
        }
 
    });
});

    </script>

<script>

$(function(){
 
    $("#aquaair").load('../svg/aqua-air.svg',function(response){
 
        $(this).addClass("svgLoaded");
         
        if(!response){
            // Error loading SVG!
            // Make absolutely sure you are running this on a web server or localhost!
        }
 
    });
});

    </script>

<?php if ($currentpage == "http://pushmyprofile.devserver.xyz/hire-us.php") { ?>
          
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeeix-IL_mcEUc-AV5XInYWZ2mIp4x5o8"></script>
         <script src="js/map.js"></script>
      

       <?php } ?>
  



   