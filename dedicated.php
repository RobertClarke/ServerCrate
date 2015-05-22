<?php

$page = [
	'id'		=>	'dedi',
	'title'		=>	'Dedicated Server Hosting',
	'seo_desc'	=>	'High performance dedicated servers located in Dallas.',
	'seo_tags'	=>	'dallas dedicated server, dedicated server, dallas web hosting, dedicated, dedi',
	'cta_title'	=>	"Dedicated server hosting",
	'cta_desc'	=>	"Unmetered dedicated powered."
];

require_once('structure/header.php');

?>
		<div class="body">
			<div class="wrapper">
				<section class="cta">
					<p>When raw power is a must, look no further than our dedicated server line. Dedicated customer vlans allow for complex networking demands across many servers on our network. We also bundle in IPMI/KVM access with all servers, so you can monitor your server's health, and reboot your server on demand. Included DDOS mitigation ensures that your server is up and running even through sustained high-PPS attacks..</p>
				</section>
			</div>
		</div>
		
		<div class="body alt">
			<div class="wrapper">
				<section id="dedi-table">
					<h3>Select a server</h3>
					<table>
						<thead>
							<tr>
								<th class="server">Server</th>
								<th class="memory">Memory</th>
								<th class="storage">Storage</th>
								<th class="traffic">Traffic</th>
								<th class="ipmi">IPMI</th>
								<th class="purchase">Purchase</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>Intel Quad Core</strong> E3-1230v2 3.3Ghz</td>
								<td><strong>16GB</strong> ECC</td>
								<td><strong>1x 120GB SSD</strong></td>
								<td><strong>10TB @ 1Gbps</strong> /28 IPv4</td>
								<td><i class="icn-checkmark"></i></td>
								<td>
									<div class="price">$<strong>109</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/cart.php?a=add&pid=48" class="bttn blue">Configure</a>
								</td>
							</tr>
							<tr>
								<td><strong>Intel Quad Core</strong> E3-1230v2 3.3Ghz</td>
								<td><strong>16GB</strong> ECC</td>
								<td><strong>2x 120GB SSD</strong> Software RAID 1</td>
								<td><strong>10TB @ 1Gbps</strong> /28 IPv4</td>
								<td><i class="icn-checkmark"></i></td>
								<td>
									<div class="price">$<strong>119</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=3" class="bttn plain">Sold Out</a>
								</td>
							</tr>
							<tr>
								<td><strong>Intel Quad Core</strong> E3-1270v2 3.5Ghz</td>
								<td><strong>16GB</strong> ECC</td>
								<td><strong>1x 120GB SSD</strong></td>
								<td><strong>10TB @ 1Gbps</strong> /28 IPv4</td>
								<td><i class="icn-checkmark"></i></td>
								<td>
									<div class="price">$<strong>119</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/cart.php?a=add&pid=43" class="bttn blue">Configure</a>
								</td>
							</tr>
							<tr>
								<td><strong>Intel Quad Core</strong> E3-1230v2 3.3Ghz</td>
								<td><strong>32GB</strong> ECC</td>
								<td><strong>2x 120GB SSD</strong> Software RAID 1</td>
								<td><strong>10TB @ 1Gbps</strong> /28 IPv4</td>
								<td><i class="icn-checkmark"></i></td>
								<td>
									<div class="price">$<strong>149</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=3" class="bttn plain">Sold Out</a>
								</td>
							</tr>
							<tr>
								<td><strong>Intel Quad Core</strong> E3-1230v2 3.3Ghz</td>
								<td><strong>32GB</strong> ECC</td>
								<td><strong>1x 250GB SSD</strong></td>
								<td><strong>10TB @ 1Gbps</strong> /28 IPv4</td>
								<td><i class="icn-checkmark"></i></td>
								<td>
									<div class="price">$<strong>149</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/cart.php?a=add&pid=42" class="bttn blue">Configure</a>
								</td>
							</tr>
						</tbody>
					</table>
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
						<p>Need a hand with your server? A staff member is just a click away through our billing center.</p>
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