			<!-- boca es lo mejor papá!!! -->
			<object>
				<param name="movie" value="">
				<video <?php if ($detect->isMobile()) { echo 'class="player_content_mobile"'; } else { echo 'class="player_content_desktop"'; }; ?> controls>
  				<source src="<?php echo $url; ?>" type="video/<?php if(isset($file_ext['extension'])) { echo $file_ext['extension']; } else { echo $video_type; }; ?>">
  					<p>Your browser does not support the video tag.</p>
				</video>
			</object>
