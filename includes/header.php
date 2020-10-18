		<header>
			<?php if ($detect->isMobile()) { ?>
			<nav class="navbar navbar-light" style="background: #e7e7ff; font-family: Roboto;">
			<?php }; ?>
			<a class="navbar-brand" href="index.php">
				<img src="https://raw.githubusercontent.com/ogwp/media-libs/master/imgs/logo.png" width="50" height="50" alt="" loading="lazy">
			</a>
			<?php if ($detect->isMobile()) { ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
			<?php }; ?>
			<ul<?php if ($detect -> isMobile()) { ?> class="navbar-nav mr-auto"<?php }; ?>>
				<li class="nav-item">
					<a <?php if ($detect -> isMobile()) { ?> class="nav-link"<?php }; ?> href="#">Player</a>
				</li>
				<li class="nav-item">
					<a <?php if ($detect -> isMobile()) { ?> class="nav-link"<?php }; ?> href="privacy.php">Privacy</a>
				</li>
				<li class="nav-item">
					<a<?php if ($detect -> isMobile()) { ?> class="nav-link"<?php }; ?> href="#">Pricing</a>
				</li>
			</ul>
			<?php if ($detect->isMobile()) { ?>
				</div>
			<?php }; ?>
		</header>
