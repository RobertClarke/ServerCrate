<?php $page["page"] = "home"; $page["title"] = "High Performance Web Hosting"; include("./incl/header.php"); ?>
    <div id="content" class="notop">
        <div id="contentContainer">
            <div id="product-boxes">
                <h1>Get More Out Of Your Hosting</h1>
                <div class="product first">
                    <h3>Web Hosting <span>Create an online presence in minutes</span></h3>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a nulla sit amet liber ornare adipiscing eget quis erat. In fauci bus.</p>
                        <div class="buttons"><a href="#" class="button">More Info</a> <a href="#" class="button buy">Order Now</a><div class="clear"></div></div>
                    </div>
                </div>
                <div class="product middle">
                    <h3>VPS Hosting <span>Get more out of your web hosting</span></h3>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a nulla sit amet liber ornare adipiscing eget quis erat. In fauci bus. Lorem ipsum dolor sit amet.</p>
                        <div class="buttons"><a href="#" class="button">More Info</a> <a href="#" class="button buy">Order Now</a><div class="clear"></div></div>
                    </div>
                </div>
                <div class="product last">
                    <h3>Dedicated Hosting <span>True power, performance and reliability</span></h3>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a nulla sit amet liber ornare adipiscing eget quis erat. In fauci bus.</p>
                        <div class="buttons"><a href="#" class="button">More Info</a> <a href="#" class="button buy">Order Now</a><div class="clear"></div></div>
                    </div>
                </div>
            </div><div class="clear"></div>
            <hr />
            <div class="domain-form">
                <form action="domain.php" method="GET">
                <input type="text" name="domain" id="domain" class="domain" placeholder="Find your perfect domain name." value="" />
                <input type="submit" name="submit" id="submit" class="submit" value="Search" />
                </form>
                <div class="clear"></div>
                <p>.com, .net, .org, .info, .biz, .me, .name, .co</p>
            </div>
            <hr class="notop" />
            <div class="home-about">
                <div class="side-text">
                    <h2>Learn A Bit About Us And Our Team</h2>
                    <p class="nospace justify">Thank you for considering ServerCrate as your server hosting choice. We guarantee client satisfaction as we are dedicated to both our clients and company. Our dedicated team has put their time and efforts into making our company and services the best they could be. Our team is working on a daily basis to improve our services, website, and more. We are dedicated to two main things at ServerCrate: our clients and the quality of service that we provide.</p>
                </div>
                <div class="testimonial">
                    <h2>What Our Clients Say</h2>
                    <ul id="testimonial-slider">
                        <li>
                            <p class="justify">"Awesome service, my VPS was set up immediately and I haven't had an issue since! Team is friendly and very helpful, ServerCrate is a great company!"</p>
                            <span>- <b>Example Bob 1</b></span>
                        </li>
                        <li>
                            <p class="justify">"Awesome service, my VPS was set up immediately and I haven't had an issue since! Team is friendly and very helpful, ServerCrate is a great company!"</p>
                            <span>- <b>Example Bob 2</b></span>
                        </li>
                        <li>
                            <p class="justify">"Awesome service, my VPS was set up immediately and I haven't had an issue since! Team is friendly and very helpful, ServerCrate is a great company!"</p>
                            <span>- <b>Example Bob 3</b></span>
                        </li>
                        <li>
                            <p class="justify">"Awesome service, my VPS was set up immediately and I haven't had an issue since! Team is friendly and very helpful, ServerCrate is a great company!"</p>
                            <span>- <b>Example Bob 4</b></span>
                        </li>
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