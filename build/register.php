<?php include('perch/runtime.php');?>
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
	<script src="assets/javascript/jquery-1.10.2.js"></script>
  <script src="assets/javascript/jquery-ui-1.10.4.custom.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('#header .nav ul');
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
	</script>
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51592100-1', 'cliffandevans.com');
    ga('send', 'pageview');

  </script>
	</head>
	<body class="contact">
<div id="wrapper">
    <div id="header">
    <?php perch_content('header-content'); ?>
  </div>
    <div id="content-area">
    <div class="left-form">
      <h1>Register With Us</h1>
      <?php perch_content('register-form'); ?>
    </div>
    <div class="clear"></div>
    </div>
  </div>
  <div id="footer">
      <?php perch_content('footer-content'); ?>
  </div>
  </body>
  </html>
