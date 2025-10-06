@extends('layouts.app')

@section('content')
<!-- page-header start-->
<section class="all_page-header" style="background-image: url('{{ asset('img/service/service_detail.jpg') }}');">
    <div class="conatiner container-menu">
        <div class="row">
            <div class="col-lg-12">
                <div class="all_page-content carrer_page-content">
                    <div class="all_page-text carrer_page-text">
                        <h2>Shape the Future—Together</span></h2>
                        <p>Turn your vision into reality with expert innovation and seamless execution.</p>
                    </div>
                    <div class="default-button">
                        <a href="https://calendly.com/softwareorchid/tech-call" class="main_button service_detail_btn"><span class="button__label">Schedule a Tech Call</span></a>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">

            </div>


        </div>
    </div>
</section>
<!-- page-header end-->
<!-- solution-page start-->
<section class="contact">
    <div class="container container-menu">
        <div class="row">
           
            <div class="col-lg-6 col-md-12">
                <div class="expart-title">
                    <h2 class="text-light">Benefits Await When You <span>Connect!</span></h2>
                </div>
                <div class="startup-box contact-box">
                    <div class="startup_mask"></div>
                    <div class="startup-list">
                        <ul>
                            <li>Scalable Software Solutions</li>
                            <li>Competitive Edge in Technology</li>
                            <li>Create something that keeps the investor on your side</li>
                            <li>Work hand in hand with design & development team</li>
                            <li>Our work is of an exceptionally high standard </li>
                            <li>We are committed to improving your business</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-head">
                     <div class="expart-title">
                        <h2 class="text-light">Tell us about your <span>Enquiry</span></h2>
                    </div>
                </div>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <!-- Tabs nav -->
                <form method="POST" action="{{ route('contact-form') }}">
                    @csrf
                    <div class="orchid-contact">
                        <div class="nav-tabs">
                            <select id="service-select" name="query_tag" class="soluction_nav-link" required>
                                <option value="">Would you like to ...</option>
                                <option value="talent-hire">Hire Developer</option>
                                <option value="partnership">Partnershop With Orchid Software</option>
                                <option value="web development">Web and App Development</option>
                                <option value="tech-support">Startup Tech Support</option>
                                <option value="e-comm">E-Commerce (Shopify & Wordpress) Customization</option>
                            </select>
                            <input type="text" name="firstName" value="" placeholder="* First Name" class="soluction_nav-link " required />
                            <input type="text" name="lastName" value="" placeholder="* Last Name" class="soluction_nav-link " required />
                            <input type="text" name="email" value="" placeholder="* Email" class="soluction_nav-link " required />
                            <input type="tel" name="phone" value="" maxlength="10" minlength="10" placeholder="* Phone" class="soluction_nav-link" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                            <textarea class="soluction_nav-link" placeholder="* Please write your query" name="query" rows="4" required=""></textarea>
                        </div>

                    </div>
                    <div>
                        <button type="submit" class="form_button"><span class="button__label">Connect Now</span></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- solution-page end-->

<div class="conatiner ">
    <div class="row">
        <div class="col-lg-12">

            <div class="contact-section">
                <div class="contact-box">
                    <!-- Phone Icon -->
                    <i class="fa-brands fa-whatsapp"></i>
                    <div class="contact-label">WhatsApp Us</div>
                    <a href="https://chat.whatsapp.com/KsXiw0Xd9hU7yQ8MsIotgY">
                        <div class="contact-value">Orchid Software</div>
                    </a>
                </div>

                <div class="contact-box">
                    <!-- Telegram Icon -->
                    <i class="fa-brands fa-telegram"></i>
                    <div class="contact-label">Telegram Us</div>
                    <a href="https://t.me/orchid_software">
                        <div class="contact-value">Orchid Software</div>
                    </a>
                </div>

                <div class="contact-box">
                    <!-- Email Icon -->
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <div class="contact-label">Email Us</div>
                    <a href="mailto:info@orchidsw.com">
                        <div class="contact-value email">info@orchidsw.com</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="clearfix"></div>

@endsection