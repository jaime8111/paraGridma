<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- if you want let your user zoom in & out the use this one
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		-->

	<title>ParaGRIDma v3</title>
	<link rel="shortcut icon" href="img/favicon.ico" />

	<!--
    ADDONS:
    only include it if you need it
    -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- end of addons -->

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="css/paragridma.css" />
	<link rel="stylesheet" href="css/demo.css" />

    <script src="js/vendor/head.load.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script>
		console.time("window.load time"); // to evaluate render page time. End is in paragridma.js window.load
	</script>
	<?php
	// because new Internet Explorer develop tools don't proccess conditional comments
	$conditionalComments = '';
	if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 8.0') !== false) {
		$conditionalComments .= '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
		$conditionalComments .= '<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
	}

	echo $conditionalComments;
	?>

	<!--[if lte IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="css/ie7.css">
	<![endif]-->





    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12371131-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    </script>

</head>
<body>

