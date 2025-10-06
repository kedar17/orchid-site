@extends('layouts.app')

@section('content')
<section class="hero-area section">
    <div class="container-fluid">
        <div class="row">
            <h4 class="home-intro__overheading underlined-heading underlined-heading--animate">
                <span class="underlined-heading__wrapper">
                    <span class="underlined-heading__content">
                        we do
                    </span>
                </span>
            </h4>
        </div>
        <div class="row">
            <div class="slider-main">
                <div class="hero-slider owl-carousel owl-theme">

                    <div class="hero-single titlt" data-tilt data-tilt-max="20">
                        <img src="{{ asset('img/banner/3.png') }}" alt="hero1">
                    </div>


                    <div class="hero-single titlt" data-tilt data-tilt-max="20">
                        <img src="{{ asset('img/banner/2-1.png') }}" alt="hero1">
                    </div>

                    <div class="hero-single titlt" data-tilt data-tilt-max="20">
                        <img src="{{ asset('img/banner/2-2.png') }}" alt="hero1">
                    </div>

                    <div class="hero-single titlt" data-tilt data-tilt-max="10">
                        <img src="{{ asset('img/banner/1.png') }}" alt="hero1">
                    </div>


                </div>
                <span class="hero__text_more">pull the magnet</span>
                <p class="hero__subtitle">We have 10+ experienced full stack developers to take your business
                    to new heights</p>
                <div class="down-butn">
                    <a href="javascript:void(0)" class="down"><i class="fas fa-caret-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end-hero-area -->
<!--star service-area -->
<section class="service-area homepage__services home-services section">
    <div class="container">
        <div class="row">
            <div class="service-head">
                <h2 class="service-title">our services</h2>
                <div class="home-services__splitter"></div>
                <div class="home-services__wrapper">

                    <div class="home-services__item">
                        <a href="/our-services" class="home-services__item-link">

                            <figure class="home-services__item-figure">
                                <img src="{{ asset('img/service/2.png') }}" alt="sr" class="home-services__item-image">
                            </figure>

                            <div class="home-services__item-name">
                                <span class="home-services__item-name-wrapper">Web <br> Development</span>
                            </div>
                        </a>
                    </div>

                    <div class="home-services__item">
                        <a href="/our-services" class="home-services__item-link">
                            <figure class="home-services__item-figure">
                                <img src="{{ asset('img/service/4.png') }}" alt="sr" class="home-services__item-image">
                            </figure>
                            <div class="home-services__item-name">
                                <span class="home-services__item-name-wrapper">App <br>
                                    Development</span>
                            </div>
                        </a>
                    </div>

                    <div class="home-services__item">
                        <a href="/our-services" class="home-services__item-link">
                            <figure class="home-services__item-figure">
                                <img src="{{ asset('img/service/1.png') }}" alt="sr" class="home-services__item-image">
                            </figure>
                            <div class="home-services__item-name">
                                <span class="home-services__item-name-wrapper">Software <br> Development</span>
                            </div>
                        </a>
                    </div>

                    <div class="home-services__item">
                        <a href="/our-services" class="home-services__item-link">
                            <figure class="home-services__item-figure">
                                <img src="{{ asset('img/service/3.png') }}" alt="sr" class="home-services__item-image">
                            </figure>
                            <div class="home-services__item-name">
                                <span class="home-services__item-name-wrapper">Tech <br> Supports <br></span>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <div class="transparent-grid">
        <div class="transparent-grid__container">
            <div class="transparent-grid__row">
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
                <div class="transparent-grid__column"></div>
            </div>
        </div>
    </div>

    <div class="home-services__cutoff">
        <div class="transparent-grid">
            <div class="transparent-grid__container">
                <div class="transparent-grid__row">
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                    <div class="transparent-grid__column"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end service-area -->

