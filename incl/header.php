<?php 
  if (empty($page["page"])) { $page["page"] = ""; } 
  if (empty($page["title"])) { $page["title"] = "ServerCrate"; }
  if (empty($page["description"])) { $page["description"] = "ServerCrate is a growing hosting provide web, vps, game, and dedicated server hosting."; }
  if (empty($page["keywords"])) { $page["keywords"] = "server hosting, servers, game hosting, game servers"; } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if (!empty($page["title"])) { echo $page["title"]." | "; } ?>ServerCrate</title>
    <meta name="description" content="<?php if (!empty($page["description"])) { echo $page["description"]; } ?>" />
    <meta name="keywords" content="<?php if (!empty($page["keywords"])) { echo $page["keywords"]; } ?>" />

    <link rel="stylesheet" href="./assets/css/base.css" media="all" />
    <link rel="stylesheet" href="./assets/css/ui-lightness/jquery-ui-1.8.19.custom.css" media="screen" />
    <script src="./assets/js/jquery-1.7.2.min.js" type="text/javascript"></script> 
    <script src="./assets/js/jquery-ui-1.8.19.custom.min.js" type="text/javascript"></script> 
    <script src="./assets/js/base.js" type="text/javascript"></script>
    <script src="./assets/js/jquery.bxSlider.min.js" type="text/javascript"></script>
    <!--
    <script src="./assets/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script type="text/javascript">$(window).load(function() { $('#promoSlider').nivoSlider(); });</script>
    -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript">
      var GoSquared = {};
      GoSquared.acct = "GSN-711301-Y";
      (function(w){
        function gs(){
          w._gstc_lt = +new Date;
          var d = document, g = d.createElement("script");
          g.type = "text/javascript";
          g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
          var s = d.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(g, s);
        }
        w.addEventListener ?
          w.addEventListener("load", gs, false) :
          w.attachEvent("onload", gs);
      })(window);
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8521263-19']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body id="<?php echo $page["page"]; ?>">
    <div id="header">
        <div id="headerContainer">
            <div class="login"><a href="http://billing.servercrate.com/">Customer Portal</a></div>
            <div id="logo"><a href="./index.php">ServerCrate: High Performance Hosting</a></div>
        </div>
    </div><div class="clear"></div>
    <div id="nav">
        <div id="navContainer">
            <ul>
                <li<?php if ($page["page"] == "home") { ?> class="active"<?php } ?>><a href="./index.php">Home</a></li>
                <li<?php if ($page["page"] == "why-us") { ?> class="active"<?php } ?>><a href="./why-us.php">Why Us?</a></li>
                <li<?php if ($page["page"] == "plans") { ?> class="active"<?php } ?>>
                    <a href="#">Hosting Plans</a>
                    <ul class="subnav">
                        <li<?php if ($page["page"] == "web-hosting") { ?> class="active"<?php } ?>><a href="./web-hosting.php">Web Hosting</a></li>
                        <li<?php if ($page["page"] == "vps-hosting") { ?> class="active"<?php } ?>><a href="./vps.php">VPS Hosting</a></li>
                        <li<?php if ($page["page"] == "minecraft") { ?> class="active"<?php } ?>><a href="./minecraft.php">Minecraft Hosting</a></li>
                        <li<?php if ($page["page"] == "minecraft") { ?> class="active"<?php } ?>><a href="./mcpe.php">Minecraft PE Hosting</a></li>
                        <li<?php if ($page["page"] == "starbound") { ?> class="active"<?php } ?>><a href="./starbound.php">Starbound Servers</a></li>
                        <li class="<?php if ($page["page"] == "dedicated") { ?>active <?php } ?>last"><a href="./dedicated.php">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li<?php if ($page["page"] == "features") { ?> class="active"<?php } ?>><a href="./features.php">Features</a></li>
                <li<?php if ($page["page"] == "company") { ?> class="active"<?php } ?>><a href="./company.php">Our Company</a></li>
                <li<?php if ($page["page"] == "support") { ?> class="active"<?php } ?>><a href="./support.php">Support</a></li>
            </ul>
        </div>
    </div><div class="clear"></div>
