<header>
	<h1 class="mainHeading">xBoilerplate</h1>
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<?php
		echo $this->getMenu('top');
		echo $this->getMenu();
	?>
</header>
<section>
	<?php echo $this->loadPage(); ?>
</section>
<footer>
	&copy; xBoilerplate &nbsp; <a href="/humans.txt">Humans</a>
</footer>