<!--start solutions-area -->
<section class="solution-area section">
    <div class="container">
        <div class="row">
            <div class="solution-head">
                <p>Take full advantage of tech solutions! <br>
                    Launch innovative digital products faster. <br>
                    Rethink your IT strategy by embracing disruptive user-centric design & software
                    architectural patterns.</p>
                <h2 class="solution_title">Dedicated Solutions</h2>
                <div class="soluiton_line">
                    <div class="solution-height"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="solution_nav">
                <ul class="nav nav-tabs" id="nav-tab2" role="tablist">
                    <li>
                        <a class="nav-link" id="nav-dna-tab" data-bs-toggle="tab" href="#nav-dna" role="tab"
                            aria-controls="nav-modiernization" aria-selected="false">Startup Tech Support</a>
                    </li>
                    <li>
                        <a class="nav-link" id="nav-modiernization-tab" data-bs-toggle="tab"
                            href="#nav-modiernization" role="tab" aria-controls="nav-modiernization"
                            aria-selected="false">Web Development</a>
                    </li>
                    <li>
                        <a class="nav-link" id="nav-machine-tab" data-bs-toggle="tab" href="#nav-machine"
                            role="tab" aria-controls="nav-modiernization" aria-selected="false">Api Integration</a>
                    </li>
                    <li>
                        <a class="nav-link" id="nav-machine-tab" data-bs-toggle="tab" href="#nav-machine"
                            role="tab" aria-controls="nav-modiernization" aria-selected="false">Custom App Integration</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content all_solution_slider px-4" id="nav-tabContent2">
                <!-- single_slider -->
                <div class="solution_slider tab-pane fade active show" id="nav-dna" role="tabpanel"
                    aria-labelledby="nav-dna-tab">
                    <div class="solution_slide_image solution_slide_image_001">
                        <img src="{{ asset('img/solution/3.jpg') }}" alt="solution">
                        <!-- <div class="overlay-video">
                                    <div class="text">
                                        <div class="technology-video">
                                            <a class="video-btn video-btn2 popup-youtube"
                                                href="https://www.youtube.com/watch?v=Z0A7OMkYQf8">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                    <div class="solution_slide_content">
                        <h3>A good word for the organization</h3>
                        <p>At Orchid Software, we combine modern technology with clean, orchid design to build digital solutions that work beautifully.
                            We help businesses create websites, apps, and branding that are not only attractive but also easy to use.</p>
                        <a href="/about-us" class="solution_btn">read more</a>
                    </div>
                </div>

            </div>
            <div class="solution-head solution-head2">
                <div class="soluiton_line soluiton_line_bottom">
                    <div class="solution-height"></div>
                </div>
                <p>You have ideas. We have software solutions.</p>
                <h2 class="solution_title">Time to join forces.</h2>
                <a href="https://calendly.com/softwareorchid/tech-call" class="main_button"><span class="button__label">Schedule A Tech Call</span></a>
            </div>
        </div>
    </div>
</section>
<!-- featres area start-->
<section class="key_feature-area bg-cover section-padding" style="background-image:url('{{ asset('img/mbolie_solution.png') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="key-header logoColor">
                    <h2 class="text-center">Benefits of Hiring Orchid <span>Software</span> Web Engineers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="key-single">
                    <h3>Development Capacity</h3>
                    <p>Our engineers bring extensive experience in modern web development, ensuring scalable and high-performance solutions. From custom applications to complex system integrations, we deliver robust and reliable results.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="key-single">
                    <h3>Highly Skilled Engineers</h3>
                    <p>Our team comprises talented developers with deep expertise in backend and frontend technologies. They possess a strong problem-solving approach, ensuring precision in coding and optimization.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="key-single">
                    <h3>Hands-on Custom and Web API Integration</h3>
                    <p>Seamlessly integrating third-party APIs and custom solutions is our forte. We ensure smooth communication between various web services, enhancing functionality and performance for your platform.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="key-single">
                    <h3>Reliable IT Service (24/7)</h3>
                    <p>We provide round-the-clock support to ensure the uninterrupted performance of your digital infrastructure. Our proactive approach to maintenance and troubleshooting guarantees seamless operations.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="rain-field">
        <i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i><i class="rain"></i>
    </div>
</section>

<!-- featres area end-->
<section class="orchid-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="expart-title text-center ">
                    <h2 class="text-light"> why Orchid<span class="why_title"> software?</span></h2>
                </div>
            </div>
        </div>
        <div class="row pt-60">
            <div class="col-lg-12">
                <div class="orchid_info-items">
                    <div class="orchid_info-items-musk"></div>
                    <ul>
                        <li>
                            <p>50+ clients worldwide</p>
                        </li>
                        <li>
                            <p>10+ expert-level Developers</p>
                        </li>
                        <li>
                            <p>Rated 4.8 / 5.0 by 25 clients</p>
                        </li>
                        <li>
                            <p>Full-stack. Since 2019</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- set-startp area start-->
