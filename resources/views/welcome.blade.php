@include('partials.header')
<body>
    <div id="app">
        <navigation></navigation>

        <section class="mb-10">
            <div class="p-5 text-center bg-image" style="background-image: linear-gradient(to right,#b7b7b7 ,transparent 100%), url('../images/Untitled design.png'); height: 600px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);">
                <div class="mask" style="background-color: rgba(126,126,126,0.35)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="row d-flex justify-content-center">
                            <div class="text-container">
                                <div class="text-black">
                                    <h2 class="mb-4 px-4 px-md-5 display-3 ls-tight">
                                        <span>Veterinar koji je dostupan</span>
                                        <br>
                                        <span>u svakom trenutku!</span>

                                    </h2>
                                        <div class="cta">
                                            <a href="#">Pročitaj naše savjete</a>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <services></services>


        <div id="latest-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-section">
                            <h2>Zadnji blogovi</h2>
                            <img src="images/under-heading.png" alt="" >
                        </div>
                    </div>
                </div>
                <div class="row">

                    <post></post>
                    <post></post>
                    <post></post>

                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="top-footer">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="subscribe-form">
                                <span>Get in touch with us</span>
                                <form method="get" class="subscribeForm">
                                    <input id="subscribe" type="text" />
                                    <input type="submit" id="submitButton" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="social-bottom">
                                <span>Follow us:</span>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-rss"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-footer">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="about">
                                <h4 class="footer-title">About Grill</h4>
                                <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shop-list">
                                <h4 class="footer-title">Shop Categories</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recent-posts">
                                <h4 class="footer-title">Recent posts</h4>
                                <div class="recent-post">
                                    <div class="recent-post-thumb">
                                        <img src="images/recent-post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                        <span>24/12/2084</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="recent-post-thumb">
                                        <img src="images/recent-post2.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <h6><a href="#">Simple and effective meals</a></h6>
                                        <span>18/12/2084</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="more-info">
                                <h4 class="footer-title">More info</h4>
                                <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i>010-020-0340</li>
                                    <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                    <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <p>
                        	<span>Copyright © 2084 <a href="#">Your Company Name</a>
                            | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent"><span class="blue">template</span><span class="green">mo</span></a></span>
                    </p>
                </div>

            </div>
        </footer>

    </div>
@include('partials.footer')
