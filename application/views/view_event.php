<script type="text/javascript">
	function load_jquery(){
		$('#back_to_top').backToTop();
	}
</script>
<!-- banner -->
<div id="breadcrumb">
	<div class="bc_left">
		<img src="<?php echo base_url(); ?>assets/images/bnl_icon.png" /> > Event Calendar
	</div>
</div>
<div class="clear"></div>
<div class="container">
	<div id="content" class="event_page">
		<span class="title_style" style="font-size:18px;display:block;">event Calendar</span>
		<br class="clear" />
		<div class="big_event">
			<img src="<?php echo base_url('dummy_img/javajaz.jpg'); ?>">
			<div class="caption">
				<a href="<?php echo base_url(); ?>#!event/detail" id="event_detail" onclick="load_content('#event_detail');">
					JAKARTA International Java Jazz Festival 2013
				</a>
				<p>Intro paragraph lorem ipsum dolor sit amet, consectetuer adipiscing elit Ed diam nonummy nibh euismod tincidunt ut laoreet doloMirum est notnunc.	</p>
			</div>
			<div class="date">1<span class="month">mar</span></div>
		</div>
		<br class="clear"/>
		<?php for ($i=0; $i < 4; $i++) { ?>
		<div class="small_event">
			<img src="<?php echo base_url('dummy_img/javajaz.jpg'); ?>">
			<div class="desc">
				<a href="">JAKARTA International Java Jazz Festival 2013</a>
				<p>Intro paragraph lorem ipsum dolor sit amet, consectetuer adipiscing elit Ed diam nonummy nibh euismod tincidunt ut laoreet doloMirum est notnunc. Intro paragraph lorem ipsum dolor sit amet, consectetuer adipiscing elit Ed diam nonummy nibh euismod tincidunt ut laoreet doloMirum est notnunc.</p>
			</div>
			<div class="date">1<span class="month">mar</span></div>
			<br class="clear"/>
		</div>
		<?php }?>
		<div class="pagination">
			<div style="width: 135px; margin:0px auto;">
				<a href=""><</a>
				<a href="">1</a>
				<a href="">2</a>
				<a href="">3</a>
				<a href="">></a>
			</div>
		</div>
	</div>
	<div id="sidebar">
		<div id="most_news_popular">
			<div class="title_style title">MOST POPULAR NEWS</div>
			<ul>
				<?php for ($i=1; $i < 5; $i++) { ?>
					<li>
						<img src="<?php echo base_url('playlist/'.$i.'.jpg'); ?>" />
						<div class="desc">
							<span>Yesterday</span>
							<a href="">Title Goes Here Lorem ipsum sir Amet Sirtum</a>
						</div>
						<div class="clear"></div>
					</li>
				<?php }?>
			</ul>
		</div>		
		<div class="galleries">
			<div class="title_style title">galleries</div>
				<?php for ($i=1; $i < 4; $i++) { ?>
					<a href=""><img src="<?php echo base_url('playlist/'.$i.'.jpg'); ?>" /></a>
				<?php }?>
		</div>
		<br class="clear" />
	</div>
	<div class="clear"></div>
</div>