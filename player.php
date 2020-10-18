<?php // include "db.php"; ?>
<!DOCTYPE html>
<html>
	<head>
<?php include "includes/import_all.php"; $file_ext = pathinfo($url); ?>
	</head>
	<body style="<?php if($detect->isMobile()) { ?>display: block; <?php } else { ?>display: inline-flex; <?php }; ?> font-family: Roboto;">
		<!-- Header -->
<?php include "includes/header.php"; ?>
		<!-- Player -->
		<div class="player">
<?php
if ($file_ext['extension'] == "swf") {
	include "includes/flash.php";
} elseif ($file_ext['extension'] == "html") {
	include "includes/html.php";
} elseif ($file_ext['extension'] == "htm") {
	include "includes/html.php";
} elseif ($file_ext['extension'] == "php") {
	include "includes/html.php";
} elseif ($file_ext['extension'] == "mp4") {
	include "includes/video.php";
} elseif ($file_ext['extension'] == "webm") {
	include "includes/video.php";
} elseif ($file_ext['extension'] == "mov") {
	include "includes/video.php";
} else {
	if ($content_type == "flash"){
		include "includes/flash.php";
	} elseif ($content_type == "html") {
		include "includes/html.php";
	} elseif ($content_type == "video") {
		include "includes/video.php";
	} else {
		echo '<p style="border-style: solid;">File type not detected</p>';
	};
};
?>

			<div class="down_player">
				<p style="border: outset;"><b><?php echo $name ?></b> by <a href="<?php echo $creator_url; ?>"><?php echo $creator; ?></a></p>
				<div style="border: outset;" class="fb-like" data-href="<?php echo geturl(); ?>" data-width="1" data-layout="box_count" data-action="like" data-size="small" data-share="false"></div>
			</div>
		</div>
		<div style="display: block; font-family: Roboto;">
			<div style="border: outset;">
				<h3>Info</h3>
				<p><b>License:</b> <?php
				if ($license=="") {
					echo "Unknown";
				} else {
					echo $license;
				}
				?></p>
				<p><b>Release date:</b> <?php
				if ($release_date=="") {
					echo "Unknown";
				} else {
					echo $release_date;
				}
				?></p>
				<p><b>Repository:</b> <?php
				if ($repository=="") {
					echo "It's not FOSS/Unknown";
				} else {
					echo '<a href="'.$repository.'">'.$repository.'</a>';
				}
				?></p>
			</div>
			<div style="border: outset;">
				<h3>Tags</h3>
				<div style="display: flex; border: outset;">
					<?php
					if ($tags=="") {
						echo "<p>No tags</p>";
					} else {
						$tags_final = str_replace(',', "</p>\n					".'<p style="border: groove;">', $tags);
						echo '<p style="border: groove;">'.$tags_final.'</p>';
					}
					?>

				</div>
			</div>
			<!-- Comments -->
			<div style="border: outset;" class="fb-comments" data-href="<?php echo geturl(); ?>" data-numposts="5" data-width=""></div>
			<!-- <div id="disqus_thread"></div>
			<script>
				var disqus_config = function () {
					this.page.url = "<?php echo geturl(); ?>";  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = "<?php echo $file_ext['filename']; ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://flg.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->
<?php include "includes/footer.html"; ?>

		</div>
		<!-- <script id="dsq-count-scr" src="//flg.disqus.com/count.js" async></script> -->
	</body>
</html>
