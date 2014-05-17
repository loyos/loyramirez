<div class = "menu">
	<ul>
		<li data-div="home">
			<?php echo $this->Html->link('Home', '#about_me', array('data-div' => 'home')); ?>
		</li>
		<li data-div= "home_content">
			<?php echo $this->Html->link('About', '#', array('data-div' => 'home_content')); ?>
		</li>
		<li data-div= "about">
			<?php echo $this->Html->link('Portfolio', '#', array('data-div' => 'about')); ?>
		</li>
		<li data-div= "others">
			<?php echo $this->Html->link('Services', '#', array('data-div' => 'others')); ?>
		</li>
		<li data-div= "separator">
			<?php echo $this->Html->link('Contact', '#', array('data-div' => 'separator')); ?>
		</li>
	</ul>
</div>