<section class="set-startup section-padding" id="essential-dna">
    <div class="container">
        <div class="row">
            <div class="expart-title">
                <h2 class="text-light">
                    What are you going to get with <br><span>Startup DNA?</span>
                </h2>
            </div>
        </div>
        <div class="row pt-60">
            <!-- Server Support Offer -->
            <div class="col-lg-3 col-md-3">
                <div class="startup_dna-box startup_dna-side">
                    <div class="startup_dna_mask"></div>
                    <div class="dna-head">
                        <h6>Optional Add-On</h6>
                        <h4>Server Support</h4>
                        <p>Technology Assessment &amp; Validation</p>
                    </div>
                    <div class="dna-content">
                        <h5>You get:</h5>
                        <ul>
                            <li>
                                <span><i class="fas fa-angle-right"></i></span>
                                In-depth technical feasibility analysis
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i></span>
                                Evaluation of infrastructure requirements
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i></span>
                                Comprehensive technical validation of your concept
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product (Web Design & Web Development) Offer -->
            <div class="col-lg-6 col-md-6">
                <div class="startup_dna-box startup_dna-box_center">
                    <div class="startup_dna_mask"></div>
                    <div class="dna-head">
                        <h6>Essential DNA</h6>
                    </div>
                    <div class="startup_dna-box_center_container">
                        <!-- Web Design -->
                        <div class="dna-box_center__item">
                            <div class="dna-head">
                                <p>Web Design</p>
                            </div>
                            <div class="dna-content">
                                <h5>You get:</h5>
                                <ul>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        Custom logo design, typography, &amp; color palette
                                    </li>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        Comprehensive brand direction manual
                                    </li>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        10-12 high-fidelity design screens
                                    </li>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        Interactive, clickable prototype
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Web Development -->
                        <div class="dna-box_center__item">
                            <div class="dna-head">
                                <p>Web Development</p>
                            </div>
                            <div class="dna-content">
                                <h5>You get:</h5>
                                <ul>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        Detailed user journeys &amp; story mapping
                                    </li>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        Prioritized feature list (PVP)
                                    </li>
                                    <li>
                                        <span><i class="fas fa-angle-right"></i></span>
                                        Accurate project estimate &amp; timeline
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="startup_dna-box_img">
                        <img src="{{ asset('img/robot.png') }}" alt="robot">
                    </div>
                </div>
            </div>
            <!-- Lead Generation Assistant Offer -->
            <div class="col-lg-3 col-md-3">
                <div class="startup_dna-box startup_dna-side">
                    <div class="startup_dna_mask"></div>
                    <div class="dna-head">
                        <h6>Optional Add-On</h6>
                        <h4>Lead Generation Assistant</h4>
                        <p>Empowering Your Growth</p>
                    </div>
                    <div class="dna-content">
                        <h5>You get:</h5>
                        <ul>
                            <li>
                                <span><i class="fas fa-angle-right"></i></span>
                                Engaging multi-page design
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i></span>
                                High-conversion landing page strategy
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i></span>
                                Innovative formats to showcase your ideas
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border_box-bottom">


        </div>

    </div>
</section>
<!-- set-startp area end-->
<!-- benefit Startup start -->
<section class="benefit_startup-area section-padding">
    <div class="container container-menu">
        <div class="row">
            <div class="expart-title">
                <h2 class="text-light">Why stay with us and what things <br> <span>will improve if you do</span></h2>
            </div>
        </div>
        <div class="row pt-60">
            <div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12">
                <div class="startup-box">
                    <div class="startup_mask"></div>
                    <div class="startup-list">
                        <ul>
                            <li>By using prototypes the user can work very conveniently</li>
                            <li>Build eye-catching software that keeps users top of mind</li>
                            <li>Create something that keeps the investor on your side</li>
                            <li>Work hand in hand with design & development team</li>
                            <li>Our work is of an exceptionally high standard </li>
                            <li>We are committed to improving your business</li>
                        </ul>
                    </div>
                    <img class="startup_img" src="{{ asset('img/file.png') }}" alt="file">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection