<?php

$page = [
	'id'		=>	'shared',
	'title'		=>	'Web Hosting Plans',
	'seo_desc'	=>	'Starting a web presence can sometimes be difficult, our simple web hosting plans make it easy to start your own website.',
	'seo_tags'	=>	'web hosting, web hosting seattle, server hosting, cpanel hosting, shared web hosting',
	'cta_title'	=>	"Web Hosting",
	'cta_desc'	=>	"Create an online presence in minutes."
];

require_once('structure/header.php');

?>
		<div class="body">
			<div class="wrapper">
				<section class="cta">
					<p>Our cPanel-backed web hosting platform makes it easy to run your own site. We've built in features such as the Softaculous control panel for quick installations on powerful CMS platforms such as Wordpress. Daily backups, RAID 10 solid state drives and redundant power/network connectivity ensure your site is up and running no matter what. Kickstart your presence on the internet today with a web hosting plan from ServerCrate.</p>
				</section>
			</div>
		</div>
		
		<div class="body alt">
			<div class="wrapper">
				<section id="shared-table">
					<h3>Select Your Hosting Plan</h3>
					<table>
						<thead>
							<tr>
								<th>&nbsp;</th>
								<th>Basic <span>Your Site Online in Minutes</span></th>
								<th class="hilight">Ultimate <span>Supercharge Your Website</span></th>
								<th>Enterprise <span>Enterprise Grade Hosting</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>Disk Space</strong> Included RAID disk space.</td>
								<td><span class="rlabel">Disk Space</span> 10GB</td>
								<td class="hilight"><span class="rlabel">Disk Space</span> 50GB</td>
								<td><span class="rlabel">Disk Space</span> 100GB</td>
							</tr>
							<tr>
								<td><strong>Monthly Bandwidth</strong> Included monthly bandwidth.</td>
								<td><span class="rlabel">Bandwidth</span> 200GB</td>
								<td class="hilight"><span class="rlabel">Bandwidth</span> Unlimited</td>
								<td><span class="rlabel">Bandwidth</span> Unlimited</td>
							</tr>
							<tr>
								<td><strong>Domains</strong> How many domains you can host.</td>
								<td><span class="rlabel">Domains</span> 5</td>
								<td class="hilight"><span class="rlabel">Domains</span> 10</td>
								<td><span class="rlabel">Domains</span> Unlimited</td>
							</tr>
							<tr>
								<td><strong>Email Accounts</strong> How many email accounts allowed.</td>
								<td><span class="rlabel">Emails</span> 10</td>
								<td class="hilight"><span class="rlabel">Emails</span> Unlimited</td>
								<td><span class="rlabel">Emails</span> Unlimited</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<div class="price">$<strong>4.95</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/cart.php?a=add&pid=7" class="bttn purple">Order Now</a>
								</td>
								<td class="hilight">
									<div class="price">$<strong>7.95</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/cart.php?a=add&pid=1" class="bttn orange">Order Now</a>
								</td>
								<td>
									<div class="price">$<strong>9.95</strong><span>/mo</span></div>
									<a href="https://billing.servercrate.com/cart.php?a=add&pid=8" class="bttn purple">Order Now</a>
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
