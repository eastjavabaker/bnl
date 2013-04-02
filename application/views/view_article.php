<script type="text/javascript">
	function load_jquery(){
		$('#slider_article').orbit({
			bullets: true,	
		});
		 $("#tab_review").idTabs(function(id,list,set){ 
		    $("a",set).removeClass("active") 
		    .filter("[href='"+id+"']",set).addClass("active"); 
		    for(i in list) 
		      $(list[i]).hide(); 
		    $(id).fadeIn(); 
		    return false; 
		  }); 		 
		 
		 $("#tab_today_in_history").idTabs(function(id,list,set){ 
		    $("a",set).removeClass("active") 
		    .filter("[href='"+id+"']",set).addClass("active"); 
		    for(i in list) 
		      $(list[i]).hide(); 
		    $(id).fadeIn(); 
		    return false; 
		  }); 		 

		 $("#tab_fun_fact").idTabs(function(id,list,set){ 
		    $("a",set).removeClass("active") 
		    .filter("[href='"+id+"']",set).addClass("active"); 
		    for(i in list) 
		      $(list[i]).hide(); 
		    $(id).fadeIn(); 
		    return false; 
		  }); 
		// $("#tab_review").tabify();
		// $("#tab_today_in_history").tabify();
		// $("#tab_fun_fact").tabify();
		$('#back_to_top').backToTop();
	}
</script>
<!-- banner -->
<div id="breadcrumb">
	<span class="title title_style">article</span>
	<div class="bc_right">
		<img src="<?php echo base_url(); ?>assets/images/bnl_icon.png" /> > Article
	</div>
</div>
<div class="clear"></div>
<div class="container">
	<div id="content">
		<div class="title_style">hot news</div>
		<div id="slider_article">
                      <?php $i=1;foreach($article_rs as $v){ ?>
			<img src="<?php echo base_url(); ?>data/articles/<?php echo $v->picture;?>" data-caption="#caption<?php echo $i;?>" />
                      <?php $i++;} ?>   
		</div>
		<!-- Captions for Orbit -->
                <?php $i=1;foreach($article_rs as $v){ ?>
		<span class="orbit-caption" id="caption<?php echo $i;?>">
			Today | <span class="subtitle">Editor's Pick</span></br>
			<a href="<?php echo base_url(); ?>#!article/detail" id="article_detail" onclick="load_content('#article_detail');"><?php echo $v->title;?></a>
		</span>
                <?php $i++;} ?>
		<br class="clear">
		<div id='img_section'>
			<span class="title_style">INTERVIEWS</span><a href="<?php echo base_url(); ?>#!article/interview" id="article_interview" onclick="load_content('#article_interview');"><span class="see_more">More Interviews</span></a>
			<img src="<?php echo base_url(); ?>dummy_img/1.jpg" />
			<span class="caption">
				<a href="">Interview With Lifehouse at RADIO Jakarta</a>
			</span>
		</div>						
		<div id='img_section' style="margin-left:50px;">
			<span class="title_style">EVENTS REPORTS</span><a href="<?php echo base_url(); ?>#!article/eventreport" id="article_eventreport" onclick="load_content('#article_eventreport');"><span class="see_more">More Event Reports</span></a>
			<img src="<?php echo base_url(); ?>dummy_img/2.jpg" />
			<span class="caption">
				<a href="">The SCRipt Life In Guinness Arthur Day At JAKARTA</a>
			</span>
		</div>
		<br class="clear" />
		<div id='dothemath'>
			<span class="title_style">Do The Math</span><a href="<?php echo base_url(); ?>#!article/dothemath" id="article_dothemath" onclick="load_content('#article_dothemath');"><span class="see_more">More Do The Math</span></a>
			<hr class="line_style" />
			<img src="<?php echo base_url(); ?>assets/images/dothemath.jpg" />
			<span class="caption">
				Bintang Lima - Dewa
			</span>
		</div>
		<br class="clear" />
		<br class="clear" />
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

		<div id="tab_sidebar" class="reviews">
			<div class="title title_style">reviews</div>
			<ul id="tab_review" class="paging">
				<li><a href="#review1" class="active"></a></li>
				<li><a href="#review2"></a></li>
				<li><a href="#review3"></a></li>
			</ul>
			<br class="clear" />
			<hr class="line_style" />
				<?php for ($i=1; $i < 4; $i++) { ?>
					<div id="review<?php echo $i; ?>">
						<img src="<?php echo base_url('dummy_img/muse.jpg'); ?>" />
						<div class="desc">
							<span class="info">New Album</span>
							<a href="<?php echo base_url(); ?>#!article/reviews" id="article_reviews" onclick="load_content('#article_reviews');">
								<h4>Muse - 'The 2nd Law'</h4>
							</a>
							<p>New experience sound and more to rock gravida nibh vel velit auctor aliquet.</p>
						</div>
					</div>
				<?php }?>
			<div class="clear"></div>
		</div>
		
		<div id="tab_sidebar" class="today_in_history">
			<div class="title title_style">today in history</div>
			<ul id="tab_today_in_history" class="paging">
				<li><a href="#today_in_history1" class="active"></a></li>
				<li><a href="#today_in_history2"></a></li>
				<li><a href="#today_in_history3"></a></li>
			</ul>
			<br class="clear" />
			<hr class="line_style" />
				<?php for ($i=1; $i < 4; $i++) { ?>
					<div id="today_in_history<?php echo $i; ?>">
						<img src="<?php echo base_url('dummy_img/philip.jpg'); ?>" />
						<div class="desc">
							<span class="date">Feb 9, 1985</span>
							<a href="<?php echo base_url(); ?>#!article/today_in_history" id="article_today_in_history" onclick="load_content('#article_today_in_history');">
								<h4>American composer Phillip Glass is Born</h4>
							</a>
						</div>
					</div>
				<?php }?>
			<div class="clear"></div>
		</div>		
		<div id="tab_sidebar" class="fun_fact">
			<div class="title title_style">fun facts</div>
			<ul id="tab_fun_fact" class="paging">
				<li><a href="#fun_fact1"  class="active"></a></li>
				<li><a href="#fun_fact2"></a></li>
				<li><a href="#fun_fact3"></a></li>
			</ul>
			<br class="clear" />
			<hr class="line_style" />
				<?php for ($i=1; $i < 4; $i++) { ?>
					<div id="fun_fact<?php echo $i; ?>">
						<img src="<?php echo base_url('dummy_img/madonna.jpg'); ?>" />
						<div class="desc">
							<p>
								<img src="<?php echo base_url('assets/images/quote1.png'); ?>" class="quote1" /> 	<a href="<?php echo base_url(); ?>#!article/fun_facts" id="article_fun_facts" onclick="load_content('#article_fun_facts');"><h4>madonna</h4></a>
								When Madonna was 15 years old, she got grounded for the whole summer, for sneaking out to see David Bowie in concert.
							</p>
							<img src="<?php echo base_url('assets/images/quote2.png'); ?>" class="quote2" />
						</div>
					</div>
				<?php }?>
			<div class="clear"></div>
		</div>
	</div>
	<br class="clear" />
</div>

<div class="clear"></div>