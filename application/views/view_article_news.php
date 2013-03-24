<script type="text/javascript">
	function load_jquery(){
		$('#back_to_top').backToTop();
		$('.category_menu a').click(function(){
		    var A = $(this);
		    jQuery('.active', A.parents('.category_menu')).attr('class', '');
		    A.attr('class', 'active');
		    history.pushState('', '', A.attr('href'));
		    fragment = this.hash;
		    getContent_gallery(fragment);
		    return false;
		  });
	}
</script>
<!-- banner -->
<div id="breadcrumb">
	<div class="bc_left">
		<img src="<?php echo base_url(); ?>assets/images/bnl_icon.png" /> > Articles > News
	</div>
</div>
<div class="clear"></div>
<div class="container">
	<div id="content" class="news_page">
		<span class="title title_style">News</span>
		<ul id="article_grid_type">
			<?php for ($i=1; $i <= 12; $i++) { ?>
				<li>
					<img src="<?php echo base_url('dummy_img/n'.$i.'.jpg'); ?>" />
					<div class="desc">
						<a href="" class="a_title">NIDJI LIBERTY VICTORY DIPUTAR DI OLD TRAFFORD</a>
						<p>
							Intro paragraph lorem ipsum dolor sit amet, consectetuer adipiscit Ed.	
						</p>
						<span class="date">15 Februari 2013&nbsp;&nbsp;•&nbsp;&nbsp;</span> 
						<a class="addthis_button share" href="http://www.addthis.com/bookmark.php"> </a> &nbsp;&nbsp;
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=fahmilu"></script>
					</div>
				</li>
					<?php if ($i%3 == 0): ?>
						<br class="clear" />
					<?php endif ?>
			<?php }?>
			<div class="clear"></div>
		</ul>
		
		<div class="dark_paging">
			<span>Page 1 of 3</span>
			<div class="paging">
				<a href="" class="prev"><</a>
				<a href="">1</a>
				<a href="">2</a>
				<a href="">3</a>
				<a href="" class="next">></a>
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
	</div>
	<div class="clear"></div>
</div>