<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="fragment" content="!">
	<title>Bold n Loud</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset-min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="screen" />
	<link href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/slider.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/coverflow.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/tango/skin.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/orbit-1.2.3.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> 
	<link href="<?php echo base_url(); ?>assets/css/jquery.jcarousel.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.idTabs.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slides.min.jquery.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backtotop.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.orbit-1.2.3.js"></script>	
	<script>
		var site_url = '<?php echo site_url(); ?>';
		var url_length = site_url.length;
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>	
        
        
        <link href="assets/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/themes/jquery.ui.slider.css">
<script type="text/javascript" src="assets/js/jquery.jplayer.js"></script>
<script type="text/javascript" src="assets/js/jplayer.playlist.js"></script>
<script src="assets/js/jquery.ui.core.js"></script>
<script src="assets/js/jquery.ui.widget.js"></script>
<script src="assets/js/jquery.ui.mouse.js"></script>
<script src="assets/js/jquery.ui.slider.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	$(".empat, .lima").css({"background":"rgba(0,0,0,.2)"});
	var ignore_timeupdate;
	var mypl;
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			artist:"Cristina Perri",
			title:"Bluebird",
			oga:"data/song/01-christina_perri-bluebird.ogg"
		},
		{
			artist:"Cristina Perri",
			title:"Arms",
			oga:"data/song/02-christina_perri-arms.ogg"
		},
		{
			artist:"Cristina Perri",
			title:"Bang Bang Bang",
			oga:"data/song/03-christina_perri-bang_bang_bang.ogg"
		},
		{
			artist:"Cristina Perri",
			title:"Distance",
			oga:"data/song/04-christina_perri-distance.ogg"
		},
	], {
		playlistOptions: {
		    autoPlay: false,
		    enableRemoveControls: true
		  },
		timeupdate: function(event) {
				if(!ignore_timeupdate) {
					myControl.progress.slider("value", event.jPlayer.status.currentPercentAbsolute);
				} 
		},
		swfPath: "js",
		volume: 0.6,
		supplied: "oga, mp3",
		wmode: "window"
	},
	myControl = {
			progress: $(".sliderSeek")
		});

	// $('#sliderVolume').slider({
	//     value : 50,
	//     max: 100,
	//     range: 'min',
	//     animate: true,
	//     orientation: "horizontal",

	//     slide: function(event, ui) {
	//         var volume = ui.value / 100;
	//         $("#jquery_jplayer_1").jPlayer("volume", volume);
	//     }
	// });
	myControl.progress.slider({
		animate: "fast",
		max: 100,
		range: "min",
		step: 0.1,
		value : 0,
	    slide: function(event, ui) { 
	        var percent = ui.value * (100/100);
	        $("#jquery_jplayer_1").jPlayer("playHead", percent);
	    }
	});

	$('.satu').click(function(){
		$("#jquery_jplayer_1").jPlayer("volume", 0.20);
		$("#jp_volume_bar a").css({"background":"rgba(0,0,0,.2)"});
		$(".satu").css({"background":"rgba(0,0,0,.6)"});
		//console.log("string"); 
		return false;
	});
	$('.dua').click(function(){
		$("#jquery_jplayer_1").jPlayer("volume", 0.40);
		$("#jp_volume_bar a").css({"background":"rgba(0,0,0,.2)"});
		$(".satu, .dua").css({"background":"rgba(0,0,0,.6)"});
		//console.log("string"); 
		return false;
	});	

	$('.tiga').click(function(){
		$("#jquery_jplayer_1").jPlayer("volume", 0.60);
		$("#jp_volume_bar a").css({"background":"rgba(0,0,0,.2)"});
		$(".satu, .dua, .tiga").css({"background":"rgba(0,0,0,.6)"});
		//console.log("string"); 
		return false;
	});	

	$('.empat').click(function(){
		$("#jquery_jplayer_1").jPlayer("volume", 0.80);
		$("#jp_volume_bar a").css({"background":"rgba(0,0,0,.2)"});
		$(".satu, .dua, .tiga, .empat").css({"background":"rgba(0,0,0,.6)"});
		//console.log("string"); 
		return false;
	});	

	$('.lima').click(function(){
		$("#jquery_jplayer_1").jPlayer("volume", 1);
		$("#jp_volume_bar a").css({"background":"rgba(0,0,0,.2)"});
		$(".satu, .dua, .tiga, .empat, .lima").css({"background":"rgba(0,0,0,.6)"});
		//console.log("string"); 
		return false;
	});
});



//]]>
</script>
        
        
	</head>

	<body>
		<div id="wrapper">
			<!-- header -->
			<div id="header">
				<div class="container">
					<div class="notif">10</div>
					<a href="<?php echo base_url(); ?>#!home" id="home" onclick="load_content('#home');"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo" /></a>
					<div id="main_menu" class="main_menu">
						<a href="<?php echo site_url(); ?>">PLAYLIST</a><span class="dots">&bull;</span>
						<a href="<?php echo site_url(); ?>">TIMELINE</a><span class="dots">&bull;</span>
						<a href="<?php echo base_url(); ?>#!article" id="article_link">ARTICLES</a><span class="dots">&bull;</span>
						<a href="<?php echo base_url(); ?>#!gallery/all" id="gallery_link">GALLERIES</a><span class="dots">&bull;</span>
						<a href="<?php echo base_url(); ?>#!event" id="event_link">EVENTS CALENDAR</a>
					</div>
					<div class="login">
						<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/search_icon.png" class="search" /></a>
						<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/login_btn.png"/></a>
					</div>
				</div>
			</div>
			<div id="player">
				<div class="container">
                                    
                                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio_top_player">
			<!-- <div class="jp-type-playlist"> -->
				<div class="jp-gui jp-interface">
					<div class="sliderSeek"></div>
					<div id="jp_volume_bar">
						<a href="#" class="satu"></a>
						<a href="#" class="dua"></a>
						<a href="#" class="tiga" onclick='$("#jquery_jplayer_1").jPlayer("volume", 0.60);'></a>
						<a href="#" class="empat" onclick='$("#jquery_jplayer_1").jPlayer("volume", 0.80);'></a>
						<a href="#" class="lima" onclick='$("#jquery_jplayer_1").jPlayer("volume", 1);'></a>
					</div>
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>						
					</ul>
					<div class="jp-playlist" style="display:none;">
						<ul>
							<li></li>
						</ul>
					</div>
					<div style="width:334px; height: 42px;float:left;"></div>
					<span class="jp_current_track_title"></span>
				</div>
				
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		<!-- </div> -->
                                    
                                </div>
			</div>
			<!-- end of header -->
			<!-- content -->
			<div id="middle">
				<div id="page_content">