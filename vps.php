<?php

$page = [
	'id'		=>	'vps',
	'title'		=>	'SSD VPS Hosting',
	'seo_desc'	=>	'VPSs located in Seattle, running on SSDs and high-clock CPUs with lots of extra available features.',
	'seo_tags'	=>	'seattle vps, ssd vps, ssd vps hosting, seattle server',
	'cta_title'	=>	"VPS Hosting",
	'cta_desc'	=>	"Instant virtual private server solutions."
];

require_once('structure/header.php');

?>
		<div class="body">
			<div class="wrapper">
				<section class="cta">
					<p>Our OpenVZ Linux hosting is a powerful tool for your applications and websites. Dedicated RAM, SSD space and instant setup ensure that you're up and running in minutes.</p>
				</section>
			</div>
		</div>
		
		<div class="body alt">
			<div class="wrapper">
				<section id="plans" class="sections">
					<section>
						<header class="types">
							<h2><span class="blue">Standard</span> VPS</h2>
						</header>
						<article>
							<header>
								<h2>OpenVZ + SSD</h2>
								<p>Starting at $1.25</p>
							</header>
							<div class="details">
								<ul>
									<li>OpenVZ server virtualization</li>
									<li>Intel E3 CPUs (3.3GHz+ per core)</li>
									<li>Hardware RAID 10 SSD</li>
									<li>Gigabit network ports</li>
								</ul>
								<a href="/vps-ssdvz" class="bttn blue">Order Now</a>
							</div>
						</article>
						<article>
							<header>
								<h2>KVM + SSD</h2>
								<p>Starting at $3.75</p>
							</header>
							<div class="details">
								<ul>
									<li>KVM server virtualization</li>
									<li>Intel E3 CPUs (3.3GHz+ per core)</li>
									<li>Hardware RAID 10 SSD</li>
									<li>Gigabit network ports</li>
								</ul>
								<a class="bttn plain">Coming Soon</a>
							</div>
						</article>
					</section>
					<section class="full">
						<header class="types">
							<h2><span class="green">Storage</span> VPS</h2>
						</header>
						<article>
							<header>
								<h2>OpenVZ + HDD</h2>
								<p>Starting at $10.00</p>
							</header>
							<div class="details">
								<ul>
									<li>OpenVZ server virtualization</li>
									<li>Intel E3 CPUs (3.3GHz+ per core)</li>
									<li>Hardware RAID 10 HDD</li>
									<li>10 Gigabit network ports</li>
								</ul>
								<ul>
									<li>RAID battery backup</li>
									<li>Instant setup</li>
									<li>Friendly support</li>
									<li>Enterprise drives</li>
								</ul>
								<a href="/vps-storage" class="bttn green">Order Now</a>
							</div>
						</article>
					</section>
				</section>
				<div class="more-info">
					<a href="#standard-vs-storage" class="bttn plain scroll">Standard vs. Storage</a>
					<!--<a href="#openvz-vs-kvm" class="bttn plain scroll">OpenVZ vs. KVM</a>-->
				</div>
			</div>
		</div>
			
		<div class="body">	
			<div class="wrapper">
				<section class="features">
					<article>
						<i class="icon icn-meter2"></i>
						<h3>Premium Hardware</h3>
						<p>All of our servers are built in-house with high quality server grade parts, for ultimate performance.</p>
					</article>
					<article>
						<i class="icon icn-cloud-upload"></i>
						<h3>Tier-1 Network</h3>
						<p>ServerCrate utilizes redundant 1Gbps and 10Gbps networking in all locations for fast internet connectivity.</p>
					</article>
					<article>
						<i class="icon icn-hipster"></i>
						<h3>Great Support</h3>
						<p>Need a hand with your VPS? A staff member is just a click away through our billing center.</p>
					</article>
					<article>
						<i class="icon icn-magic-wand"></i>
						<h3>Simple Management</h3>
						<p>We include SolusVM with all servers, making it easy to manage your VM with just a few clicks.</p>
					</article>
				</section>
				<div class="sep"></div>
				<section id="standard-vs-storage" class="compare">
					<header><h2><span class="blue">Standard</span> vs. <span class="green">Storage</span></h2></header>
					<article class="blue">
						<h3>Standard VPS</h3>
						<p>Perfect for small websites and applications</p>
						<p class="desc">Our standard SSD VPS hosting line is great for all-purpose Linux applications. Pure RAID 10 SSD storage combined with high-clock CPUs, make for bleed-edge speed with your service. Included DDOS mitigation, IPv6 addresses, self-set rDNS, and many more make our VPS hosting line one of the most feature-rich out there.</p>
						<a href="/vps-ssdvz" class="bttn blue">View Plans</a>
					</article>
					<article class="green">	
						<h3>Storage VPS</h3>
						<p>Perfect for storing large amounts of files</p>
						<p class="desc">We designed our Storage VPS line to offer high-storage VPS with plenty of bandwidth and RAM. Not only do these servers boast a large amount of RAID 10 HDD space, but can also be used for light application purposes. One of the main differences between our SSD line is the addition of 10gbit network ports on all host nodes.</p>
						<a href="/vps-storage" class="bttn green">View Plans</a>
					</article>
				</section>
				<!--<div class="sep"></div>
				<section id="openvz-vs-kvm" class="compare">
					<header><h2>OpenVZ vs. KVM</h2></header>
					<article>
						<h3>OpenVZ</h3>
						<p>Perfect for small websites and applications</p>
						<ul>
							<li>Server grade hardware</li>
							<li>Premium SSD drives</li>
							<li>Complete DDOS protection</li>
							<li>Gigabit network ports</li>
						</ul>
						<ul>
							<li>Server grade hardware</li>
							<li>Premium SSD drives</li>
							<li>Complete DDOS protection</li>
							<li>Gigabit network ports</li>
						</ul>
						<a href="/vps-ssdvz" class="bttn blue">View Plans</a>
					</article>
					<article>	
						<h3>KVM</h3>
						<p>Perfect for storing large amounts of files</p>
						<ul>
							<li>Server grade hardware</li>
							<li>Premium SSD drives</li>
							<li>Complete DDOS protection</li>
							<li>Gigabit network ports</li>
						</ul>
						<ul>
							<li>Server grade hardware</li>
							<li>Premium SSD drives</li>
							<li>Complete DDOS protection</li>
							<li>Gigabit network ports</li>
						</ul>
						<a class="bttn plain">Coming Soon</a>
					</article>
				</section>-->
			</div>
		</div>
<?php require_once('structure/footer.php'); ?>
