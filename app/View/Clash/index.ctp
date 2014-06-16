<div class = "logo">
<?php echo $this->Html->image('clash/Hero-BK.png', array('width' => '200px')); ?>
</div>

<div class = "botones">
	<div class = "pics">
		Bases
	</div>

	<div class = "reps">
		Repeticiones
	</div>
</div>

<div class = "clash_pics">
	<?php echo $this->Html->link($this->Html->image('clash/TH9.1.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery1')); ?>
	<?php echo $this->Html->link($this->Html->image('clash/TH9.2.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery2')); ?>
	<?php echo $this->Html->link($this->Html->image('clash/TH9.3.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery3')); ?>
	<?php echo $this->Html->link($this->Html->image('clash/TH9.4.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery4')); ?>
</div>

<div class = "clash_reps">
	dasdeeeeeeeeeee
</div>

<script>
$( ".pics" ).click(function() {
	$( ".clash_reps" ).fadeOut( 500, function() {
		$( ".clash_pics" ).fadeIn( "fast" );
  });
});

$( ".reps" ).click(function() {
	$( ".clash_pics" ).fadeOut( 500, function() {
		$( ".clash_reps" ).fadeIn( "fast" );
  });
});

$("#open_gallery1").click(function() {
				$.fancybox.open([
					{	
						href : 'img/clash/TH9.1.jpg',
						title : 'TH 9.1'
					},
				]);
			});
			
$("#open_gallery2").click(function() {
				$.fancybox.open([
					{	
						href : 'img/clash/TH9.2.jpg',
						title : 'TH 9.2'
					},
				]);
			});
$("#open_gallery3").click(function() {
				$.fancybox.open([
					{	
						href : 'img/clash/TH9.3.jpg',
						title : 'TH 9.3'
					},
				]);
			});
$("#open_gallery4").click(function() {
				$.fancybox.open([
					{	
						href : 'img/clash/TH9.4.jpg',
						title : 'TH 9.4'
					},
				]);
			});			
</script>