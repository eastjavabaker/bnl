<script type="text/javascript">

	function load_jquery(){
		$('#playlist_list').jcarousel({
			scroll			: 1,
			visible			: 1,
			animation		: 'fast',
			itemFallbackDimension: 300,
			buttonNextHTML	: "<div id='next' class='arrow_next_playlist'></div>",
			buttonPrevHTML	: "<div id='prev' class='arrow_prev_playlist'></div>",
		    });		    
		$('#mostpopular_list').jcarousel({
			scroll			: 1,
			visible			: 1,
			animation		: 'fast',
			itemFallbackDimension: 300,
			buttonNextHTML	: "<div id='next' class='arrow_next_mostpopular'></div>",
			buttonPrevHTML	: "<div id='prev' class='arrow_prev_mostpopular'></div>",
		    });		    

		$('#twiit_list').jcarousel({
			scroll			: 1,
			visible			: 1,
			animation		: 'fast',
			itemFallbackDimension: 300,
			buttonNextHTML	: "<div id='next' class='arrow_next_playlist' style='margin-top:7px;'></div>",
			buttonPrevHTML	: "<div id='prev' class='arrow_prev_playlist' style='margin-top:7px;margin-left:102px;'></div>",
		    });

		$("#tab_rec").idTabs(function(id,list,set){ 
		   $("a",set).removeClass("active") 
		   .filter("[href='"+id+"']",set).addClass("active"); 
		   for(i in list) 
		     $(list[i]).hide(); 
		   $(id).fadeIn('slow'); 
		   return false; 
		}); 

		$("#tab_sc").idTabs(function(id,list,set){ 
		   $("a",set).removeClass("active") 
		   .filter("[href='"+id+"']",set).addClass("active"); 
		   for(i in list) 
		     $(list[i]).hide(); 
		   $(id).fadeIn('slow'); 
		   return false; 
		}); 

		$('.fancybox').fancybox();

		var startSlide = 1;
		// if (window.location.hash) {
		// 	startSlide = window.location.hash.replace('#','');
		// }
			// Initialize Slides
		$('#slidesa').slides({
			preload: true,
			preloadImage: '<?php echo base_url(); ?>assets/images/loading.gif',
			generatePagination: true,
			play: 3000,
			pause: 2000,
			hoverPause: true,
			start: startSlide,
		});			

		$('#gal_slide').slides({
			preload: true,
			preloadImage: '<?php echo base_url(); ?>assets/images/loading.gif',
			generatePagination: true,
			play: 0,
			pause: 2000,
			hoverPause: true,
			start: startSlide,
		});

		$('#back_to_top').backToTop();
	}
</script>
<!-- banner -->
<div class="banner">
	<a href="javascript:;" onclick="coverflow().prev();"><div class="arrow_prev"></div></a>
	<div id="coverf"></div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/coverflow.js" ></script>
	<script>
		function reset() {
			var replacement = document.createElement('div');
			replacement.id = "coverf";

			var el = document.getElementById('coverf');
			el.parentNode.replaceChild(replacement, el);
			
			//$('#container').coverflow({
			coverflow('coverf').setup({
				item: 7,
				//mode: "flash",
				//backgroundcolor: '009900',
				//backgroundopacity: 0,
				//wmode: 'transparent',
				//gradientcolor: 'ff0000',
				//showduration: true,
				//playlist: "playlist.json",
				//playlist: "http://api.flickr.com/services/feeds/groups_pool.gne?id=807213@N20&format=json&jsoncallback=?",
				//route: {
				// 	playlist: "items",
				// 	image: "media.m"
				//},
				playlist: "<?php echo base_url('data/playlist'); ?>/playlist.json",
				coverwidth: 182,
				coverheight: 187,
				fixedsize: true,
				textoffset: 50
			})
			.on('ready', function() {

				this.on('focus', function(index) {
					// document.getElementById('focusindex').innerHTML = index;
					// console.log("ganti");
				});
								
				this.on('click', function(index, link) {
									// document.getElementById('clickindex').innerHTML = index;
									
				});
			});
		}

		reset();
	</script>
	<a href="javascript:;" onclick="coverflow().next();"><div class="arrow_next"></div></a>
