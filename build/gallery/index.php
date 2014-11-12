<?php include('../perch/runtime.php'); ?>
<?php
  $bg = array('blur-1.png', 'blur-2.png', 'blur-3.png', 'blur-4.png', 'blur-5.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  
  function imgForSection($region) {
    $DB = PerchDB::fetch();
    $id = $region['pageID'];
    $img = $DB->get_row("select regionHtml from perch2_content_regions where regionKey = 'detail-slide' and pageID = '$id'");
    
    $matches = array();
    preg_match('/\/perch\/resources\/.*.jpg/', $img['regionHtml'], $matches);
    return $matches[0];
  }
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
    background: #ffffff url(../assets/images/blur-bg/<?php echo $selectedBg; ?>) no-repeat;
  }
  -->
  </style>
	<link href="../assets/css/reset.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/main.css" rel="stylesheet" type="text/css">
	<?php perch_get_css(); ?>
	<link rel="stylesheet" type="text/css" href="gallery.css" />
	<link rel="stylesheet" type="text/css" href="colorbox.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script src="../assets/javascript/jquery-1.10.2.js"></script>
	<script src="../assets/javascript/jquery-ui-1.10.4.custom.js"></script>
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
  	
	</script>

</head>
<body>
<div id="wrapper">
  <div id="header">
  <?php perch_content('header-content'); ?>
  </div>
  <div id="content-area">
    <div class="details-header">
      <h2>All Projects</h2>

      <ul class="albumdisplay glist">
      		    <?php 
      		        perch_gallery_albums(array(
      		            'template'=>'c_album-image.html',
      		            'image'=>true
      		        )); 
      		    ?>
      		    </ul>    </div>
   <div class="clear"></div>
  </div>
</div>
<div id="footer">
    <?php perch_content('footer-content'); ?>
</div>

<?php perch_get_javascript(); ?>
</body>
</html>
