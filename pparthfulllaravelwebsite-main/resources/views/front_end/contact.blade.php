<title>Contact Us</title>
<meta name="description" content="For more info about our organization contact us on +91 7007688968 or reach us by email at parthcharity@gmail.com">

@extends('layouts.main')
<section class="page_banner bg_cover" style="background-image: url({{ asset('front_end/images/slider-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page_banner_content text-center">
                        <h3 class="page_title">Contact</h3>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class="active" href="/contactus">Contact Us</a></li>
                        </ul>
                    </div> <!-- page banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section class="contact_area pt-100 pb-130">
        <div class="services_shape_1" style="background-image: url({{ asset('front_end/images/shape/shape-12.png')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact_form mt-50">
                        <div class="section_title pb-30">
                            <img src="{{ asset('front_end/images/section_icon.png')}}" alt="Icon">
                            <h3 class="title">Get in touch</h3>
                        </div> <!-- section title -->
                        <form action="/contact" method="post">
                        {{ csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="Name" placeholder="Name">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="email" name="Email" placeholder="Email">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="Subject" placeholder="Subject">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="Phone" placeholder="Number">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="Msg" placeholder="Massage"></textarea>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">Send Massage</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-4">
                    <div class="contact_info pt-20">
                        <ul>
                            <li>
                                <div class="single_info d-flex align-items-center mt-30">
                                    <div class="info_icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="info_content media-body">
                                        <p>75 , Sainik Nagar , Telibagh, Lucknow - 226025</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single_info d-flex align-items-center mt-30">
                                    <div class="info_icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="info_content media-body">
                                        <p>+91 7007688968</p>
                                        
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single_info d-flex align-items-center mt-30">
                                    <div class="info_icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="info_content media-body">
                                        <p>parthcharity@gmail.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single_info d-flex align-items-center mt-30">
                                    
                                    <div class="info_content media-body">
                                        <p style="text-align:left;">A small Donation can make a change</p>
                                        <br/>
                                        <p style="font-weight:700; text-align:left;">Bank Name : State Bank Of India</p>
                                        <br/>
                                        <p style="font-weight:700; text-align:left;">Account No :40089328010</p>
                                        <br/>
                                        <p style="font-weight:700; text-align:left;">IFSC :SBIN0012830</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                    
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
