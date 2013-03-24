<script type="text/javascript">
	function load_jquery(){
		$('#back_to_top').backToTop();
	}
</script>
<!-- banner -->
<div id="breadcrumb">
	<div class="bc_left">
		<img src="<?php echo base_url(); ?>assets/images/bnl_icon.png" /> > Event Schedules > Guinness Arthur Day 2012 Creed
	</div>
</div>
<div class="clear"></div>
<div class="container bg_white">
	<div id="content" class="bg_white event_detail_page">
		<div class="date">31 NOV</div>
		<div class="title">
			<h4>Guinness Arthur’s Day 2012 CREED</h4>
			Author BnL  <span class="square">&#9632;</span>  Posted 12 Feb 2013
		</div>
		<div class="clear"></div>
		<img src="<?php echo base_url('dummy_img/poster.jpg');?>" class="poster" />
		<br class="clear" />
		<p>
			Intro paragraph lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet doloMirum est notnunc. Date 1 Nov - 9 Des 2013 Time 17:00 AM - Finish Location Mall Gandaria City, Jakarta Selatan, Indonesia. ure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et eu feugiat nulla facilisis at vero eros et putate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et eu feugiat nulla facilisis at vero.
		</p>
		<a href="" class="share">Share this article </a>
		<div id="related">
			<div class="title_style title_">RELATED EVENTS CALENDAR</div>
			<hr class="line_style" />
			<ul>
				<?php for ($i=1; $i < 4; $i++) { ?>
					<li>
						<img src="<?php echo base_url('playlist/'.$i.'.jpg'); ?>" />
						<div class="desc">
							<a href="">Proin gravida nibh vel velit auctor </a>
							31 March 2013
						</div>
						<div class="clear"></div>
					</li>
				<?php }?>
			</ul>
			<div class="clear"></div>
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
							<span>Yesterday  |  <font style="font-style:italic">reviews</font></span>
							<a href="">Title Goes Here Lorem ipsum sir Amet Sirtum</a>
						</div>
						<div class="clear"></div>
					</li>
				<?php }?>
			</ul>
		</div>		
		<div class="schedules">
			<div class="title_style title">EVENTS CALENDAR</div>
			<ul>
				<?php for ($i=7; $i < 9; $i++) { ?>
					<li>
						<img src="<?php echo base_url('playlist/'.$i.'.jpg'); ?>" />
						<div class="desc">
							<a href="">The Stone Roses Concert</a>
							<span>Yesterday</span>
						</div>
						<div class="clear"></div>
					</li>
				<?php }?>
			</ul>
		</div>	
		<div class="galleries">
			<div class="title_style title">galleries</div>
				<?php for ($i=1; $i < 4; $i++) { ?>
					<a href=""> <img src="<?php echo base_url('playlist/'.$i.'.jpg'); ?>" /> </a>
				<?php }?>
		</div>
		<br class="clear" />
	</div>
	<div class="clear"></div>
</div>