@extends('layouts.app')

@section('content')
    <!-- page-header start-->
    <section class="video_page-header insight_page-header">
        <div class="in_video">
            <video autoplay muted loop>
                <source src="{{ asset('img/insight/header.mp4') }}" type="video/mp4">
            </video>
            <div class="insight_page-content video_page-content">
                <div class="insight_page-text video_page-text">
                    <h3>Partnership with Orchid</h3>
                    <h2><span>Empowering</span> Growth Together</h2>
                    <p>
                        Join our network for innovative solutions, dedicated support, and collaborative growth.
                    </p>
                </div>
                <div class="partnar_header">
                    <div class="default-button">
                        <a href="https://calendly.com/softwareorchid/tech-call" class="main_button partnar_button" style="width: 200px; max-width: 100%;">
                            <span class="button__label">Become a Partner</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- page-header end-->
    <!-- partanarship_essential-area start-->
    <section class="partnar_essential-area section-padding">
        <div class="container">
            <!-- Partnership Importance -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="partnarship-heading">
                        <h2>Why Partnership is So Important for Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Global Collaboration -->
                <div class="col-lg-6">
                    <div class="essential-left">
                        <div class="essential-head">
                            <h3>Global Collaboration for Unmatched Innovation</h3>
                        </div>
                        <div class="essential-description">
                            <p>
                                Our network spans Canada, the US, the UK, and beyond—driving fresh insights and cutting-edge solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Why Partner with Us -->
                <div class="col-lg-6">
                    <div class="essential-left essential-right">
                        <div class="essential-head">
                            <h3>Why Partner with Us?</h3>
                        </div>
                        <div class="essential_des-nav">
                            <ul>
                                <li>Access to an exclusive partner ecosystem</li>
                                <li>Collaboration with industry leaders</li>
                                <li>Expertise in web &amp; app development</li>
                                <li>Comprehensive market insights and support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- What's in it for You -->
            <div class="row pt-60">
                <div class="col-lg-12">
                    <div class="partnarship-heading">
                        <h2>What is in it for You as a Partner?</h2>
                    </div>
                </div>
                <!-- Scalable Software Solutions -->
                <div class="col-lg-6 col-md-6">
                    <div class="key-single essential_key wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="50ms">
                        <h3>Scalable Software Solutions</h3>
                        <p>
                            Access cutting-edge software development services tailored to your business needs, ensuring efficiency and growth.
                        </p>
                    </div>
                </div>
                <!-- Strategic IT Consulting -->
                <div class="col-lg-6 col-md-6">
                    <div class="key-single essential_key wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="50ms">
                        <h3>Strategic IT Consulting</h3>
                        <p>
                            Leverage expert guidance to optimize your IT infrastructure, streamline operations, and enhance security.
                        </p>
                    </div>
                </div>
                <!-- Advanced Networking & Automation -->
                <div class="col-lg-6 col-md-6">
                    <div class="key-single essential_key wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <h3>Advanced Networking & Automation</h3>
                        <p>
                            Implement robust networking solutions and automation strategies to improve connectivity and operational efficiency.
                        </p>
                    </div>
                </div>
                <!-- Competitive Edge in Technology -->
                <div class="col-lg-6 col-md-6">
                    <div class="key-single essential_key wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <h3>Competitive Edge in Technology</h3>
                        <p>
                            Stay ahead with industry-leading insights, innovative solutions, and dedicated support tailored to your business goals.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Transparent Grid Background -->
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
    </section>

    <!-- partanarship_essential-area end-->
    <!-- partnership_skill area start-->
    <section class="partnership_skill-area section-padding" id="software-development-skill">
        <div class="container container-menu">
            <div class="row">
                <div class="col-lg-4">
                    <div class="partnar_skill-heading">
                        <h2>We are and will be with skills</h2>
                    </div>
                    <div class="partnership_skil-navs">
                        <div class="partnership_skill-list">
                            <h4>Core Service</h4>
                            <ul>
                                <li>Software development consulting</li>
                                <li>Mobile app development</li>
                                <li>Web app development</li>
                                <li>Product design</li>
                            </ul>
                        </div>
                        <div class="partnership_skill-list">
                            <h4>Dedicated Solutions</h4>
                            <ul>
                                <li>Software modernization</li>
                                <li>Machine learning & AI</li>
                                <li>Startup DNA</li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="default-button">
                       <a href="#" class="default-anchor">Explore more on what we do</a>
                   </div>
                   <div class="our_partnership-tool">
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/1.png" alt="tool">
                           </div>
                           <span>Paython</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/java.png" alt="tool">
                           </div>
                           <span>Java</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/vue.png" alt="tool">
                           </div>
                           <span>Vue</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/angular.png" alt="tool">
                           </div>
                           <span>Angular</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/kotlin.png" alt="tool">
                           </div>
                           <span>Kotlin</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/nest.png" alt="tool">
                           </div>
                           <span>Nest</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/swift.png" alt="tool">
                           </div>
                           <span>Swift</span>
                       </div>
                       <div class="partnership_tool-single">
                           <div class="img">
                               <img src="{{ asset('img/solution/3.jpg') }}img/tool/flutter.png" alt="tool">
                           </div>
                           <span>Flutter</span>
                       </div>
                   </div> --->
                </div>
                <div class="col-lg-8">
                    <div class="partnership__competencies__content--right">
                        <div class="hex--big-bg-bg">
                            <div class="hex--big-bg">
                                <div class="hex--big">
                                    <div>
                                        <h3 class="title-skill-partner header--size-2 text-light">
                                            5
                                        </h3>
                                        <h4 class="title-skill-partner header--size-3 header__accent">Software-specific roles</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li class="list-item">Business Analyst</li>

                                            <li class="list-item">Engineering Analyst</li>

                                            <li class="list-item">Software Architect</li>

                                            <li class="list-item">Web Engineer</li>

                                            <li class="list-item">Product Designer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hex__container--vertical">
                            <div class="hex__container--horizontal">
                                <div class="hex--small">
                                    <h3 class="title-skill-partner header--size-3 text-light">
                                        20
                                    </h3>
                                    <h4 class="title-skill-partner header--size-5 header__accent">
                                        Team members
                                    </h4>
                                </div>
                                <div class="hex--small">
                                    <h3 class="title-skill-partner header--size-3 text-light">
                                        06
                                    </h3>
                                    <h4 class="title-skill-partner header--size-5 header__accent">
                                        Years in bussiness
                                    </h4>
                                </div>
                            </div>
                            <div class="hex--medium">
                                <div>
                                    <h3 class="title-skill-partner header--size-3 text-light">60%</h3>
                                    <h4 class="title-skill-partner header--size-4 header__accent">of staff</h4>
                                </div>
                                <div>
                                    <ul>

                                        <li class="list-item">Backend</li>

                                        <li class="list-item">Frontend</li>

                                        <li class="list-item">Full Stack</li>

                                        <li class="list-item">Mobile</li>

                                        <li class="list-item">QA</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="hex--small">
                                <h3 class="title-skill-partner header--size-3 text-light">95%</h3>
                                <h4 class="title-skill-partner header--size-5 header__accent">Regulars &amp; Seniors</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partnership_skill area end-->
    <!-- recommendation start -->
    <section class="recommendation-partnership section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partnarship-heading">
                        <h2 class="text-light">How our team works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="recom-img">
                        <img src="{{ asset('img/service/recom.png') }}" alt="recom">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="recommendations-content">
                        <!-- step-single -->
                        <div class="recom-single">
                            <div class="recom_single-img">
                                <img class="recom_first-img" src="{{ asset('img/service/recom_hex.png') }}" alt="hex">
                                <span>A</span>
                                <img class="recom_second-img" src="{{ asset('img/service/dot.png') }}" alt="dot">
                            </div>
                            <h4 class="step_label">Let's have an open discussion</h4>
                        </div>
                        <!-- step-single -->
                        <div class="recom-single">
                            <div class="recom_single-img">
                                <img class="recom_first-img" src="{{ asset('img/service/recom_hex.png') }}" alt="hex">
                                <span>B</span>
                                <img class="recom_second-img" src="{{ asset('img/service/dot.png') }}" alt="dot">
                            </div>
                            <h4 class="step_label">Simply agree with us now</h4>
                        </div>
                        <!-- step-single -->
                        <div class="recom-single">
                            <div class="recom_single-img">
                                <img class="recom_first-img" src="{{ asset('img/service/recom_hex.png') }}" alt="hex">
                                <span>C</span>
                                <img class="recom_second-img" src="{{ asset('img/service/dot.png') }}" alt="dot">
                            </div>
                            <h4 class="step_label">Stay with us & understand how we work in any way</h4>
                        </div>
                        <!-- step-single -->
                        <div class="recom-single">
                            <div class="recom_single-img">
                                <img class="recom_first-img" src="{{ asset('img/service/recom_hex.png') }}" alt="hex">
                                <span>D</span>
                            </div>
                            <h4 class="step_label">Join us for updates or opportunities</h4>
                        </div>
                        <!-- step-single -->
                        <div class="recom-single">
                            <div class="recom_single-img">
                                <img class="recom_first-img" src="{{ asset('img/service/recom_hex.png') }}" alt="hex">
                                <span>E</span>
                            </div>
                            <h4 class="step_label">Create Your Legacy</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recommendation end -->
    <!-- partnership_think start -->
    <section class="pratnership_think-area section-padding">
        <div class="container container-menu">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partnarship-heading">
                        <h2 class="text-light">Partnership in Action</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="all_partnership-think">
                    <!-- Step 1: Pass the Lead -->
                    <div class="think_step-single">
                        <div class="think_step-arrow">
                            <div class="think_step-shape think_step-shape_1"></div>
                            <span class="step_think-label">Pass the Lead</span>
                        </div>
                        <p class="think_desc">
                            Spot a potential client for Orchid Software’s cutting‐edge digital solutions and pass the lead on to us to kickstart the journey.
                        </p>
                    </div>
                    <!-- Step 2: Sales Filter -->
                    <!-- Step 2: Sales Filter -->
                    <div class="think_step-single">
                        <div class="think_step-arrow">
                            <div class="think_step-shape think_step-shape_2"></div>
                            <span class="step_think-label">Sales Filter</span>
                        </div>
                        <p class="think_desc">
                            Our work module evaluates leads for project fit, technical feasibility, and strategic alignment—using automation and expert insights to advance only the best prospects.
                        </p>
                    </div>

                    <!-- Step 3: Commitment -->
                    <div class="think_step-single">
                        <div class="think_step-arrow">
                            <div class="think_step-shape think_step-shape_3"></div>
                            <span class="step_think-label">Commitment</span>
                        </div>
                        <p class="think_desc">
                            Once qualified, we secure clear, customized agreements that underscore our mutual commitment to deliver high-quality tech solutions.
                        </p>
                    </div>
                    <!-- Step 4: Payments -->
                    <div class="think_step-single">
                        <div class="think_step-arrow">
                            <div class="think_step-shape think_step-shape_4"></div>
                            <span class="step_think-label">Payments</span>
                        </div>
                        <p class="think_desc">
                            Our streamlined and secure payment process ensures that you receive your rewards quickly, reflecting the success of our collaboration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- partnership_think end -->
    <!-- partnership reawards start -->
    <section class="partnership-reaward-area section-padding" id="insights">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partnarship-heading">
                        <h2 class="text-dark">Partnership Rewards</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Reward 1: Project Discount -->
                <div class="col-lg-4 reaward_padding">
                    <div class="reaward-single">
                        <h4><span>20%</span>&nbsp;&nbsp;Project Discount</h4>
                        <p>
                            Orchid Software offers a 20% discount on total project fees, making our solutions both cost-effective and high quality.
                        </p>
                        <ul>
                            <li><span>Lower client costs</span></li>
                            <li><span>Optimized budgets</span></li>
                            <li><span>Strategic pricing model</span></li>
                            <li><span>Transparent discounts</span></li>
                        </ul>
                        <img class="arrow_img" src="{{ asset('img/service/arrow.png') }}" alt="Next">
                    </div>
                </div>
                <!-- Reward 2: Basic Project Support -->
                <div class="col-lg-4 reaward_padding">
                    <div class="reaward-single">

                        <h4>Basic Project Support</h4>
                        <p>
                            Enjoy essential support that includes server assistance, minimal design refinements, and standard bug fixes.
                        </p>
                        <ul>
                            <li><span>Server setup &amp; maintenance</span></li>
                            <li><span>Minimal design tweaks</span></li>
                            <li><span>Regular bug fixes</span></li>
                            <li><span>Ongoing technical guidance</span></li>
                        </ul>
                        <img class="arrow_img" src="{{ asset('img/service/arrow.png') }}" alt="Next">
                    </div>
                </div>
                <!-- Reward 3: Reliable Collaboration -->
                <div class="col-lg-4 reaward_padding">
                    <div class="reaward-single">
                        <h4>Reliable Collaboration</h4>
                        <p>
                            Our commitment ensures a smooth and dependable process, offering clarity and long-term support throughout your project.
                        </p>
                        <ul>
                            <li><span>Consistent quality</span></li>
                            <li><span>Responsive support</span></li>
                            <li><span>Clear communication</span></li>
                            <li><span>Trust-driven partnership</span></li>
                        </ul>
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
    </section>



    <!-- partnership reawards end -->
    <!-- partnership video start --
   <section class="partnership_video-area section-padding">
       <div class="container container-menu">
           <div class="row">
              <div class="col-lg-12">
                   <div class="partnarship-heading">
                       <h2 class="text-light">Why is it worth working with us</h2>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-xl-6 col-lg-12">
                   <div class="partnership_video-content">
                       <div class="client-video">
                            <img src="{{ asset('img/solution/3.jpg') }}img/insight/v1.jpg" alt="video">
                            <div class="technology-video">
                                <a class="video-btn popup-youtube" href="https://www.youtube.com/watch?v=Z0A7OMkYQf8">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-12">
                   <div class="partnership_video-descrip">
                        <p class="first_descrip"> <strong>orchid Soft</strong> Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Voluptate, autem reiciendis natus </p>
                        <p> <strong>200+</strong> talented people that build Merixstudio company culture have </p>
                        <p><strong>20+</strong> years of experience in custom software development</p>
                    </div>
                    <div class="partnership-badges">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/1.png" alt="">
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/2.png" alt="">
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/3.png" alt="">
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/5.png" alt="">
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/4.png" alt="">
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/7.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/9.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                                <div class="partnership-badage-single">
                                    <img src="{{ asset('img/solution/3.jpg') }}img/patnar/13.png" alt="">
                                </div>
                            </div>
                         
                        </div>
                    </div>
               </div>
           </div>
       </div>
   </section>
   partnership video end -->
    <!-- partnership-developer start-->
    <section class="partnership-developers">
        <div class="container container-menu">
            <div class="row">
                <div class="partnership_row">
                    <div class="partnership_developers-content">
                        <h2>Are you ready with us?</h2>
                        <div class="partnership_choose-nav">
                            <ul>
                                <li><span><i class="fas fa-check"></i></span>Rusted partner since 2019</li>
                                <li><span><i class="fas fa-check"></i></span>10+ expert-level advisors</li>
                                <li><span><i class="fas fa-check"></i></span>Awarded for custom solutions</li>
                            </ul>
                        </div>
                        <a href="https://calendly.com/softwareorchid/tech-call" class="main_button developer_button2"><span class="button__label">Become a partner</span></a>
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
    </section>

@endsection