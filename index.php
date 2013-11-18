<?php $page["page"] = "home"; $page["title"] = "High Performance Web Hosting"; include("./incl/header.php"); ?>
    <div id="content" class="notop">
        <div id="contentContainer">
            <div id="product-boxes">
                <h1>Get More Out Of Your Web Hosting</h1>
                <div class="product first">
                    <h3>Web Hosting <span>Create an online presence in minutes</span></h3>
                    <div class="content">
                        <p>Each of our web hosting plans feature a rock-solid 99.9% Server & Network Uptime Guarantee which ensures that your website will be online and ready for you and your visitors.</p>
                        <div class="buttons"><a href="/web-hosting" class="button">More Info</a> <a href="/web-hosting" class="button buy">Order Now</a><div class="clear"></div></div>
                    </div>
                </div>
                <div class="product middle">
                    <h3>VPS Hosting <span>Powerful Virtual Private Server solutions</span></h3>
                    <div class="content">
                        <p>Our SSD-powered OpenVZ Linux hosting is a powerful tool for your applications and websites. Dedicated RAM and SSD space ensures that you're up and running in no time.</p>
                        <div class="buttons"><a href="/vps" class="button">More Info</a> <a href="/vps" class="button buy">Order Now</a><div class="clear"></div></div>
                    </div>
                </div>
                <div class="product last">
                    <h3>MCPE Hosting <span>Best-in-class Minecraft PE hosting</span></h3>
                    <div class="content">
                        <p>Looking to start your own Minecraft pocket edition server? Our MCPE hosting includes an integrated panel, and support for running your server.</p>
                        <div class="buttons"><a href="/dedicated" class="button">More Info</a> <a href="/mcpe" class="button buy">Order Now</a><div class="clear"></div></div>
                    </div>
                </div>
            </div><div class="clear"></div>
            <hr />
            <div class="domain-form">
                <form action="domain.php" method="GET">
                <input type="text" name="domain" id="domain" class="domain" placeholder="Find your perfect domain name, and start your own site today." value="" />
                <input type="submit" name="submit" id="submit" class="submit" value="Search" />
                </form>
                <div class="clear"></div>
                <p>.com, .net, .org</p>
            </div>
            <hr class="notop" />
            <div class="home-about">
                <div class="side-text">
                    <h2>Learn A Bit About Us And Our Team</h2>
                    <p class="nospace justify">Thank you for considering ServerCrate as your server hosting choice. We guarantee client satisfaction as we are dedicated to both our clients and company. Our dedicated team has put their time and efforts into making our company and services the best they could be. 
                    </br></br>
                    Our team is working on a daily basis to improve our services, website, and more. We are dedicated to two main things at ServerCrate: our clients and the quality of service that we provide.</p>
                </div>
                <div class="testimonial">
                    <h2>What Our Clients Say</h2>
                    <ul id="testimonial-slider">
                        <li>
                            <p class="justify">" Out of all the hosting providers I've been with, ServerCrate has definitely been top notch in all aspects. Their customer support is unlike any other, and while I've been with them, I've noticed very minimal downtime. If you're looking for a long-term hosting provider, your best bet is ServerCrate."</p>
                            <span>- <b>Coby</b></span>
                        </li>
                        <li>
                            <p class="justify">"I've been using ServerCrate services for the last year, and I've noticed rock solid support and service during that time. The support staff is prompt at responding to my questions, and helpful in getting my website back online in the event of an issue."</p>
                            <span>- <b>Febby</b></span>
                        </li>
                        <!--<li>
                            <p class="justify">"Awesome service, my VPS was set up immediately and I haven't had an issue since! Team is friendly and very helpful, ServerCrate is a great company!"</p>
                            <span>- <b>Example Bob 3</b></span>
                        </li>
                        <li>
                            <p class="justify">"Awesome service, my VPS was set up immediately and I haven't had an issue since! Team is friendly and very helpful, ServerCrate is a great company!"</p>
                            <span>- <b>Example Bob 4</b></span>
                        </li>-->
                    </ul>
                </div>
            </div>
        <div class="clear"></div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#testimonial-slider').bxSlider({ mode: 'vertical', speed: 800, controls: false, auto: true, pause: 3500 });
    });
    </script>
<?php include("./incl/footer.php"); ?>