<?php

$page = [
	'id'		=>	'home',
	'title'		=>	NULL,
	'seo_desc'	=>	NULL,
	'seo_tags'	=>	NULL,
	'cta_title'	=>	'ServerCrate',
	'cta_desc'	=>	NULL
];

require_once('structure/header.php');

?>
		<div class="body alt">
			<div class="wrapper">
				<section id="plans">
					<article>
						<header>
							<h2>VPS Hosting</h2>
							<p>Starting at $1.25</p>
						</header>
						<div class="details">
							<ul>
								<li>Instant Setup</li>
								<li>RAID 10 SSD Drives</li>
								<li>SSD and HDD Available</li>
								<li>Network up to 10Gbit</li>
							</ul>
							<a href="/vps" class="bttn purple">Order Now</a>
						</div>
					</article>
					<article class="top">
						<header>
							<h2>Dedicated Servers</h2>
							<p>Starting at $109</p>
						</header>
						<div class="details">
							<ul>
								<li>Fast Setup</li>
								<li>Dedicated IPMI/KVM</li>
								<li>ECC RAM + Gbit Network</li>
								<li>Custom Deployments Available</li>
							</ul>
							<a href="/dedicated" class="bttn">Order Now</a>
						</div>
					</article>
					<article>
						<header>
							<h2>Web Hosting</h2>
							<p>Starting at $4.95</p>
						</header>
						<div class="details">
							<ul>
								<li>Powerful Control Panel</li>
								<li>Daily Backups</li>
								<li>Global DNS</li>
								<li>Automated Software Installation</li>
							</ul>
							<a href="/web-hosting" class="bttn purple">Order Now</a>
						</div>
					</article>
					<article>
						<header>
							<h2>Colocation</h2>
							<p>Starting at $60</p>
						</header>
						<div class="details">
							<ul>
								<li>Courtesy Remote Hands</li>
								<li>Locking Racks</li>
								<li>SSAE16 Datacenter</li>
								<li>Additional IPMI/OOB Uplink</li>
							</ul>
							<a href ="https://billing.servercrate.com/submitticket.php?step=2&deptid=3" class="bttn plain">Contact Us</a>
						</div>
					</article>
				</section>
			</div>
		</div>
			
		<div class="body">	
			<div class="wrapper">
				<section class="cta spaced">
					<h1>Why do people choose ServerCrate? It's simple.</h1>
					<h2><span>We offer powerful, reliable and scalable hosting solutions, backed with incredible support.</span> Whether you’re hosting a small personal website or serve high volumes of traffic, we have a solution for you.</h2>
				</section>
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
						<p>Need a hand with your site? A staff member is just a click away through our billing center.</p>
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
