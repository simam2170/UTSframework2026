@extends('landing.layouts.app')
@section('content')
    <main>
         <!-- banner-section -->
        <section class="banner-section centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span>Join the Summer Adventure</span>
                            <h2>Camping With <br />Friends Gives Joy</h2>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">Discover More</a>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="slide-item style-two">
                    <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span>Join the Summer Adventure</span>
                            <h2>Camping With <br />Friends Gives Joy</h2>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">Discover More</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="media-partner">
                <ul class="media-links clearfix">
                    <li><h6>Follow on social media</h6></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box">
                                <div class="text">amping</div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="sub-title">Our Introductions</span>
                                    <h2>Welcome to Camp of Summers</h2>
                                </div>
                                <div class="text">
                                    <div class="icon-box"><i class="flaticon-camping"></i></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>Refresing to get such a personal touch.</li>
                                    <li>Duis aute irure dolor in reprehenderit in voluptate.</li>
                                    <li>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="about.html" class="theme-btn btn-one">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- activities-section -->
        <section class="activities-section sec-pad">
            <div class="auto-container">
                <div class="upper-box centred">
                    <div class="sec-title">
                        <span class="sub-title">What We’re Offering</span>
                        <h2>Our Activities</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box"><a href="climbing.html"><img src="assets/images/resource/activities-1.jpg" alt=""></a></div>
                                    <div class="lower-content">
                                        <div class="icon-box">
                                            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                            <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                            <i class="flaticon-climbing"></i>
                                        </div>
                                        <h3><a href="climbing.html">Climbing</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                        <div class="link"><a href="climbing.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box"><a href="adventure.html"><img src="assets/images/resource/activities-2.jpg" alt=""></a></div>
                                    <div class="lower-content">
                                        <div class="icon-box">
                                            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                            <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                            <i class="flaticon-adventurer"></i>
                                        </div>
                                        <h3><a href="adventure.html">Adventure</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                        <div class="link"><a href="adventure.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box"><a href="camping.html"><img src="assets/images/resource/activities-3.jpg" alt=""></a></div>
                                    <div class="lower-content">
                                        <div class="icon-box">
                                            <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                            <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                            <i class="flaticon-tent"></i>
                                        </div>
                                        <h3><a href="camping.html">Camping</a></h3>
                                        <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                        <div class="link"><a href="camping.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="sec-title light">
                        <span class="sub-title">Get Ready For The</span>
                        <h3>Summer of a Lifetime</h3>
                    </div>
                    <div class="text">
                        <p>There are not many of lorem ipsum <br />available alteration.</p>
                    </div>
                    <div class="support-box">
                        <p>Call Anytime</p>
                        <h3><a href="tel:12463330079">+1- ( 246 ) 333 - 0079</a></h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- activities-section end -->


        <!-- video-section -->
        <section class="video-section">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/video-bg.jpg);"></div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="sec-title light">
                        <span class="sub-title">Cmapning That’s Right For You</span>
                        <h2>Get Now Memorable Wonderful Outdoor Experiences</h2>
                    </div>
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption="" style="background-image: url(assets/images/shape/shape-7.png);"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section bg-color-1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-inner">
                            <div class="image-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image"><img src="assets/images/resource/chooseus-2.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="sec-title">
                                    <span class="sub-title">Our Benefits</span>
                                    <h2>Why Choose Us</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                </div>
                                <div class="inner">
                                    <ul class="list clearfix">
                                        <li>Private Cottages</li>
                                        <li>Compact Trailers</li>
                                        <li>Tents on Rent</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="content_block_two">
                            <div class="content-box">
                                <div class="upper">
                                    <span>Spend a Happy Weekend</span>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes. Lorem ipsum dolor sit amet.</p>
                                    <a href="index.html" class="theme-btn btn-one">Register now</a>
                                </div>
                                <figure class="image"><img src="assets/images/resource/chooseus-3.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- gallery-section -->
        <section class="gallery-section centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Our Photoshots</span>
                    <h2>Our Gallery</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-1.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-2.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-3.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column">
                            <div class="gallery-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="assets/images/gallery/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/gallery/gallery-4.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section bg-color-2">
            <div class="outer-container clearfix">
                <div class="testimonial-inner pull-left">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                    <div class="testimonial-content">
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="text">
                                    <h3>This is due to their excellent service, and augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</h3>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Customer</span>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="text">
                                    <h3>This is due to their excellent service, and augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</h3>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Customer</span>
                                </div>
                            </div>
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="text">
                                    <h3>This is due to their excellent service, and augue homero consectetuer in nam. Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</h3>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <span class="name">Jessica Brown</span>
                                    <span class="designation">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-inner pull-right">
                    <div class="faq-content">
                        <div class="sec-title">
                            <span class="sub-title">Frequently Asked Question</span>
                            <h2>Any Question?</h2>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"></div>
                                    <h5>Nullam scelerisque eu lacus quis ultrices.</h5>
                                </div>
                                <div class="acc-content current">
                                    <div class="text">
                                        <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Cras faucibus fringilla orci in sollicitudin</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"></div>
                                    <h5>Nullam scelerisque eu lacus quis ultrices.</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">What’s Happening</span>
                    <h2>News & Articles</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">20 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Get Ready for the Summer Camp</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">19 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">5 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Duis Laoreet Cursus Justo, sed</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">18 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">4 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Morbi nec Finibus mi Cras Risus</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- client-section -->
        <section class="client-section">
            <div class="auto-container">
                <div class="title-text centred">
                    <span>Meet the partners</span>
                </div>
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- client-section end -->
    </main>
@endsection