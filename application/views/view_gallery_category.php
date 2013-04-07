<?php if ($type=='all'): ?>
<?php $i=1;foreach($query as $v){?>
<div id="gallery_item" <?php echo ($i%2==0)?'class="genap"':'';?> >
	<img src="<?php echo base_url('data/gallery/'.$v->picture); ?>" />
	<a href="<?php echo base_url(); ?>#!gallery/detail/<?php echo $v->id;?>" id="gallery_detail" onclick="load_content('#gallery_detail');">
		<div class="caption">
			<span class="artist"><?php echo $v->artist;?></span>
			<?php echo $v->album_name;?>
		</div>
	</a>
	<div class="count_file">13</div>
</div>
<?php $i++;} ?>
<br class="clear" />
<div class="dark_paging">
	<span>Page 1 of 1</span>
	<div class="paging">
		<a href="" class="prev"><</a>
		<a href="">1</a>
		<a href="" class="next">></a>
	</div>
</div>
<div class="clear"></div>
<?php elseif($type=="photo"): ?>
<?php $i=1;foreach($query as $v){?>
<div id="gallery_item" <?php echo ($i%2==0)?'class="genap"':'';?> >
	<img src="<?php echo base_url('data/gallery/'.$v->picture); ?>" />
	<a href="<?php echo base_url(); ?>#!gallery/detail/<?php echo $v->id;?>" id="gallery_detail" onclick="load_content('#gallery_detail');">
		<div class="caption">
			<span class="artist"><?php echo $v->artist;?></span>
			<?php echo $v->album_name;?>
		</div>
	</a>
	<div class="count_file">13</div>
</div>
<?php $i++;} ?>
<br class="clear" />
<div class="dark_paging">
	<span>Page 1 of 1</span>
	<div class="paging">
		<a href="" class="prev"><</a>
		<a href="">1</a>
		<a href="" class="next">></a>
	</div>
</div>	
<?php else: ?>
<?php $i=1;foreach($query as $v){?>
<div id="gallery_item" <?php echo ($i%2==0)?'class="genap"':'';?>>
	<img src="<?php echo base_url('dummy_img/gallery/2.jpg'); ?>" />
	<a href="#" class="play_icon"></a>
	<div class="caption">
		<span class="artist">30 SECONDS TO MARS</span>
					MTV Video Music Awards lorem ipsum
	</div>
	<div class="count_file video_">1</div>
</div>
<?php $i++;} ?>
<?php endif ?>