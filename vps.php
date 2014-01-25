<?php 
    $page["page"] = "vps-hosting"; 
    $page["title"] = "VPS Plans"; 
    $page["description"] = "OpenVZ VPSs located in Dallas, running on SSDs and high-clock CPUs with lots of extra available features.";
    $page["keywords"] = "dallas vps, ssd openvz vps, ssd vps, dallas server";
    include("./incl/header.php"); 
?>
    <h1 class="imgTitle plans">High Performance SSD VPS Hosting</h1>
    <div id="content">
        <div id="contentContainer">
            <h3>Use the orange sliding knob to select the amount of resources you'd like to start with.</h3>
            <div class="vpsSelect">
                <div id="slider"></div>
                <div class="details">
                    <ul>
                        <li class="ram">---</li>
                        <li class="disk">---</li>
                        <li class="data">---</li>
                        <li class="cost">---</li>
                    </ul>
                </div>
                <div class="order"><a href="#">Order Now</a></div>
                <div class="clear"></div>
                <div class="sliderOverlayContainer"><div id="sliderOverlay"></div></div>
            </div>
            <p class="smallCenter">Additional IP addresses are available during the checkout process.</p>
            <hr class="notop" />
            <div class="one-third">
                <h2 class="icon computer">High Quality Hardware</h2>
                <p>Our servers are built with only the latest Intel E3v2 processors, high quality Supermicro server grade motherboards, and high performance Samsung and Intel solid state drives to ensure speed and reliability for each customer.</p>
            </div>
            <div class="one-third">
                <h2 class="icon network">DDOS-Protected Network</h2>
                <p>Our servers are located in Dallas, TX inside a state-of-the-art, secure data center facility and features premium bandwidth connections to multiple bandwidth providers for maximum reliability and speed, along with DDOS protection  at no additional charge</p>
            </div>
            <div class="one-third last">
                <h2 class="icon thumbup">Premium Support</h2>
                <p>We guarantee premium support, period. If any issues are to arise with any of your hosted services, you'll always be assisted by a dedicated ServerCrate team member who will quickly resolve any issues.</p>
            </div>
            <div class="clear"></div>
            <p class="viewall"><a href="./features.php">View All Features &raquo;</a></p>
            <hr class="nospace" /><div class="clear"></div>
        </div>
    </div>
<?php include("./incl/footer.php"); ?>
