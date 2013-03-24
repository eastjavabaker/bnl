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
		<img src="<?php echo base_url(); ?>assets/images/bnl_icon.png" /> > Articles > Reviews
	</div>
</div>
<div class="clear"></div>
<div class="container">
	<div id="content" class="reviews_page">
		<span class="title title_style">REVIEWS</span>
		<ul id="article_list_type">
			<?php for ($i=1; $i < 6; $i++) { ?>
				<li>
					<img src="<?php echo base_url('dummy_img/re'.$i.'.jpg'); ?>" />
					<div class="desc">
						<span class="new_album">New Album</span>
						<h4>Muse - 'The 2nd Law'</h4>
						<p>
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
						<a href="" class="share"></a> &nbsp;&nbsp;
						<a href="" class="more">| More >></a>
					</div>
					<br class="clear" />
				</li>
				<br class="clear" />
			<?php }?>
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