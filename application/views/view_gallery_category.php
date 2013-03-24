<?php if ($type=='all'): ?>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/1.jpg'); ?>" />
	<a href="<?php echo base_url(); ?>#!gallery/detail" id="gallery_detail" onclick="load_content('#gallery_detail');">
		<div class="caption">
			<span class="artist">MUSE</span>
			Ziggo Dome, Amsterdam Dec 2012
		</div>
	</a>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/2.jpg'); ?>" />
	<a href="#" class="play_icon"></a>
	<div class="caption">
		<span class="artist">30 SECONDS TO MARS</span>
					MTV Video Music Awards lorem ipsum
	</div>
	<div class="count_file video_">1</div>
</div>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/3.jpg'); ?>" />
	<div class="caption">
		<span class="artist">KEANE</span>
					Live in Bangkok
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/4.jpg'); ?>" />
	<a href="#" class="play_icon"></a>
	<div class="caption">
		<span class="artist">Mr. Big</span>
					Guinness Arthur Day 2011
	</div>
	<div class="count_file video_">1</div>
</div>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/5.jpg'); ?>" />
	<div class="caption">
		<span class="artist">/RIF</span>
					Guinness Arthur Day 2013, Jakarta
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/6.jpg'); ?>" />
	<div class="caption">
		<span class="artist">CREED</span>
					Guinness Arthur Day 2013, Jakarta
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/7.jpg'); ?>" />
	<div class="caption">
		<span class="artist">Lifehouse</span>
					Live in Jakarta
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/8.jpg'); ?>" />
	<div class="caption">
		<span class="artist">Gugun Blus Shelter</span>
					Live in California
	</div>
	<div class="count_file">13</div>
</div>
<br class="clear" />
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
<div class="clear"></div>
<?php elseif($type=="photo"): ?>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/1.jpg'); ?>" />
	<div class="caption">
		<span class="artist">MUSE</span>
					Ziggo Dome, Amsterdam Dec 2012
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/3.jpg'); ?>" />
	<div class="caption">
		<span class="artist">KEANE</span>
					Live in Bangkok
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/5.jpg'); ?>" />
	<div class="caption">
		<span class="artist">/RIF</span>
					Guinness Arthur Day 2013, Jakarta
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/6.jpg'); ?>" />
	<div class="caption">
		<span class="artist">CREED</span>
					Guinness Arthur Day 2013, Jakarta
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/7.jpg'); ?>" />
	<div class="caption">
		<span class="artist">Lifehouse</span>
					Live in Jakarta
	</div>
	<div class="count_file">13</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/8.jpg'); ?>" />
	<div class="caption">
		<span class="artist">Gugun Blus Shelter</span>
					Live in California
	</div>
	<div class="count_file">13</div>
</div>
<br class="clear" />
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
<?php else: ?>
<div id="gallery_item">
	<img src="<?php echo base_url('dummy_img/gallery/2.jpg'); ?>" />
	<a href="#" class="play_icon"></a>
	<div class="caption">
		<span class="artist">30 SECONDS TO MARS</span>
					MTV Video Music Awards lorem ipsum
	</div>
	<div class="count_file video_">1</div>
</div>
<div id="gallery_item" class="genap">
	<img src="<?php echo base_url('dummy_img/gallery/4.jpg'); ?>" />
	<a href="#" class="play_icon"></a>
	<div class="caption">
		<span class="artist">Mr. Big</span>
					Guinness Arthur Day 2011
	</div>
	<div class="count_file video_">1</div>
</div>
<?php endif ?>