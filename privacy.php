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
		<div style="float: center; border: outset;">
			<h3>Data collection</h3>
			<p>For out part we do not collect any data for you.</p>
			<h3>3rd partys</h3>
			<p>We don't recolect your data, but our 3 partys yes. We are not responsable if our hosters, API providers, or Discord collect data. But, we’re puting the links of their policys right here:</p>
			<li><b><a href="https://developers.facebook.com/terms/">Facebook Plataform Conditions</a></b></li>
		</div>
		<div style="display: block;">
<?php include "includes/footer.html"; ?>

		</div>
	</body>
</html>
