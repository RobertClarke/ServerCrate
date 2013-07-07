		<div id="header">
			<div class="container">
				<a href="http://roberthost.com"><div class="logo">Robert<span class="orange">Host</span></div></a>
				<ul id="nav">
					<li <?php
			if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';
			?>><a href="index.php">home</a></li>
					<li <?php
			if (strpos($_SERVER['PHP_SELF'], 'web-hosting.php')) echo 'class="active"';
			?>><a href="web-hosting.php">web hosting</a></li>
					<li <?php
			if (strpos($_SERVER['PHP_SELF'], 'vps.php')) echo 'class="active"';
			?>><a href="vps.php">vps hosting</a></li>
					<li><a href="http://roberthost.com/billing/clientarea.php">portal</a></li>
					<li <?php
			if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"';
			?>><a href="about.php">about</a></li>
				</ul>
				<a href="http://roberthost.com/billing/clientarea.php"><div id="login">Client Login</div></a>
			</div>
		</div>
