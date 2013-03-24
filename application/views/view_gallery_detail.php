<script type="text/javascript">
	function load_jquery(){
		jQuery('#mycarousel').jcarousel();
		$('#back_to_top').backToTop();

		$('#mycarousel a').click(function(){
			var A = $(this);
			// jQuery('.selected', A.parents('#mycarousel')).attr('class', '');
			// A.attr('class', 'selected');
			var link = A.attr('id');
			var id = link.substr(4);
			gotoslide(id);
			// $('#big_gallery .content').hide();
			// $('#big_gallery #detail'+id).fadeIn('slow');

		  return false;
		});
	}

	function gotoslide(idlink){

		jQuery('.selected', $('#mycarousel')).attr('class', '');
		$('#mycarousel #link'+idlink).attr('class', 'selected');	
		$('#big_gallery .content').hide();
		$('#big_gallery #detail'+idlink).fadeIn('slow');		

		return false;
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
		<div id="big_gallery">
			<?php 
			$j = 9;
			for ($i=1; $i < $j; $i++) { ?>
				<div id="detail<?php echo $i; ?>" class="content" <?php  echo ($i == 1) ? 'style="display:block"' : '' ; ?>>
					<?php if ($i != 1): ?>
						<a href="#" class="arrow prev" onclick="gotoslide('<?php echo $i-1; ?>');return false;" ></a>
					<?php endif ?>
					<?php if ($i+1 != $j): ?>
						<a href="#" class="arrow next" onclick="gotoslide('<?php echo $i+1; ?>');return false;" ></a>
					<?php endif ?>
					<img src="<?php echo base_url('dummy_img/gallery/'.$i.'.jpg'); ?>" />
					<div class="caption">
						<h4>creed</h4>
						Guinness Arthur Day 2012 Jakarta 
					</div>
				</div>
			<?php }?>				
		</div>
		<ul id="mycarousel" class="jcarousel-skin-tango">
			<?php for ($i=1; $i < 9; $i++) { ?>
				<li><a href="javascript:void();" <?php  echo ($i == 1) ? 'class="selected"' : '' ; ?> id="link<?php echo $i; ?>" ><img src="<?php echo base_url('dummy_img/gallery/'.$i.'.jpg'); ?>" /></a></li>
			<?php }?>	
		</ul>
		<p>
			Intro paragraph lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet doloMirum est notnunc. Date 1 Nov - 9 Des 2013 Time 17:00 AM - Finish Location Mall Gandaria City, Jakarta Selatan, Indonesia. ure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et eu feugiat nulla facilisis at vero eros et putate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et eu feugiat nulla facilisis at vero.
		</p>
		<div class="info info_photo">
			<span class="square">&#9632;</span>  Author BnL  <span class="square">&#9632;</span>  Posted 12 Feb 2013	
		</div>
		<a href="" class="share" style="float: right;">Share this gallery </a>
		<div class="clear"></div>
		<div class="comment">
			<div class="title_style title">9 comments</div>
			<hr class="line_style"/>
			<ul>
				<?php for ($i=0; $i < 3; $i++) { ?>
					<li>
						<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
						<div class="text_comment">
							<span class="user_name"><font style="font-weight:bold;">Eddo Wallad</font> Said:</span><span class="comment_date">5 Days ago</span><br class="clear"/>
							<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, volutpa sue epat moe lor sue ipsum.</span>
						</div>
						<br class="clear"/>
					</li>
					<hr class="line_style"/>
				<?php } ?>
				<li class="post_comment">
					<form method="" action="">
						<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
						<textarea placeholder="Leave your comment here." class="textarea"></textarea>
						<input type="image" src="<?php echo base_url(); ?>assets/images/send_btn.png" />
					</form>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div id="sidebar">
		<div class="other_galleries">
			<div class="title_style title">other galleries</div>
			<ul>
				<li>
					<img src="<?php echo base_url('dummy_img/gallery/1.jpg'); ?>" />
					<div class="count_file">13</div>
					<div class="desc">
						<a href="">MUSE</a>
						Ziggo Dome, Amsterdam Dec 2012
					</div>
					<div class="clear"></div>
				</li>
				<li>
					<img src="<?php echo base_url('dummy_img/gallery/2.jpg'); ?>" />
					<div class="count_file _video">1</div>
					<div class="desc">
						<a href="">30 SECONDS TO MARS</a>
						MTV Video Music Awards lorem ipsum
					</div>
					<div class="clear"></div>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		<div id="most_news_popular">
			<div class="title_style title">most news popular</div>
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
			<div class="title_style title">event calendar</div>
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
		<br class="clear" />
	</div>
	<div class="clear"></div>
</div>