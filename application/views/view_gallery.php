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
		<img src="<?php echo base_url(); ?>assets/images/bnl_icon.png" /> > Galleries
	</div>
</div>
<div class="clear"></div>
<div class="container">
	<div id="content" class="gallery_page">
		<div class="category_menu">
			<div class="link all" ><a href="<?php echo base_url(); ?>#!gallery/all" <?php  echo ($type == 'all') ? 'class="active"' : '' ; ?> ></a></div>
			<div class="link photo"><a href="<?php echo base_url(); ?>#!gallery/photo" <?php  echo ($type == 'photo') ? 'class="active"' : '' ; ?>></a></div>
			<div class="link video"><a href="<?php echo base_url(); ?>#!gallery/video" <?php  echo ($type == 'video') ? 'class="active"' : '' ; ?>></a></div>
		</div>
		<div class="clear"></div>
		<div id="list_gallery" class="list_gallery">
			<?php $this->load->view('view_gallery_category', array('type'=>$type)); ?>
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
							<span>Yesterday</span>
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
	</div>
	<div class="clear"></div>
</div>