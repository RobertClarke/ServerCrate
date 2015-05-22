<?php

$page = [
	'id'		=>	'vps',
	'title'		=>	'OpenVZ SSD VPS Hosting',
	'seo_desc'	=>	'OpenVZ VPSs located in Dallas, running on SSDs and high-clock CPUs with lots of extra available features.',
	'seo_tags'	=>	'dallas vps, ssd vps, ssd vps hosting, dallas server, openvz',
	'cta_title'	=>	'OpenVZ SSD VPS',
	'cta_desc'	=>	' '
];

require_once('structure/header.php');

?>
		<!--<div class="body">
			<div class="wrapper">
				<section class="cta">
					<p>Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
				</section>
			</div>
		</div>-->
		
		<div class="body alt">
			<div class="wrapper">
				<section id="slider">
					<h3>Build OpenVZ VPS Package</h3>
					<div id="select">
						<div class="top">
							<div id="spec-cores" class="spec"><span>---</span> CPU Cores</div>
							<div id="spec-memory" class="spec"><span>---</span> Memory</div>
							<div id="spec-storage" class="spec"><span>---</span> SSD Space</div>
							<div id="spec-bandwidth" class="spec"><span>---</span> Bandwidth</div>
							<div id="spec-connection" class="spec"><span>---</span> Connection</div>
						</div>
						<div class="body">
							<h4>Drag the slider to choose your plan</h4>
							<div class="selection">
								<div class="notches">
									<div class="notch"><span>128MB</span></div>
									<div class="notch"><span>256MB</span></div>
									<div class="notch"><span>512MB</span></div>
									<div class="notch"><span>1GB</span></div>
									<div class="notch"><span>2GB</span></div>
									<div class="notch"><span>3GB</span></div>
									<div class="notch"><span>4GB</span></div>
									<div class="notch"><span>6GB</span></div>
									<div class="notch"><span>8GB</span></div>
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
								<li>Hardware RAID 10 SSD</li>
								<li>DDOS mitigation</li>
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
											<option value="2">Bill Quarterly</option>
											<option value="1">Bill Yearly</option>
										</select>
									</div>
									<div>
										<label>Server Location</label>
										<select id="vps-loc">
											<option value="45">Dallas</option>
											<option value="171">Los Angeles</option>
										</select>
									</div>
									<div>
										<label>Additional IPs</label>
										<select id="vps-ips">
											<option value="6">&#10008; No Additional IPs</option>
											<option value="2">1 Extra IP (+$1.00/mo)</option>
											<option value="3">2 Extra IP's ($2.00/mo)</option>
											<option value="4">3 Extra IP's ($3.00/mo)</option>
											<option value="5">4 Extra IP's ($4.00/mo)</option>
											<option value="34">5 Extra IP's ($5.00/mo)</option>
											<option value="35">6 Extra IP's ($6.00/mo)</option>
											<option value="36">7 Extra IP's ($7.00/mo)</option>
											<option value="37">8 Extra IP's ($8.00/mo)</option>
											<option value="38">9 Extra IP's ($9.00/mo)</option>
											<option value="39">10 Extra IP's ($10.00/mo)</option>
											<option value="50">20 Extra IP's ($20.00/mo)</option>
											<option value="46">30 Extra IP's ($30.00/mo)</option>
											<option value="57">60 Extra IP's ($60.00/mo)</option>
										</select>
									</div>
									<div>
										<label>Server Management</label>
										<select id="vps-manage">
											<option value="51">&#10008; Unmanaged</option>
											<option value="52">&#10004; Managed (Incl cPanel) ($50.00/mo)</option>
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
						<h3>DDOS Mitigation</h3>
						<p>Our included DDOS mitigation platform keeps your service protected from even the largest attacks.</p>
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
		var vpsStart = 3;
		var vpsType = 'openvz';
		var vpsProducts = [
			[17,	1,	'128MB',	'5GB',	'500GB',	'1Gbit',	0,	0,	15.00],
			[18,	1,	'256MB',	'10GB',	'1TB',		'1Gbit',	0,	8.00,	25.00],
			[10,	2,	'512MB',	'15GB',	'2TB',		'1Gbit',	5.00,	0,	50.00],
			[11,	4,	'1GB',		'20GB',	'3TB',		'1Gbit',	10.00,	0,	100.00],
			[12,	4,	'2GB',		'30GB',	'4TB',		'1Gbit',	20.00,	0,	200.00],
			[19,	4,	'3GB',		'40GB',	'5TB',		'1Gbit',	30.00,	0,	300.00],
			[13,	4,	'4GB',		'40GB',	'6TB',		'1Gbit',	40.00,	0,	400.00],
			[20,	4,	'6GB',		'60GB',	'8TB',		'1Gbit',	60.00,	0,	600.00],
			[16,	4,	'8GB',		'80GB',	'10TB',		'1Gbit',	80.00,	0,	800.00]
		];
		</script>
		
<?php require_once('structure/footer.php'); ?>