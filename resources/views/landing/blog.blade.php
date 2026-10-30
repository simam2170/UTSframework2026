@extends('landing.layouts.app')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Blog</li>
                </ul>
                <div class="title">
                    <h1>Our Blog</h1>
                </div>
            </div>
        </div>
        <div class="media-partner">
            <ul class="media-links clearfix">
                <li>
                    <h6>Follow on social media</h6>
                </li>
                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-classic-content">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img
                                            src="assets/images/news/news-4.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">20 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">2 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Get Ready for the Summer Camp</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in some form.
                                        Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                    <div class="link">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img
                                            src="assets/images/news/news-5.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">19 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">5 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Duis Laoreet Cursus Justo, sed ulis</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in some form.
                                        Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                    <div class="link">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img
                                            src="assets/images/news/news-6.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">15 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">0 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Morbi nec Finibus mi. Cras Risus</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in some form.
                                        Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                    <div class="link">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img
                                            src="assets/images/news/news-7.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <span class="post-date">12 oct, 2021</span>
                                    <ul class="post-info clearfix">
                                        <li><i class="far fa-user"></i><a href="blog-details.html">by Admin</a></li>
                                        <li><i class="far fa-comments"></i><a href="blog-details.html">7 Comments</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Nulla Posuere tortor eu Erat Blandit</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in some form.
                                        Donec scelerisque dolor id nunc dictum, interdum gravida.</p>
                                    <div class="link">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-btn">
                            <a href="blog.html" class="theme-btn btn-one">load more posts</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="search-widget">
                            <form action="blog.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search" required>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h4>Recent Posts</h4>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <div class="post-date"><i class="far fa-comments"></i><a href="blog-details.html">2
                                            Comments</a></div>
                                    <h6><a href="blog-details.html">Integer tristique odio vitae lorem gra</a></h6>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <div class="post-date"><i class="far fa-comments"></i><a href="blog-details.html">5
                                            Comments</a></div>
                                    <h6><a href="blog-details.html">Get Ready for the Summer Camp</a></h6>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                    <div class="post-date"><i class="far fa-comments"></i><a href="blog-details.html">3
                                            Comments</a></div>
                                    <h6><a href="blog-details.html">Duis Laoreet Cursus Justo, sed ulis</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="blog-details.html">Summer Camp</a></li>
                                    <li><a href="blog-details.html">Holidays</a></li>
                                    <li><a href="blog-details.html">Tours & Trips</a></li>
                                    <li><a href="blog-details.html">Cottages</a></li>
                                    <li><a href="blog-details.html">Family Time</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h4>Popular Tags</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="blog-details.html">camping</a></li>
                                    <li><a href="blog-details.html">Cottages</a></li>
                                    <li><a href="blog-details.html">Holidays</a></li>
                                    <li><a href="blog-details.html">summer camp</a></li>
                                    <li><a href="blog-details.html">Family</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
@endsection