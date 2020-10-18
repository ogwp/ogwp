<!DOCTYPE html>
<html>
	<head>
<?php include "includes/import_all.php"; ?>
		<link rel="icon" href="https://raw.githubusercontent.com/ogwp/media-libs/master/icons/logo.ico">
		<title>Flash HTML5</title>
	</head>
	<body style="<?php if ($detect->isMobile()) { ?>display: block; <?php } else { ?>display: inline-flex; <?php }; ?> font-family: Roboto;">
<?php include "includes/header.php"; ?>

		<br />
		<div style="float: center; border: outset; text-align: center;">
			<h4>Programming</h4>
			<p><a href="https://lucas64.tk">Lucas</a></p>
			<h4>Thanks</h4>
			<p><a href="https://github.com/ruffle-rs">Ruffle Team</a></p>
			<p><a href="https://getbootstrap.com">Bootstrap Team</a></p>
			<p><a href="http://mobiledetect.net">Mobile Detect</a></p>
			<p>Internet</p>
		</div>
		<div style="display: block;">
<?php include "includes/footer.html"; ?>

		</div>
	</body>
</html>
