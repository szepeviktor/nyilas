<!DOCTYPE html>
<html>
<head>
	<title>Nyilas Fogadó</title>

	<meta charset='utf-8'>
	<meta http-equiv="Content-Language" content="hu">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">
	<meta name="email" content="">
	<meta name="Rating" content="General">
	<meta name="Distribution" content="Global">
	<meta name="Robots" content="INDEX,FOLLOW">
	<meta name="Revisit-after" content="1 Week">
	<link rel="shortcut icon" href="">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/slidebars.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slidebars.js"></script>

<!--	<script>
		$(document).ready(function () {
			var sectionBox = $('.section-box-content > .section-box-btn');
		});
	</script>-->

	<script>
		(function($) {
			$(document).ready(function() {
				$.slidebars();
			});
		}) (jQuery);
	</script>

	<script>
		$(document).ready(function () {
			var holder = $('.anim-helper');

			$('.gallery-list-holder').click(function() {
				holder.animate({'margin-top': '-225px'}, 100);
				$(this).find('.anim-helper').animate({'margin-top': '0px'}, 600);
			});
		});

		$(window).scroll(function(e){
			parallax();
		});
		function parallax(){
			var scrolled = $(window).scrollTop();
			$('.bg').css('top',-(scrolled*0.2)+'px');
		}
	</script>



</head>
<body>

<?php echo ('<div id="sb-site">'); ?>

<?php
$input = array(	"http://badsentinel.com/wp-content/uploads/2013/04/Summer-Girls-20.jpg",
				"http://cdn.rsvlts.com/wp-content/uploads/2013/01/Summer-girls-28.jpg",
				"http://24.media.tumblr.com/tumblr_m5nzxyR2ho1qlz8xe_1339773623_cover.jpg",
				"http://www.myproana.com/uploads/gallery/album_1568/gallery_16635_1568_72264.jpeg",
				"http://cdn.playbuzz.com/cdn/50d21e9c-0a91-4b1f-a5de-125bfcea8812/624aa1e6-ea2b-4d39-825c-f39c85634eb3.jpg",
				"http://aces.gr/wp-content/uploads/2013/07/summer-girls-29.jpg",
				"http://cdn.rsvlts.com/wp-content/uploads/2013/03/Girls-of-Summer-114.jpg",
				"http://47a9dn1zggos9jx0s3ohby6yh8.wpengine.netdna-cdn.com/wp-content/uploads/2014/02/sexy-summer-girls-random-pics-part4-16.jpg",
				"http://www.isysportal.com/images/photoalbum/photoalbum9/Isys-Beach-Girls-1-frg235.jpg",
				"http://images1.laweekly.com/imager/top-five-girls-from-hard-summer-who-are-ou/u/original/4250762/hardsummerfive.jpg",
				"http://badsentinel.com/wp-content/uploads/2013/04/Summer-Girls-42.jpg",
				"http://badsentinel.com/wp-content/uploads/2013/04/Summer-Girls-21.jpg");
?>