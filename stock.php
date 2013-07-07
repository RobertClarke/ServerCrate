<?php $page["page"] = "plans"; $page["title"] = "Stock"; include("./incl/header.php"); ?>
    <h1 class="txtTitle">Stock Information</h1>
    <div id="content">
        <div id="contentContainer">
			<!--<?php
	            $data = file_get_contents('https://vps.servercrate.com/api/admin/command.php?id=OUdWCos9xP2b5SpUiWQ6exvJ2Oy0Ae7eYa2rpkqO&key=ZhPUZ5E9Rk5VIpty5TxvXuAMvr4LCjor4chYHgFR&action=node-statistics&nodeid='.$node);
	            $data = '<?xml version="1.0" encoding="UTF-8"?><info>'.$data.'</info>';
	            $data = new SimpleXMLElement($data);
	            $freeips = (int)$data->freeips;

	            preg_match_all('/<(.*?)>([^<]+)<\/\\1>/i', $data, $match);
				$result = array();
				foreach ($match[1] as $x => $y)
				{
					$result[$y] = $match[2][$x];
				}
			?> -->

		<?php
		$arr = array(12, 13, 9, 14, 15);
		foreach ($arr as &$value) {
			// https://vps.servercrate.com/api/admin/command.php?id=OUdWCos9xP2b5SpUiWQ6exvJ2Oy0Ae7eYa2rpkqO&key=ZhPUZ5E9Rk5VIpty5TxvXuAMvr4LCjor4chYHgFR&action=node-idlist&type=openvz
			// https://vps.servercrate.com/api/admin/command.php?id=OUdWCos9xP2b5SpUiWQ6exvJ2Oy0Ae7eYa2rpkqO&key=ZhPUZ5E9Rk5VIpty5TxvXuAMvr4LCjor4chYHgFR&action=node-statistics&nodeid=13
			$url = "https://vps.servercrate.com/api/admin";
			$postfields["id"] = "OUdWCos9xP2b5SpUiWQ6exvJ2Oy0Ae7eYa2rpkqO";
			$postfields["key"] = "ZhPUZ5E9Rk5VIpty5TxvXuAMvr4LCjor4chYHgFR";
			$postfields["action"] = "node-statistics";
			$postfields["nodeid"] = "$value"; 
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url . "/command.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 20);
			curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Expect:"));
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
			$data = curl_exec($ch);
			curl_close($ch);
			preg_match_all('/<(.*?)>([^<]+)<\/\\1>/i', $data, $match);
			$result = array();
			foreach ($match[1] as $x => $y)
			{
				$result[$y] = $match[2][$x];
			}
			echo "<h2>$result[name]</h2>
			      <ul>
			      	<li>Located in $result[city]</li>
			      	<li>Running $result[virtualservers] virtual servers</li>
			      	<li>$result[freeips] free IPs</li>
			      	<li>$result[freememory] free memory</li>
			      </ul></br>";
		}	 
		?>
			<!-- There are currently <?php echo$result["freeips"]; ?> IPs in stock -->
			<!--There are currently <?php var_dump($result);; ?> IPs in stock-->
        </div>
    </div>
<?php include("./incl/footer.php"); ?>