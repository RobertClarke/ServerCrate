<?php

$page = [
	'id'		=>	'contact',
	'title'		=>	'Contact Us',
	'seo_desc'	=>	NULL,
	'seo_tags'	=>	NULL,
	'cta_title'	=>	Support,
	'cta_desc'	=>	" "
];

require_once('structure/header.php');

?>
		<div class="body">
			<div class="wrapper">
				<section class="cta spaced">
					<p>Please choose a department below</p>
				</section>
				<div id="departments">
					<section>
						<article>
							<p><a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=3">Sales</a></p>
							<a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=3" class="bttn blue">Select</a>
						</article>
						<article>
							<p><a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=1">Billing</a></p>
							<a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=1" class="bttn blue">Select</a>
						</article>
						<article>
							<p><a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=2">Support</a></p>
							<a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=2" class="bttn blue">Select</a>
						</article>
						<article>
							<p><a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=5">Network Operations/Abuse</a></p>
							<a href="https://billing.servercrate.com/submitticket.php?step=2&deptid=5" class="bttn blue">Select</a>
						</article>
					</section>
				</div>
			</div>
		</div>
<?php require_once('structure/footer.php'); ?>
