<section id="home" data-type="background" data-speed="2" class="pages">     
		<div class = "quotes" data-speed="2">
			<ul class = 'bjqs'>
				<li>
					<p>Web Solutions that make running your business easier.</p>
				</li>
				<li>
					<p>“What separates design from art is that design is meant to be... functional.” </p>
				</li>
				<li>
					<p>“Websites promote you 24/7: No employee will do that.” </p>
				</li>
			</ul>
		</div>
</section>

<section id="home_content"> 
	<div class = 'square_content'>
		<div class = "big_square">
			 <div class = 'square'>
				
			 </div>
			 <br>
			 Web Design & Development
		</div>
		<div class = "big_square">
			 <div class = 'square'>
				
			 </div>
			  <br>
			 Web Applications
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
	<div class = "portfolio" data-speed="1.5">
		<h2> PORTFOLIO</h2>
		<table>
			<tr>
				<td>
					<?php echo $this->Html->image('back.jpg'); ?>
				</td>
				<td>
					<?php echo $this->Html->image('back.jpg'); ?>
				</td>
				<td>
					<?php echo $this->Html->image('back.jpg'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $this->Html->image('back.jpg'); ?>
				</td>
				<td>
					<?php echo $this->Html->image('back.jpg'); ?>
				</td>
				<td>
					<?php echo $this->Html->image('back.jpg'); ?>
				</td>
			</tr>
		</table>
	</div>
</section>

<section id="others" class="pages">     
         <h2> SERVICES </h2>
	<div class = "services">
		<ul class = 'bjqs'>
			<li>
				<div class = "service">
					<div class = "icon">
						<?php echo $this->Html->image('cloud.png', array('height' => '100px')); ?>
					</div>
					<div class = "title">
						Cloud Hosting
					</div>
					<div class = "description">
						<p>With extensive experience in the area of hosting, server loading and website stress testing we have now 
						teamed up with Amazon to provide our clients with the ultimate solution to this common frustration.</p>

						<p>Amazon Web Services offers a cloud computing solution that provides businesses with a flexible, highly scalable, and extremely cost efficient way to deliver their websites and web applications.</p>	
					</div>
				</div>
				
				<div class = "service">
					<div class = "icon">
						<?php echo $this->Html->image('monitor.png', array('height' => '80px')); ?>
						<br>
						<br>
					</div>
					<div class = "title">
						Web Applications
					</div>
					<div class = "description">
						<p>Your business goals are at the heart of everything we do. Whatever your application or market need, Web Together can show you how internet-based solutions can improve your company's sales, reduce your operating costs and improve your company's productivity.</p>

						<p>Once we understand what you need, we will work with you to develop wireframes, designs, functional prototypes or integrations to other software applications. </p>
					</div>
				</div>
			</li>
			
			<li>
				<div class = "service">
					<div class = "icon">
						<?php echo $this->Html->image('edit.png', array('height' => '70px')); ?>
						<br>
						<br>
					</div>
					<div class = "title">
						Content Management Systems
					</div>
					<div class = "description">
						<p>Simply put, a content management system (CMS) is a system that allows you to manage the content of your website. With so many content management systems now in the marketplace it can be confusing as to which one to choose. This is where we can help. </p>

						<p>Unlike other web design and development companies, we do not tie ourselves to a single CMS solution. We will provide unbiased advice based on what best suits your business requirements.</p>
					</div>
				</div>
				
				<div class = "service">
					<div class = "icon">
						<?php echo $this->Html->image('global.png', array('height' => '70px')); ?>
						<br>
						<br>
					</div>
					<div class = "title">
						Multilingual Websites
					</div>
					<div class = "description">
						We are highly experienced in building websites in more than one language.
					</div>
				</div>
				
			</li>
			<li>
				<div class = "service">
					<div class = "icon">
						<?php echo $this->Html->image('cart.png', array('height' => '70px')); ?>
						<br>
						<br>
					</div>
					<div class = "title">
						E-Commerce Stores
					</div>
					<div class = "description">
						<p>Easy to use </p>
						<p> Full of comprehensive features </p>
						<p>Developed to target different languages and sell to different locations </p>
						<p>Beautifully designed to accommodate mobile and tablet shoppers </p>
						<p>Streamlined to reduce your time investment and increase profits </p>
					</div>
				</div>
				
				<div class = "service">
					<div class = "icon">
						<?php echo $this->Html->image('mobile.png', array('height' => '70px')); ?>
						<br>
						<br>
					</div>
					<div class = "title">
						Mobile Designs
					</div>
					<div class = "description">
						In order to manage efficiently the resources and accelerate the display of the site, is highly recommended to have a separate design for when the web
						is displayed in a mobile device.
						With experience in mobile design we can work together to find an optimal solution for your business.
					</div>
				</div>
				
			</li>
		</ul>
	</div>
</section>

<section id="separator" data-type="background" data-speed="4" class="pages">
 
</section>

<!-- <section id="contact" data-type="background" data-speed="2" class="pages">     
         
</section>
-->

<script>
$(document).ready(function(){
	
	$( ".menu a, .menu li" ).click(function( event ) {
		event.preventDefault();
		// alert($(this).data('div'));
		var actual = '#' + $(this).data('div');
		console.debug(actual);
		$('html, body').animate({scrollTop:$(actual).position().top - 80}, 'slow');
		console.debug($(this).position());
	});

	// parallax function moving background of the sections
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
	
	
	$('.portfolio').each(function(){   // moving the second background parallax
		var $bgobj = $(this); // assigning the object
		var $window = $(window);
		var inicial = $('.portfolio').css('top');
		inicial = parseInt(inicial.replace('px',''));
		// console.debug('inicial = ' + inicial);
        $(window).scroll(function() {
            var yPos = ($window.scrollTop() / $bgobj.data('speed'));
			var wachu = (yPos + inicial) + 'px';
			var actual = $('.portfolio').css('top', wachu);
			// console.debug(wachu);
        }); 
    });
	
	
	$('.quotes').each(function(){   // moving quotes parallax
		var $bgobj = $(this); // assigning the object
		var $window = $(window);
		var inicial = $('.quotes').css('top');
		inicial = parseInt(inicial.replace('px',''));
		// console.debug('inicial = ' + inicial);
        $(window).scroll(function() {
            var yPos = ($window.scrollTop() / $bgobj.data('speed'));
			var wachu = (yPos + inicial) + 'px';
			var actual = $('.quotes').css('top', wachu);
			// console.debug(wachu);
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
		
		jQuery(document).ready(function($) {
			$('.quotes').bjqs({
				height : 520,
				width : 600,
				responsive : true,
				animduration : 450,
				animtype : 'slide',
				showcontrols : false, // show next and prev controls
				centercontrols : false, // center controls verically
				showmarkers : false,
			});
		});
		
		jQuery(document).ready(function($) {
			$('.services').bjqs({
				height : 370,
				width : 800,
				responsive : false,
				animduration : 450,
				animtype : 'slide',
				showcontrols : true, // show next and prev controls
				centercontrols : true, // center controls verically
				showmarkers : false,
			});
		});

});

                                          

</script>