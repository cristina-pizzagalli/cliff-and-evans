<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php
  $bg = array('blur-1.png', 'blur-2.png', 'blur-3.png', 'blur-4.png', 'blur-5.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Cliff & Evans</title>
	<style type="text/css">
  <!--
  #wrapper {
    background: #ffffff url(assets/images/blur-bg/<?php echo $selectedBg; ?>) no-repeat;
  }
  -->
  </style>
	<link href="assets/css/reset.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/base/advanced-slider-base.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="assets/css/light-round/light-round.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="assets/css/responsive-slider.css" media="screen"/>
  
	<script src="assets/javascript/jquery-1.10.2.js"></script>
	<script src="assets/javascript/jquery-ui-1.10.4.custom.js"></script>
  <script type="text/javascript" src="assets/javascript/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="assets/javascript/jquery.advancedSlider.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('#header .nav ul.clearfix');
       menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
		jQuery(document).ready(function($){
  		$('#responsive-slider').advancedSlider({
        width: 910,
        height: 700,
        responsive: true,
        skin: 'light-round',
        shadow: false,
        effectType: 'fade',
        slideshow: true,
        pauseSlideshowOnHover: true,
        swipeThreshold: 30,
			   thumbnailLayers: 2,
        slideButtons: false,
        thumbnailType: 'scroller',
        thumbnailWidth: 140,
        thumbnailHeight: 80,
        thumbnailButtons: true,
        thumbnailSwipe: true,
        thumbnailScrollerResponsive: true,
        minimumVisibleThumbnails: 2,
        maximumVisibleThumbnails: 4,
        keyboardNavigation: true
  		});
  	});
  	
	</script>
</head>
<body>
<div id="wrapper">
  <div id="header">
  <?php perch_content('header-content'); ?>
  </div>
  <div id="content-area">
    <div class="details-header">
      <div class="breadcrumbs">
        <ul>
          <li class="root"><a href="project-index.html">Projects</a></li>
          <li><a href="project-index.html">Project Name Goes Here</a></li>
        </ul>
      </div>
      <h2><?php perch_content('project-name'); ?></h2>
      <p><?php perch_content('project-copy'); ?></p>
    </div>
    	<div class="advanced-slider" id="responsive-slider">
  		<div class="slides">
      <?php perch_gallery_album_listing(); ?>
  		</div>
  	</div>
  </div>
  <div class="clear"></div>
</div>
</div>
<div id="footer">
    <?php perch_content('footer-content'); ?>
</div>
</body>
</html>
