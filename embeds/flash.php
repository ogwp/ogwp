			<!-- boca es lo mejor papá!!! -->
			<?php
			if($file_ext['extension'] == "swf") {
				if(isset($_GET['ruffle'])){
					if($_GET['ruffle'] == "true") { ?>
			<script src="ruffle/ruffle.js"></script>
				<?php
					} elseif($_GET['ruffle'] == "false") {
					} else { ?>
			<script src="ruffle/ruffle.js"></script>
					<?php
					};
				} else { ?>
			<script src="ruffle/ruffle.js"></script>
			<?php }; ?>
			<?php } else { ?>
	  		<p style="text-align: center;">Ruffle do not support this flash file, we recommend to activate <a href="https://ruffle.rs">Ruffle browser extension</a> or use <a href="https://lightspark.github.io">Lightspark</a></p>
			<?php }; ?>
			<object>
				<param name="movie" value="">
				<embed <?php if ($detect->isMobile()) { echo 'class="player_content_mobile"'; } else { echo 'class="player_content_desktop"'; }; ?> src="<?php echo $url; ?>"></embed>
			</object>
			<div style="display: inline-flex;">
			<?php if($file_ext['extension'] == "swf") {
				if(isset($_GET['ruffle'])) {
					if($_GET['ruffle'] == "true") { ?>
				<p style="text-align: right;">Powered by <a href="https://ruffle.rs">Ruffle</a></p>
				<a href="?ruffle=false"><button>Disable Ruffle</button></a>
				<?php	} elseif($_GET['ruffle'] == "false") { ?>
				<a href="?ruffle=true"><button>Enable Ruffle</button></a>
			<?php
				};
			} else {
			?>
				<a href="?ruffle=false"><button>Disable Ruffle</button></a>
				<p style="text-align: right;">Powered by <a href="https://ruffle.rs">Ruffle</a>
			<?php
			};
		};
			?>
			</div>
