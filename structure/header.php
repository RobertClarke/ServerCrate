<?php

// Set default variables.
$p = [
	'id'		=>	!empty($page['id']) ? $page['id']				: '',
	'title'		=>	!empty($page['title']) ? $page['title']			: 'High Performance Hosting',
	'seo_desc'	=>	!empty($page['seo_desc']) ? $page['seo_desc']	: 'ServerCrate is a hosting business providing web, vps, and dedicated server hosting based in Seattle.',
	'seo_tags'	=>	!empty($page['seo_tags']) ? $page['seo_tags']	: 'server hosting, server hosting seattle, game hosting, game servers',
	'cta_title'	=>	!empty($page['cta_title']) ? $page['cta_title']	: 'Powerful &amp; Reliable Hosting',
	'cta_desc'	=>	!empty($page['cta_desc']) ? $page['cta_desc']	: 'Incredible power at affordable pricing.'
];

?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php if ( !empty($p['title']) ) echo $p['title'].' | '; ?>ServerCrate</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="./assets/css/main.css" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700%7COpen+Sans:700,300,600,400" type="text/css">
		<link rel="shortcut icon" href="favicon.png">
		<meta name="description" content="<?php echo $p['seo_desc']; ?>">
		<meta name="keywords" content="<?php echo $p['seo_tags']; ?>">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-8521263-19', 'auto');
	  ga('send', 'pageview');

	</script>

	</head>
	<body<?php if ( !empty($p['id']) ) echo ' id="'.$p['id'].'"'; ?>>
		
		<header id="head">
			<div class="wrapper">
				<section class="top">
					<a href="/"><div class="logo">ServerCrate</div></a>
					<nav>
						<ul class="responsive">
							<li><a href="#menu"><i class="icn-menu"></i></a></li>
						</ul>
						<ul class="nav">
							<li><a href="/web-hosting">Shared</a></li>
							<li><a href="/vps">VPS</a></li>
							<li><a href="/dedicated">Dedicated</a></li>
							<li><a href="/company">Company</a></li>
							<li><a href="/contact">Contact us</a></li>
							<li class="login"><a href="https://billing.servercrate.com/clientarea.php" class="bttn mini"><i class="icn-key2"></i> Login</a></li>
						</ul>
					</nav>
				</section>
				<div class="separator"></div>
				<section class="page-title">
					<div class="title">
						<h1 class="animated fadeIn"><?php echo $p['cta_title']; ?></h1>
						<h2 class="animated fadeIn"><?php echo $p['cta_desc']; ?></h2>
					</div>
				</section>
			</div>
		</header>
