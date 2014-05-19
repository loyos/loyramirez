<div class = "menu">
	<ul>
		<li id = "menu_home" data-div="home">
			<?php echo $this->Html->link('Home', '#', array('data-div' => 'home')); ?>
		</li>
		<li id= "menu_about" data-div= "home_content">
			<?php echo $this->Html->link('About', '#', array('data-div' => 'home_content')); ?>
		</li>
		<li id = "menu_portfolio" data-div= "about">
			<?php echo $this->Html->link('Portfolio', '#', array('data-div' => 'about')); ?>
		</li>
		<li id = "menu_services" data-div= "others">
			<?php echo $this->Html->link('Services', '#', array('data-div' => 'others')); ?>
		</li>
		<li id= "menu_contact" data-div= "separator">
			<?php echo $this->Html->link('Contact', '#', array('data-div' => 'separator')); ?>
		</li>
	</ul>
</div>
