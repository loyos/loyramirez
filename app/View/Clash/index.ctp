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
<table>
	<tr>
		<td>
			Town Hall 7: 
		</td>
		<td>
	<?php echo $this->Html->link($this->Html->image('clash/TH7.1.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery1')); ?>
		</td>
	</tr>
	<tr>
		<td>
			Town Hall 8:
		</td>
		<td>
	<?php echo $this->Html->link($this->Html->image('clash/TH8.1.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery2')); ?>
		</td>
	</tr>
	<tr>
		<td>
			Town Hall 9:
		</td>
		<td>
	<?php echo $this->Html->link($this->Html->image('clash/TH9.1.jpg', array('width' => '200px')), 'javascript:;', array('escape' => false, 'id' => 'open_gallery3')); ?>
		</td>
	</tr>
</table>
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
						href : 'img/clash/TH7.1.jpg',
						title : 'TH 7.1'
					},
					{	
						href : 'img/clash/TH7.2.jpg',
						title : 'TH 7.2'
					},
					{	
						href : 'img/clash/TH7.3.jpg',
						title : 'TH 7.3'
					},
					{	
						href : 'img/clash/TH7.4.jpg',
						title : 'TH 7.4'
					},
				]);
			});
			
$("#open_gallery2").click(function() {
				$.fancybox.open([
					{	
						href : 'img/clash/TH8.1.jpg',
						title : 'TH 8.1 Anti MP'
					},
					{	
						href : 'img/clash/TH8.2.jpg',
						title : 'TH 8.2'
					},
				]);
			});
$("#open_gallery3").click(function() {
				$.fancybox.open([
					{	
						href : 'img/clash/TH9.1.jpg',
						title : 'TH 9.1'
					},
					{	
						href : 'img/clash/TH9.2.jpg',
						title : 'TH 9.2'
					},
					{	
						href : 'img/clash/TH9.3.jpg',
						title : 'TH 9.3'
					},
					{	
						href : 'img/clash/TH9.4.jpg',
						title : 'TH 9.4'
					},
					{	
						href : 'img/clash/TH9.5.jpg',
						title : 'TH 9.5 ANTI TODO, este tipo de base y sus similares son las mejores bases 9 para la guerra!'
					},
				]);
			});			
</script>