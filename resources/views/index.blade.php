<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <title>Hello, world!</title>
    </head>
    <body>
        <div id="app">

            <nav id="main-header" class="navbar navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="img/horizontal.png" alt=""></a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Post an Opportunity</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Request To Join</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                    </ul>
                </div>
            </nav>

            <div id="home-content" class="container">

                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="display-4">Where Closers and Influencers Get Connected</div>
                        <p>Get early access to match with the<br>top High-Ticket Closers&trade;</p>
                        <div class="row">
                            <div class="col"><a href="#" class="btn btn-primary btn-lg closers-pill d-block mt-2">Request to join</a></div>
                            <div class="col"><a href="#" class="btn btn-dark btn-lg closers-pill d-block mt-2">Post an opportunity</a></div>
                        </div>
                        
                    </div>
                    <div class="col text-right">
                        <img src="/img/00.png" alt="" title="">
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col">
                        <sliding-container id="image-01" direction="right">
                            <img src="/img/01.png" alt="Find Closers That Fit Your Offer" title="Find Closers That Fit Your Offer">
                        </sliding-container>
                    </div>
                    <div class="col">
                        <h2>Find Closers That Fit Your Offer</h2>
                        <p>We have High-Ticket Closers&trade; who have closed High-Ticket Offers for every industry you can imagine. From health, to education, to business opportunities, to real estate, and everything in between.</p>
                        <p>We have a High-Ticket Closer&trade; for any challenge.</p>
                        <a href="#" class="btn btn-primary btn-lg closers-pill mt-4">Request To Join</a>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col">
                        <h2>Manage Your Closers With Our<br>All-In-One-Platform</h2>
                        <p>No need for Whatsapp, Slack, or any additional software. With Closers.com, you'll be able to chat with your Closers, see their bookings, the revenue they've generated for your business, and more.</p>
                        <a href="#" class="btn btn-primary btn-lg closers-pill mt-4">Request To Join</a>
                    </div>
                    <div class="col">
                        <sliding-container id="image-02" direction="left">
                            <img src="/img/02.png" alt="Manage Your Closers With Our All-In-One-Platform" title="Manage Your Closers With Our All-In-One-Platform">
                        </sliding-container>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col">
                        <sliding-container id="image-03" direction="right">
                            <img src="/img/03.png" alt="How Closers.com Ensures 100% Success Rate" title="How Closers.com Ensures 100% Success Rate">
                        </sliding-container>
                    </div>
                    <div class="col">
                        <h2>How Closers.com Ensures 100%<br>Success Rate</h2>
                        <p>The goal for Closers.com is to have 100% success rate for all our partners. That's why Closers.com is a closed-platform and only accepts new partners after a strict application process</p>
                        <p>All stats will be tracked diligently - including, but not limited to: calls made, calls closed, closing ratio, revenue generated. This will ensure we are scaling your business towards your goals.</p>
                        <a href="#" class="btn btn-primary btn-lg closers-pill mt-4">Request To Join</a>
                    </div>
                </div>

                <div id="how-it-works" class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>How it works</h2>
                    </div>
                    <div class="col">
                        <sliding-container id="cta-left" direction="top" slide-distance="100">
                            <img src="/img/Sign up.png" alt="Request to Join" title="Request to Join">
                            <h5>Request to Join</h5>
                            <p>Once you've completed the application, our team will review to ensure it's a good fit for both parties. If approved, our team will reach out to you.</p>
                        </sliding-container>
                    </div>
                    <div class="col">
                        <sliding-container id="cta-middle" direction="top" slide-distance="100" range-offset="80">
                            <img src="/img/Match closers.png" alt="Match with closers" title="Match with closers">
                            <h5>Match with closers</h5>
                            <p>Our team will recommend High-Ticket Closers&trade; which will be believe are the best fit for your needs. However, you can choose any Closer from our pool.</p>
                            </sliding-container>
                    </div>
                    <div class="col">
                        <sliding-container id="cta-right" direction="top" slide-distance="100" range-offset="160">
                            <img src="/img/Sales.png" alt="Start Closing High-Ticket Offers" title="Start Closing High-Ticket Offers">
                            <h5>Start Closing High-Ticket Offers</h5>
                            <p>Once you have fround your High-Ticket Closers&trade;, they will start closing deals for you.</p>
                        </sliding-container>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a href="#" class="btn btn-primary btn-lg closers-pill">Request To Join</a>
                    </div>
                </div>

                <div id="join-cta" class="row">
                    <div class="col-7 text-center"><h2>Join closers now to grow your sales team</h2></div>
                    <div class="col text-center"><a href="#" class="btn btn-primary btn-lg closers-pill">Request To Join</a></div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <img src="img/horizontal.png" alt="" class="d-block pb-4">
                    <div class="row">
                        <div class="col">
                            <h6>How It Works</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">Closers</a></li>
                                <li><a href="#">Companies</a></li>
                                <li><a href="#">Marketplace</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>About Us</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>News</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">News</a></li>
                                <li><a href="#">Press</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>Legal</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Closers</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>Follow Us</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" id="link-facebook" class="link-social">Facebook</a></li>
                                <li><a href="#" id="link-linkedin" class="link-social">Linkedin</a></li>
                                <li><a href="#" id="link-angelist" class="link-social">Angelist</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>Contact</h6>
                            <ul class="list-unstyled">
                                <li><a href="#">info@closers.com</a></li>
                                <li>Vancouver, BC<br>Canada</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            English (United States)
                        </div>
                        <div class="col text-right">
                            &copy; closers.com 2019
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        
        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>