</div><!-- end of banner -->

<div class="container" style="background:none!important;">
	<!-- left side -->
	<div class="side_home_left">
		<div class="home_playlist">
			<div class="top">
				PLAYLIST<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/search_icon.png" style="float:right;margin-top: -5px;" /></a>
			</div>
			<div class="pl_content">
				<ul id="playlist_list" class="jcarousel-container">
					<li>
						<div class="list_pl">
							<div class="list_item ganjil">
								<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
								<div class="text">
									<span class="artist">The Cardigan</span></br>
									<span class="song_title">I Need Some Fine Wine</span>
								</div>
							</div>
							<div class="list_item genap">
							<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
								<div class="text">
									<span class="artist">Thedyingsirens</span></br>
									<span class="song_title">Levely Eyes</span>
								</div>
							</div>
							<div class="list_item ganjil">
							<img src="<?php echo base_url('data/playlist'); ?>/3.jpg" />
								<div class="text">
									<span class="artist">Pure Saturday</span></br>
									<span class="song_title">Spoken</span>
								</div>
							</div>
							<div class="list_item genap">
							<img src="<?php echo base_url('data/playlist'); ?>/4.jpg" />
								<div class="text">
									<span class="artist">The Strokes</span></br>
									<span class="song_title">Is This It</span>
								</div>
							</div>
							<div class="list_item ganjil">
							<img src="<?php echo base_url('data/playlist'); ?>/5.jpg" />
								<div class="text">
									<span class="artist">Suede</span></br>
									<span class="song_title">Picnic By The Motorway</span>
								</div>
							</div>
							<div class="list_item genap">
							<img src="<?php echo base_url('data/playlist'); ?>/6.jpg" />
								<div class="text">
									<span class="artist">The Cardigan</span></br>
									<span class="song_title">I Need Some Fine Wine</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="list_pl">
							<div class="list_item ganjil">
								<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
								<div class="text">
									<span class="artist">The Cardigan</span></br>
									<span class="song_title">I Need Some Fine Wine</span>
								</div>
							</div>
							<div class="list_item genap">
							<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
								<div class="text">
									<span class="artist">Thedyingsirens</span></br>
									<span class="song_title">Levely Eyes</span>
								</div>
							</div>
							<div class="list_item ganjil">
							<img src="<?php echo base_url('data/playlist'); ?>/3.jpg" />
								<div class="text">
									<span class="artist">Pure Saturday</span></br>
									<span class="song_title">Spoken</span>
								</div>
							</div>
							<div class="list_item genap">
							<img src="<?php echo base_url('data/playlist'); ?>/4.jpg" />
								<div class="text">
									<span class="artist">The Strokes</span></br>
									<span class="song_title">Is This It</span>
								</div>
							</div>
							<div class="list_item ganjil">
							<img src="<?php echo base_url('data/playlist'); ?>/5.jpg" />
								<div class="text">
									<span class="artist">Suede</span></br>
									<span class="song_title">Picnic By The Motorway</span>
								</div>
							</div>
							<div class="list_item genap">
							<img src="<?php echo base_url('data/playlist'); ?>/6.jpg" />
								<div class="text">
									<span class="artist">The Cardigan</span></br>
									<span class="song_title">I Need Some Fine Wine</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="home_recomended">
			<div class="top">
				<div style="float:left">RECOMMENDATION</div>
				<ul id="tab_rec">
					<li><a href="#rec1"  class="active"></a></li>
					<li><a href="#rec2"></a></li>
					<li><a href="#rec3"></a></li>
				</ul>
			</div>
			<div class="list_rec" id="rec1">
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/7.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/8.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/9.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/10.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/11.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
			</div>
			<div class="list_rec" id="rec2">
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/7.jpg" />
					<div class="text">
						<span class="artist">The Cardigan rec 2</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/8.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/9.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/10.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/11.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
			</div>
			<div class="list_rec" id="rec3">
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/7.jpg" />
					<div class="text">
						<span class="artist">The Cardigan rec 3</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/8.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/9.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/10.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/11.jpg" />
					<div class="text">
						<span class="artist">The Cardigan</span></br>
						<span class="song_title">I Need Some Fine Wine</span>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<!-- end of left side -->
	<!-- senter side -->
	<div class="content_home_center">
		<img src="<?php echo base_url(); ?>assets/images/timeline_home_title.png" style="margin-left: -1px;" />
		<div class="home_timeline">
			<div class="top_avatar">
				<img src="<?php echo base_url(); ?>assets/images/pp1.png" class="avatar av_left" />
				<img src="<?php echo base_url(); ?>assets/images/icon/friend.png" class="avatar av_right" />
			</div>
			<div class="list">
				<div class="list_timeline tl_first">
					<div class="arrow_left" style="top:10px;"></div>
					<div class="tl_emoticon">
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/love.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/happy.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/nocomment.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/sad.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/angry.png" /></a>									
					</div>
					<div class="top"></div>
					<div class="content">
						<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" class="albums_img" />
						<div class="plyr">
							<span class="song_artist">The Cardigans</span><br class="clear" />
							<span class="song_title">I Need Some Fine Wine And You</span><br class="clear" />
							<div class="song_player"><img src="<?php echo base_url(); ?>assets/images/player.png" /></div><br class="clear" />
							<a href="#" class="btn">Stories</a>
							<a href="#" class="btn">12 comments</a>
							<a href="#" class="share"><img src="<?php echo base_url(); ?>assets/images/icon/share.png" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bottom"></div>
				</div>
			</div>						
			<div class="list">
				<div class="list_timeline tl_right">
					<div class="tl_emoticon">
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/love.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/happy.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/nocomment.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/sad.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/angry.png" /></a>									
					</div>
					<div class="arrow_right"></div>
					<div class="top"></div>
					<div class="content">
						<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" class="albums_img" />
						<div class="plyr">
							<span class="song_artist">The Cardigans</span><br class="clear" />
							<span class="song_title">I Need Some Fine Wine And You</span><br class="clear" />
							<div class="song_player"><img src="<?php echo base_url(); ?>assets/images/player.png" /></div><br class="clear" />
							<a href="#" class="share"><img src="<?php echo base_url(); ?>assets/images/icon/share.png" /></a>
						</div>
						<div class="clear"></div>
						<div class="tl_comment">
							<img src="<?php echo base_url(); ?>assets/images/icon/reply.png" class="icon" />
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim commodo consequat.</p>
							<div class="list_c">
								<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
								<div class="text_c">
									<span class="user_name">Eddo Wallad</span><span class="said"> Said:</span><br/>
									<span class="komen">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, volutpa sue epat moe lor sue ipsum.</span><br/>
									<span class="date_komen">5 Days ago</span><br class="clear"/>
								</div>
								<br class="clear"/>
							</div>
							<div class="list_c">
								<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
								<div class="text_c">
									<span class="user_name">Eddo Wallad</span><span class="said"> Said:</span><br/>
									<span class="komen">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, volutpa sue epat moe lor sue ipsum.</span><br/>
									<span class="date_komen">5 Days ago</span><br class="clear"/>
								</div>
								<br class="clear"/>
							</div>
							<div class="list_c">
								<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
								<div class="text_c">
									<span class="user_name">Eddo Wallad</span><span class="said"> Said:</span><br/>
									<span class="komen">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, volutpa sue epat moe lor sue ipsum.</span><br/>
									<span class="date_komen">5 Days ago</span><br class="clear"/>
								</div>
								<br class="clear"/>
							</div>
							<form method="" action="" class="post_komen">
								<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
								<input type="text" placeholder="Leave your comment here." class="input_txt" />
								<input type="image" src="<?php echo base_url(); ?>assets/images/send_btn.jpg" />
							</form>
							<br class="clear"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bottom"></div>
				</div>	
				<img src="<?php echo base_url(); ?>assets/images/pp2.png" class="avatar av_right" />
			</div>
			<div class="list">
				<div class="list_timeline tl_right">
					<div class="tl_emoticon">
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/love.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/happy.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/nocomment.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/sad.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/angry.png" /></a>									
					</div>
					<div class="top"></div>
					<div class="content">
						<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" class="albums_img" />
						<div class="plyr">
							<span class="song_artist">The Cardigans</span><br class="clear" />
							<span class="song_title">I Need Some Fine Wine And You</span><br class="clear" />
							<div class="song_player"><img src="<?php echo base_url(); ?>assets/images/player.png" /></div><br class="clear" />
							<a href="#" class="btn">Stories</a>
							<a href="#" class="btn">12 comments</a>
							<a href="#" class="share"><img src="<?php echo base_url(); ?>assets/images/icon/share.png" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bottom"></div>
				</div>
			</div>
			<div class="list">
				<div class="list_timeline tl_right">
					<div class="arrow_right"></div>
					<div class="tl_emoticon">
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/love.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/happy.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/nocomment.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/sad.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/angry.png" /></a>									
					</div>
					<div class="top"></div>
					<div class="content">
						<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" class="albums_img" />
						<div class="plyr">
							<span class="song_artist">The Cardigans</span><br class="clear" />
							<span class="song_title">I Need Some Fine Wine And You</span><br class="clear" />
							<div class="song_player"><img src="<?php echo base_url(); ?>assets/images/player.png" /></div><br class="clear" />
							<a href="#" class="btn">Stories</a>
							<a href="#" class="btn">12 comments</a>
							<a href="#" class="share"><img src="<?php echo base_url(); ?>assets/images/icon/share.png" /></a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bottom"></div>
				</div>	
				<img src="<?php echo base_url(); ?>assets/images/pp2.png" class="avatar av_right" />
			</div>
			<div class="list">
				<div class="list_timeline tl_right">
					<div class="arrow_right"></div>
					<div class="tl_emoticon">
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/love.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/happy.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/nocomment.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/sad.png" /></a>
						<a href=""><img src="<?php echo base_url(); ?>assets/images/icon/angry.png" /></a>									
					</div>
					<div class="top"></div>
					<div class="content">
						<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" class="albums_img" />
						<div class="plyr">
							<span class="song_artist">The Cardigans</span><br class="clear" />
							<span class="song_title">I Need Some Fine Wine And You</span><br class="clear" />
							<div class="song_player"><img src="<?php echo base_url(); ?>assets/images/player.png" /></div><br class="clear" />
							<a href="#" class="share"><img src="<?php echo base_url(); ?>assets/images/icon/share.png" /></a>
						</div>
						<div class="clear"></div>
						<div class="tl_comment">
							<img src="<?php echo base_url(); ?>assets/images/icon/reply.png" class="icon" />
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim commodo consequat.</p>
							<div class="list_c">
								<img src="<?php echo base_url(); ?>assets/images/pp1.png"  />
								<div class="text_c">
									<span class="user_name">Eddo Wallad</span><span class="said"> Said:</span><br/>
									<span class="komen">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, volutpa sue epat moe lor sue ipsum.</span><br/>
									<span class="date_komen">5 Days ago</span><br class="clear"/>
								</div>
								<br class="clear"/>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="bottom"></div>
				</div>	
				<img src="<?php echo base_url(); ?>assets/images/pp2.png" class="avatar av_right" />
			</div>
				<div class="clear">
			</div>
		</div>
	</div>
	<!-- end of center side -->
	<!-- right side -->
	<div class="side_home_right">
		<div class="hotnews">
			<div class="hn_top">hot news</div>
			<div class="hn_content">
				<div class="editorpick">
					<div class="ep_title">Editor's Pick</div>
					<div id="slidesa">
						<div class="slides_container">
							<div class="slide">
								<img src="<?php echo base_url('data'); ?>/1.jpg" class="ep_img" />
								<div class="desc">
									<span style="font-size:11px">Image Heading 1</span></br>
									<span style="font-size:10px">Image sub heading goes here 1</span>
								</div>
								<a class="fancybox" href="<?php echo base_url('data'); ?>/1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url(); ?>assets/images/icon/zoom.png" alt="" class="zoom" /></a>
							</div>
							<div class="slide">
								<img src="<?php echo base_url('data'); ?>/2.jpg" class="ep_img" />
								<div class="desc">
									<span style="font-size:11px">Image Heading 2</span></br>
									<span style="font-size:10px">Image sub heading goes here 2</span>
								</div>
								<a class="fancybox" href="<?php echo base_url('data'); ?>/2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url(); ?>assets/images/icon/zoom.png" alt="" class="zoom" /></a>
							</div>
							<div class="slide">
								<img src="<?php echo base_url('data'); ?>/3.jpg" class="ep_img" />
								<div class="desc">
									<span style="font-size:11px">Image Heading 3</span></br>
									<span style="font-size:10px">Image sub heading goes here 3</span>
								</div>
								<a class="fancybox" href="<?php echo base_url('data'); ?>/3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url(); ?>assets/images/icon/zoom.png" alt="" class="zoom" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="mostpopular">
					<div class="mp_content">
						<div class="mp_title">Most Popular</div>
						<ul id="mostpopular_list" class="jcarousel-container">
							<li>
								<div class="list_mp">
									<div class="list_item">
										<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
										<div class="text">
											<span class="mp_ti">The Cardigan</span></br>
											<span class="mp_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span>
										</div>
									</div>
									<div class="list_item">
									<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
										<div class="text">
											<span class="mp_ti">Thedyingsirens</span></br>
											<span class="mp_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="list_mp">
									<div class="list_item">
										<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
										<div class="text">
											<span class="mp_ti">The Cardigan</span></br>
											<span class="mp_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span>
										</div>
									</div>
									<div class="list_item">
									<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
										<div class="text">
											<span class="mp_ti">Thedyingsirens</span></br>
											<span class="mp_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="galeries">
			<div class="gal_top">Galleries</div>
			<div id="gal_slide">
				<div class="slides_container">
					<div class="slide">
						<img src="<?php echo base_url(); ?>assets/images/img1.jpg" />
						<a href=""><img src="<?php echo base_url(); ?>assets/images/img2.jpg" /></a>
						<img src="<?php echo base_url(); ?>assets/images/img3.jpg" />
					</div>								
					<div class="slide">
						<img src="<?php echo base_url(); ?>assets/images/img1.jpg" />
						<img src="<?php echo base_url(); ?>assets/images/img2.jpg" />
						<img src="<?php echo base_url(); ?>assets/images/img3.jpg" />
					</div>								
					<div class="slide">
						<img src="<?php echo base_url(); ?>assets/images/img1.jpg" />
						<img src="<?php echo base_url(); ?>assets/images/img2.jpg" />
						<img src="<?php echo base_url(); ?>assets/images/img3.jpg" />
					</div>								
				</div>
			</div>
		</div>					
		<div class="schedules">
			<div class="sce_top">
				<div style="float:left">schedules</div>
				<ul id="tab_sc">
					<li><a href="#sec1"  class="active"></a></li>
					<li><a href="#sec2"></a></li>
					<li><a href="#sec3"></a></li>
				</ul>
			</div>
			<div class="list_sc" id="sec1">
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/8.jpg" />
					<div class="text">
						<span class="sc_title">The Cardigan</span></br>
						<span class="sc_date">19 Sept 2013</span>
						<p>
							This neighborhood was home to tahe dot.com boom and boasts cutting-edge restaurants.
						</p>
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/7.jpg" />
					<div class="text">
						<span class="sc_title">The Cardigan</span></br>
						<span class="sc_date">19 Sept 2013</span>
						<p>
							This neighborhood was home to tahe dot.com boom and boasts cutting-edge restaurants.
						</p> 
					</div>
				</div>
			</div>
			<div class="list_sc" id="sec2">
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/12.jpg" />
					<div class="text">
						<span class="sc_title">The Cardigan</span></br>
						<span class="sc_date">19 Sept 2013</span>
						<p>
							This neighborhood was home to tahe dot.com boom and boasts cutting-edge restaurants.
						</p> 
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/11.jpg" />
					<div class="text">
						<span class="sc_title">The Cardigan</span></br>
						<span class="sc_date">19 Sept 2013</span>
						<p>
							This neighborhood was home to tahe dot.com boom and boasts cutting-edge restaurants.
						</p> 
					</div>
				</div>
			</div>						
			<div class="list_sc" id="sec3">
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/9.jpg" />
					<div class="text">
						<span class="sc_title">The Cardigan</span></br>
						<span class="sc_date">19 Sept 2013</span>
						<p>
							This neighborhood was home to tahe dot.com boom and boasts cutting-edge restaurants.
						</p> 
					</div>
				</div>
				<div class="list_item">
					<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
					<div class="text">
						<span class="sc_title">The Cardigan</span></br>
						<span class="sc_date">19 Sept 2013</span>
						<p>
							This neighborhood was home to tahe dot.com boom and boasts cutting-edge restaurants.
						</p> 
					</div>
				</div>
			</div>
		</div>
		<div class="twiit">
			<div class="tw_top">#BOLDNLOUD TIMELINE</div>
			<div class="tw_content">
				<ul id="twiit_list" class="jcarousel-container">
					<li>
						<div class="list_tw">
							<div class="list_item">
								<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
								<div class="text">
									<span class="tw_ti">@uga_mbreng</span></br>
									<span class="tw_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span></br>
									<span class="tw_date">Wednesday 26 December 2012</span>
								</div>
								<br class="clear" />
							</div>
							<div class="list_item">
							<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
								<div class="text">
									<span class="tw_ti">@uga_mbreng</span></br>
									<span class="tw_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span></br>
									<span class="tw_date">Wednesday 26 December 2012</span>
								</div>
							</div>
							<div class="list_item">
							<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
								<div class="text">
									<span class="tw_ti">@uga_mbreng</span></br>
									<span class="tw_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span></br>
									<span class="tw_date">Wednesday 26 December 2012</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="list_tw">
							<div class="list_item">
								<img src="<?php echo base_url('data/playlist'); ?>/1.jpg" />
								<div class="text">
									<span class="tw_ti">@uga_mbreng</span></br>
									<span class="tw_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span></br>
									<span class="tw_date">Wednesday 26 December 2012</span>
								</div>
							</div>
							<div class="list_item">
							<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
								<div class="text">
									<span class="tw_ti">@uga_mbreng</span></br>
									<span class="tw_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span></br>
									<span class="tw_date">Wednesday 26 December 2012</span>
								</div>
							</div>
							<div class="list_item">
							<img src="<?php echo base_url('data/playlist'); ?>/2.jpg" />
								<div class="text">
									<span class="tw_ti">@uga_mbreng</span></br>
									<span class="tw_desc">Lorem ipsum dolor sit amet, laoreet dolore magna aliquam erat volutpat.</span></br>
									<span class="tw_date">Wednesday 26 December 2012</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="clear"></div>
</div>
<!-- end of right side -->
		