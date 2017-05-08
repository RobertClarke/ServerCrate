<?php

$page = [
	'id'		=>	'vps-storage',
	'title'		=>	'Storage VPS Hosting',
	'seo_desc'	=>	'Storage VPSs located in Seattle, running on HDDs and high-clock CPUs with lots of extra available features.',
	'seo_tags'	=>	'seattle vps, ssd vps, ssd vps hosting, seattle server, openvz',
	'cta_title'	=>	'OpenVZ Storage VPS',
	'cta_desc'	=>	' '
];

require_once('structure/header.php');

?>
		<div class="body alt">
			<div class="wrapper">
				<section id="slider">
					<h3>Build OpenVZ VPS Package</h3>
					<div id="select">
						<div class="top">
							<div id="spec-storage" class="spec"><span>---</span> HDD Space</div>
							<div id="spec-raid" class="spec"><span>RAID 10</span> RAID</div>
							<div id="spec-memory" class="spec"><span>---</span> Memory</div>
							<div id="spec-bandwidth" class="spec"><span>---</span> Bandwidth</div>
							<div id="spec-connection" class="spec"><span>10Gbit</span> Connection</div>
						</div>
						<div class="body">
							<h4>Drag the slider to choose your plan</h4>
							<div class="selection plan5">
								<div class="notches">
									<div class="notch"><span>100GB</span></div>
									<div class="notch"><span>250GB</span></div>
									<div class="notch"><span>500GB</span></div>
									<div class="notch"><span>1TB</span></div>
									<div class="notch"><span>2TB</span></div>
								</div>
								<div class="slider">
									<div class="slider-wrap">
										<div id="ui-slider"></div>
										<span class="filler"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="details">
						<div class="details">
							<h4>Included Features</h4>
							<ul>
								<li>Intel E3 CPUs (3.3GHz+ per core)</li>
								<li>Hardware RAID 10 HDD</li>
								<li>Tier-1 Network</li>
								<li>16 IPv6 addresses</li>
							</ul>
						</div>
						<div class="config">
							<div class="left">
								<div class="options float">
									<h4>Package Configuration &amp; Addons</h4>
									<div>
										<label>Billing Cycle</label>
										<select id="vps-cycle">
											<option value="0">Bill Monthly</option>
											<option value="1">Bill Yearly</option>
										</select>
									</div>
									<div>
										<label>Server Location</label>
										<select id="vps-loc">
											<option value="194">Seattle, WA</option>
										</select>
									</div>
									<div>
										<label>Additional IPs</label>
										<select id="vps-ips">
											<option value="180">&#10008; No Additional IPs</option>
											<option value="176">1 Extra IP (+$1.50/mo)</option>
											<option value="177">2 Extra IP's ($3.00/mo)</option>
											<option value="178">3 Extra IP's ($4.50/mo)</option>
										</select>
									</div>
									<div>
										<label>Server Management</label>
										<select id="vps-manage">
											<option value="196">&#10008; Unmanaged</option>
											<option value="197">&#10004; Managed ($50.00/mo)</option>
										</select>
									</div>
								</div>
							</div>
							<div class="right">
								<div class="float">
									<div class="price"><span class="dollar">$</span><span class="amount">0</span></div>
									<div class="term">Billed <span>Monthly</span></div>
									<a href="#" class="bttn purple">Order Now</a>
								</div>
							</div>
						</div>
					</div>
				</section>
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
						<h3>Top Tier Network</h3>
						<p>Our Juniper-backed dual stack network utilizes multiple redundant 10Gbit uplinks for maximum uptime.</p>
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
			</div>
		</div>
		
		<script type="text/javascript">
		var vpsStart = 2;
		var vpsType = 'storage';
		var vpsProducts = [
			[46,	1,	'1GB',	'100GB',	'1TB',		'10Gbit',	10.00,	0,	100.00],
			[45,	1,	'1GB',	'250GB',	'2TB',		'10Gbit',	14.00,	0,	140.00],
			[27,	2,	'1GB',	'500GB',	'4TB',		'10Gbit',	20.00,	0,	200.00],
			[28,	4,	'2GB',	'1TB',		'8TB',		'10Gbit',	40.00,	0,	400.00],
			[29,	4,	'2GB',	'2TB',		'16TB',		'10Gbit',	80.00,	0,	800.00],
		];
		</script>
		
<?php require_once('structure/footer.php'); ?>
