<?php header($error['header']); ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ProxyCrate - <?php echo $error['title']; ?></title>
		<link href="./assets/css/main.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
		<link rel="shortcut icon" href="/favicon.png">
	</head>
	<body>
		<header id="header-main">
			<div class="wrapper">
				<div class="top">
					<a href="/" class="logo">ProxyCrate</a>
					<nav id="nav-main">
						<div class="mobile-toggle"><span></span></div>
						<ul>
							<li><a href="/#contact">Contact Us</a></li>
							<li><a href="/billing">Billing</a></li>
						</ul>
					</nav>
				</div>
				<section id="cta">
					<h1><?php echo $error['h1']; ?></h1>
					<h2><?php echo $error['h2']; ?></h2>
					<a href="/" class="button">Back to Homepage</a>
				</section>
			</div>
		</header>
		<footer id="footer-main">
			<div class="wrapper">
				<div class="left">
					<a href="/" class="logo dark">ProxyCrate</a>
					<p class="parent-company"><a href="https://servercrate.com" target="_blank">A ServerCrate company.</a></p>
				</div>
				<div class="right">
					<p class="big">Questions? Get in touch</p>
					<p class="email"><a href="mailto:support@proxycrate.com">support@proxycrate.com</a></p>
				</div>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="./assets/js/main.js"></script>
	</body>
</html>