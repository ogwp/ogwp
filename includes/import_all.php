<?php
function geturl()
{
	$url_step_one = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url_step_two = str_replace("&", "&amp;", $url_step_one);
	return $url_step_two;
}
include "libs/Mobile_Detect/Mobile_Detect.php"; // Mobile Detect
$detect = new Mobile_Detect;
?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Comapatible" content="id=edge">
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!-- Javascript -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0" nonce="rMnRjKTN"></script>
		<noscript>
			<h1>Hey!</h1>
			<h2>We think you have JavaScript unable, this webpage needs JavaScript for the comment section and for the Mobile UI, please unable it.</h2>
			<h3>--OGWP Developers</h3>
		</noscript>
		<!-- etc -->
		<link rel="icon" href="https://raw.githubusercontent.com/ogwp/media-libs/master/icons/logo.ico">
