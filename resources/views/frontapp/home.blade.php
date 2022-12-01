@extends('layouts.frontapp')

@section('content')

            <!--Swiper-->
            <section class="swiper-container swiper-slider" data-loop="true" data-height="" data-slide-effect="fade" data-dragable="false" data-min-height="400px" data-autoplay="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" id="page-loader" data-slide-bg="{{asset('assets/frontapp/images/blog/post-13-370x250.jpg')}}">
                                <div class="swiper-slide-caption">
                                    <div class="container section-41 section-bottom-85 section-sm-98 section-md-bottom-124 text-xl-left">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide-bg="{{asset('assets/frontapp/images/blog/post-14-370x250.jpg')}}">
                                <div class="swiper-slide-caption">
                                    <div class="container section-41 section-bottom-85 section-sm-98 section-md-bottom-124">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-slide-bg="{{asset('assets/frontapp/images/blog/post-15-370x250.jpg')}}">
                                <div class="swiper-slide-caption">
                                    <div class="container section-41 section-bottom-85 section-sm-98 section-md-bottom-124 text-xl-left">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </section>
                    <!-- Page Contents-->
                    <!-- What makes us different-->
                    <!--What makes us different-->
                    <section class="section-60 section-sm-110 novi-background bg-cover">
                        <div class="container">
                            <h3>What makes us different</h3>
                            <hr class="divider divider-lg bg-accent">
                            <div class="row row-30 justify-content-sm-center offset-top-40 offset-sm-top-60 offset-lg-top-80">
                                <div class="col-md-4">
                                    <span class="icon-img"><i class="fa-solid fa-truck-fast" style="font-size:80px; color: #060262;"></i></span>
                                    <div class="pt-5">
                                        <h5>Fast Free Shipping</h5>
                                        <p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="icon-img"><i class="fa fa-stethoscope" style="font-size:80px; color: #060262;"></i></span>
                                    <div class="pt-5">
                                        <h5>Modern equipment</h5>
                                        <p>We use the first-class medical equipment for timely diagnostics of various diseases.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span class="icon-img"><i class="fa-solid fa-headset" style="font-size:80px; color: #060262;"></i></span>
                                    <div class="pt-5">
                                        <h5>24-hour service</h5>
                                        <p>Anytime you need help, you may contact us and our receptionist will make an appointment for you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Call to action-->
                    <section>
                        <div class="container py-2">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 ">
                                    <div class="welcome_thumb ">
                                        <img src="{{asset('assets/frontapp/images/gallery/equipement.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="welcome_docmed_info">
                                        <div class="text-left pt-4 pb-4">
                                            <h3>Best Supplier For <br>
                                                <span class="text-info"> Medical Equipment</span>
                                            </h3>
                                        </div>
                                        <p class="text_p">We Have team with experience of more than a decade, our Professionals worked with prestigious Multinational organizations like GE healthcare, Siemens, Philips, Hitachi, Fuji, Toshiba, Medtronic and more name to be added, Prior
                                            to starting this company 1998 in chattogram.In 2016 we started our new journey in the capital city Dhaka, to provide better and efficient service to our partners countrywide.</p>
                                        <div class=" text-left pt-3">
                                            <button href="about.html" class="btn btn-outline-primary">See More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Main services-->
                    <section class="section-60 section-sm-110 novi-background bg-cover expert_doctors_area doctor_page">
                        <div class="container">
                            <h3>Featured Products</h3>
                            <hr class="divider divider-lg bg-accent">
                            <div class="offset-top-25 offset-md-top-60">
                                <p class="font-weight-normal">All our products are of good quality. Visit all products to see the rest of the product.</p>
                            </div>
                            <div class="row row-30 row-lg-50 offset-top-30 offset-sm-top-60 text-lg-left">
                                <div class="col-xl-3 col-md-3 col-lg-3 col-6">
                                    <a href="#">
                                        <div class="single_expert mb-40">
                                            <span class="pr_badge">Phototherapy</span>
                                            <div class="expert_thumb">
                                                <img src="{{asset('assets\frontapp\images\icons\Phototherapy.png')}}" alt="">
                                            </div>
                                            <div class="experts_name text-center">
                                                <h3><a href="#" style="text-decoration: none;">IREX Duo- LED Phototherapy</a></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-3 col-lg-3 col-6">
                                    <a href="#">
                                        <div class="single_expert mb-40">
                                            <span class="pr_badge">Phototherapy</span>
                                            <div class="expert_thumb">
                                                <img src="{{asset('assets\frontapp\images\icons\Phototherapy.png')}}" alt="">
                                            </div>
                                            <div class="experts_name text-center">
                                                <h3><a href="#" style="text-decoration: none;">IREX Duo- LED Phototherapy</a></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-3 col-lg-3 col-6">
                                    <a href="#">
                                        <div class="single_expert mb-40">
                                            <span class="pr_badge">Phototherapy</span>
                                            <div class="expert_thumb">
                                                <img src="{{asset('assets\frontapp\images\icons\Phototherapy.png')}}" alt="">
                                            </div>
                                            <div class="experts_name text-center">
                                                <h3><a href="#" style="text-decoration: none;">IREX Duo- LED Phototherapy</a></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-md-3 col-lg-3 col-6">
                                    <a href="#">
                                        <div class="single_expert mb-40">
                                            <span class="pr_badge">Phototherapy</span>
                                            <div class="expert_thumb">
                                                <img src="{{asset('assets\frontapp\images\icons\Phototherapy.png')}}" alt="">
                                            </div>
                                            <div class="experts_name text-center">
                                                <h3><a href="#" style="text-decoration: none;">IREX Duo- LED Phototherapy</a></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Latest blog posts-->
                    <section class="  novi-background bg-cover">
                        <div class="container">
                            <h3>Latest blog posts</h3>
                            <hr class="divider divider-lg bg-accent">
                            <div class="row row-30 row-lg-50 justify-content-sm-center offset-top-40 offset-md-top-60">
                                <div class="col-sm-8 col-lg-4">
                                    <!-- Post Modern-->
                                    <article class="post post-modern post-modern-classic">
                                        <!-- Post media-->
                                        <div class="post-media">
                                            <a class="post-media-link" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{asset('assets/frontapp/images/blog/post-13-370x250.jpg')}}" alt=""></a>
                                        </div>
                                        <!-- Post content-->
                                        <div class="post-content text-left">
                                            <!-- Post Title-->
                                            <div class="post-title offset-top-8">
                                                <h4 class="font-weight-bold"><a href="single-post.html">Aspirin for prevention</a></h4>
                                            </div>
                                            <ul class="list-inline list-inline-dashed post-meta">
                                                <li>June 21, 2020 at 8:12pm</li>
                                                <li><a href="blog-grid.html">News</a></li>
                                            </ul>
                                            <!-- Post Body-->
                                            <div class="post-body">
                                                <p>In this installment of “Aspirin for prevention,” physician-researcher Randall Stafford provides tips to calculate the risk of heart…</p>
                                            </div>
                                            <div class="tags group group-sm">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-8 col-lg-4">
                                    <!-- Post Modern-->
                                    <article class="post post-modern post-modern-classic">
                                        <!-- Post media-->
                                        <div class="post-media">
                                            <a class="post-media-link" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{asset('assets/frontapp/images/blog/post-14-370x250.jpg')}}" alt=""></a>
                                        </div>
                                        <!-- Post content-->
                                        <div class="post-content text-left">
                                            <!-- Post Title-->
                                            <div class="post-title offset-top-8">
                                                <h4 class="font-weight-bold"><a href="single-post.html">New operating suites</a></h4>
                                            </div>
                                            <ul class="list-inline list-inline-dashed post-meta">
                                                <li>June 21, 2020 at 8:12pm</li>
                                                <li><a href="blog-grid.html">News</a></li>
                                            </ul>
                                            <!-- Post Body-->
                                            <div class="post-body">
                                                <p>With the opening of the new hospital and the Children’s surgical and imaging centers, Clinia will be redesigning…</p>
                                            </div>
                                            <div class="tags group group-sm">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-8 col-lg-4">
                                    <!-- Post Modern-->
                                    <article class="post post-modern post-modern-classic">
                                        <!-- Post media-->
                                        <div class="post-media">
                                            <a class="post-media-link" href="single-post.html"><img class="img-responsive img-cover" width="370" height="250" src="{{asset('assets/frontapp/images/blog/post-15-370x250.jpg')}}" alt=""></a>
                                        </div>
                                        <!-- Post content-->
                                        <div class="post-content text-left">
                                            <!-- Post Title-->
                                            <div class="post-title offset-top-8">
                                                <h4 class="font-weight-bold"><a href="single-post.html">Epidurals increase in popularity</a></h4>
                                            </div>
                                            <ul class="list-inline list-inline-dashed post-meta">
                                                <li>June 21, 2020 at 8:12pm</li>
                                                <li><a href="blog-grid.html">News</a></li>
                                            </ul>
                                            <!-- Post Body-->
                                            <div class="post-body">
                                                <p>The percentage of pregnant women getting epidurals or other spinal analgesia has climbed to a high of 71…</p>
                                            </div>
                                            <div class="tags group group-sm">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="offset-top-24 offset-lg-top-41"><a class="btn btn-ellipse btn-primary" href="blog-grid.html">View
                        all blog posts</a></div>
                        </div>
                    </section>
                    <!-- Brand-->
                    <section class="py-5 novi-background bg-cover our_department_area">
                        <div class="container">
                            <h3>Brand</h3>
                            <hr class="divider divider-lg bg-accent">
                            <div class="brand-carousel section-padding owl-carousel">
                                <div class="single-logo">
                                    <img src="https://i.postimg.cc/pdMQjC5Q/brand-2.png" alt="">
                                </div>
                                <div class="single-logo">
                                    <img src="https://i.postimg.cc/pdMQjC5Q/brand-2.png" alt="">
                                </div>
                                <div class="single-logo">
                                    <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png" alt="">
                                </div>
                                <div class="single-logo">
                                    <img src="https://i.postimg.cc/d14GzKHn/brand-4.png" alt="">
                                </div>
                                <div class="single-logo">
                                    <img src="https://i.postimg.cc/x8ZM13Sz/brand-5.png" alt="">
                                </div>
                                <div class="single-logo">
                                    <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Google map-->
                    <section>
                        <div class="container">
                            <div class="text-center">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5690404525308!2d90.43285041425467!3d23.762742794223243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a33c91f82b%3A0xb270e1644c735836!2sTech%20Bungalow!5e0!3m2!1sen!2sbd!4v1669193050340!5m2!1sen!2sbd"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </section>
                    <!-- Contacts-->
                    <section class="section-60 section-sm-110 text-center novi-background bg-cover">
                        <div class="container">
                            <div class="row justify-content-sm-center row-30">
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon icon-lg-1 icon-circle icon-secondary-filled mdi mdi-phone novi-icon"></div>
                                    <h5><a href="tel:#">1-800-1234-567</a></h5>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="icon icon-lg-1 icon-circle icon-secondary-filled mdi mdi-map-marker novi-icon"></div>
                                    <h5><a href="#">2130 Fulton Street San Diego,<br class="d-none d-lg-block"> CA 94117-1080 USA</a></h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon icon-lg-1 icon-circle icon-secondary-filled mdi mdi-email-outline novi-icon"></div>
                                    <h5><a href="mailto:#">info@demolink.org</a></h5>
                                </div>
                            </div>
                        </div>
                    </section>

@endsection
