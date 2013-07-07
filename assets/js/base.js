var settings = {
	1:{product_id: 'prod1', ram: '128 MB', burst: '128 MB',  disk_space: '5 GB', data_transfer: '500 GB', ips: '1 IP Address', monthly_cost:'$1.95', whmcs_id:'17'},
	2:{product_id: 'prod2', ram: '256 MB', burst: '256 MB',  disk_space: '10 GB', data_transfer: '1,000 GB', ips: '1 IP Address', monthly_cost:'$3.95', whmcs_id:'18'},
	3:{product_id: 'prod4', ram: '512 MB', burst: '512 MB',  disk_space: '15 GB', data_transfer: '2,000 GB', ips: '1 IP Address', monthly_cost:'$7.95', whmcs_id:'10'},
	4:{product_id: 'prod4', ram: '1024 MB', burst: '1024 MB',  disk_space: '20 GB', data_transfer: '3,000 GB', ips: '1 IP Address', monthly_cost:'$13.95', whmcs_id:'11'},
	5:{product_id: 'prod5', ram: '2048 MB', burst: '2048 MB',  disk_space: '30 GB', data_transfer: '4,000 GB', ips: '2 IP Addresses', monthly_cost:'$25.95', whmcs_id:'12'},
	6:{product_id: 'prod6', ram: '3072 MB', burst: '3072 MB',  disk_space: '40 GB', data_transfer: '5,000 GB', ips: '2 IP Addresses', monthly_cost:'$37.95', whmcs_id:'19'},
	7:{product_id: 'prod7', ram: '4096 MB', burst: '4096 MB',  disk_space: '50 GB', data_transfer: '6,000 GB', ips: '2 IP Addresses', monthly_cost:'$49.95', whmcs_id:'13'},
	8:{product_id: 'prod8', ram: '6144 MB', burst: '6144 MB',  disk_space: '60 GB', data_transfer: '8,000 GB', ips: '2 IP Addresses', monthly_cost:'$73.95', whmcs_id:'20'},
	9:{product_id: 'prod9', ram: '8192 MB', burst: '8192 MB',  disk_space: '80 GB', data_transfer: '10,000 GB', ips: '2 IP Addresses', monthly_cost:'$99.95', whmcs_id:'16'}
};

$(document).ready(function() {
	if($("#slider")) {
		$("#slider").slider({ step: 1, min:1, max: 9, value: 4, slide: function(event, ui) { changeSliderValue(ui); } });
		changeSliderValue({value: 4});
	}
	
	$('#nav li').hover(
		function() { $(this).find('.subnav').slideDown(200); },
		function() { $(this).find('.subnav').slideUp(200); }
	);
	
});

function changeSliderValue(ui) {
	for(var i=1;i<=ui.value;i++) {
		$('#sliderOverlay').css('width',"100%");
		var ii = 43 + ((i - 1) * 103);
	}
	for(var i = ui.value+1;i<=9;i++) {
		$('#sliderOverlay').css('width',ii+"px");
	}
    $('.vpsSelect .details .ram').html(settings[ui.value]['ram']);
    $('.vpsSelect .details .disk').html(settings[ui.value]['disk_space']);
    $('.vpsSelect .details .data').html(settings[ui.value]['data_transfer']+'<div class="extra">'+settings[ui.value]['ips']+' Incl</div>');
    $('.vpsSelect .details .cost').html(settings[ui.value]['monthly_cost']);
    $('.vpsSelect .order a').attr('href', 'http://billing.servercrate.com/cart.php?a=add&pid='+settings[ui.value]['whmcs_id']);
}