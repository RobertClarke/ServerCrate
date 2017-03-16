<?php

$page = [
	'id'		=>	'company',
	'title'		=>	'Our Company',
	'seo_desc'	=>	NULL,
	'seo_tags'	=>	NULL,
	'cta_title'	=>	"Company",
	'cta_desc'	=>	"Learn more about ServerCrate."
];

require_once('structure/header.php');

?>
		<div class="body">
			<div class="wrapper">
				<section class="cta">
					<p>Founded in 2012, ServerCrate strives to offer the best quality and service we can to our clients. Whether you’re hosting a small website or serve high volumes of traffic, we have a solution for you.</p>
				</section>
			</div>
		</div>

		<div class="body alt">
			<div class="wrapper">
				<section id="about">
					<article>
						<header><h3>Network</h3></header>
						<p>We believe that redundancy is key, and as such we have redundant fiber uplinks throughout our network infrastructure. All inter-rack communication is done over 10gbit SFP+ connections, backed by Enterprise class Juniper routing equipment.</p>
					</article>
					<article class="services">
						<header><h3>Services We Offer</h3></header>
						<p>Click on a service to learn more about it.</p>
						<section id="plans">
							<article>
								<header>
									<h2>VPS Hosting</h2>
									<p>Starting at $1.25</p>
								</header>
								<div class="details">
									<a href="/vps" class="bttn purple">Learn More</a>
								</div>
							</article>
							<article>
								<header>
									<h2>Dedicated Servers</h2>
									<p>Starting at $109</p>
								</header>
								<div class="details">
									<a href="/dedicated" class="bttn purple">Learn More</a>
								</div>
							</article>
							<article>
								<header>
									<h2>Web Hosting</h2>
									<p>Starting at $4.95</p>
								</header>
								<div class="details">
									<a href="/web-hosting" class="bttn purple">Learn More</a>
								</div>
							</article>
							<article>
								<header>
									<h2>Colocation</h2>
									<p>Starting at $60</p>
								</header>
								<div class="details">
									<a class="bttn plain">Coming Soon</a>
								</div>
							</article>
						</section>
					</article>
				</section>
			</div>
		</div>

		<div class="body">
			<div class="wrapper">
				<section class="features">
					<article>
						<i class="icon icn-meter2"></i>
						<h3>Premium Hardware</h3>
						<p>All of our servers are built with high quality server grade parts, for ultimate performance.</p>
					</article>
					<article>
						<i class="icon icn-cloud-upload"></i>
						<h3>Top Tier Network</h3>
						<p>Our Juniper-backed dual stack network utilizes multiple redundant 10Gbit uplinks for maximum uptime.</p>
					</article>
					<article>
						<i class="icon icn-hipster"></i>
						<h3>Great Support</h3>
						<p>Need a hand with your service? A staff member is just a click away through our billing center.</p>
					</article>
					<article>
						<i class="icon icn-magic-wand"></i>
						<h3>Simple Management</h3>
						<p>We include powerful control options with all hosting plans, making it easy to manage your service.</p>
					</article>
				</section>
			</div>
		</div>
<?php require_once('structure/footer.php'); ?>
