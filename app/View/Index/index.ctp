<section id="home" data-type="background" data-speed="2" class="pages">     
         
</section>

<section id="home_content"> 
	<div class = 'square_content'>
		<div class = "big_square">
			 <div class = 'square'>
				
			 </div>
			 <br>
			 Cloud Service
		</div>
		<div class = "big_square">
			 <div class = 'square'>
				
			 </div>
			  <br>
			 Secured Website
		</div>
		<div class = "big_square">
			 <div class = 'square'>
				
			 </div>
			  <br>
			 Quick Service
		</div>
	</div>
</section>

<section id = "about_me">
	<div class = 'batman out' data-type ='figures' data-speed="4">
	</div>
	<div class = 'profile'>
		Loy Ramírez <br>
		<span>
			Web developer, travel addict, music lover.. 
		</span>
		<div class = "img">
			
		</div>
	</div>
</section>
     
<section id="about" data-type="background" data-speed="4" class="pages">
	<div class = "back" data-speed="5">
	</div>
</section>


<script>
$(document).ready(function(){  // parallax function moving background of the sections
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
		
		var $window = $(window);
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			// console.debug($window.scrollTop());
             
            // Put together our final background position
            var coords = '50% '+ yPos + 'px';
 
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); 
    });
	
	
	$('.back').each(function(){   // moving the second background parallax
		 var $bgobj = $(this); // assigning the object
		var $window = $(window);
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			var wachu = yPos + 'px';
			var actual = $('.back').css('top', wachu);
        }); 
    });
	
	
	var $window = $(window);  // showing and hiding batman!
	  $(window).scroll(function() {
			// console.debug($window.scrollTop());
			if($window.scrollTop() < 425){
				$('.batman').removeClass('in').addClass('out');
			}else{
				$('.batman').removeClass('out').addClass('in');
			}
        }); 

});

                                          

</script>