<title>Parth Charitable Society</title>
<meta name="description" content="We are working hard by helping people to make them smile in their tough times , let's get connected together in this journey to help many more">
@extends('layouts.main')
<link rel="shortcut icon" href="{{ asset('front_end/images/favicon.png')}}" type="image/png">

<!--====== Magnific Popup CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/magnific-popup.css')}}">

<!--====== Animate CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/animate.css')}}">

<!--====== Slick CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/slick.css')}}">

<!--====== Font Awesome CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/font-awesome.min.css')}}">

<!--====== Bootstrap CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.min.css')}}">

<!--====== Default CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/default.css')}}">

<!--====== Style CSS ======-->
<link rel="stylesheet" href="{{ asset('front_end/css/style.css')}}">

<style>
    
/*-----------------   New Productes    ------------------*/

.new-producetes {
    float: left;
    width: 100%;
    padding: 50px 0px 40px 0px;
    margin: 0;
    background-blend-mode: multiply;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}

.new-producetes h4 {
    font-size: 35px;
    text-align: center;
    margin: 0 auto;
    font-weight: bold;
    color: #fff;
    margin: 0px;
    padding: 0px 0px 5px 0px;
}

.new-producetes .hr-line {
    background: #fff;
    height: 4px;
    width: 15%;
    margin: 0 auto;
    margin-bottom: 50px;
}


/*---------------------  New-product slider   ----------*/

.card-body {
    padding: 5px 15px !important;
    background: #f3ebeb;
}

.new-producetes h5 {
    font-size: 20px;
    text-align: left;
    margin: 0 auto;
    font-weight: bold;
    color: #056ba3;
    margin: 0px;
    padding: 0px 0px 5px 0px;
    border-bottom: currentColor;
}

.card-text {
    font-size: 13px;
    line-height: 25px;
    margin-bottom: 25px;
    color: #000000;
    text-align: left;
}

.hr-line-curser {
    height: 2px;
    background: #056ba3;
    width: 70%;
    text-align: left;
    padding: 0;
    margin-bottom: 15px;
}

.card-body .btn:hover {
    background: #000;
    color: #fff;
    transition: 0.5s all;
    transition-timing-function: ease-in;
}

.card-body .btn {
    background: #056ba3;
    font-size: 16px;
    color: #fff !important;
    padding: 7px 0px;
    border-radius: 50px;
    font-weight: 600;
    border: none;
    text-align: center;
    margin: 0 auto;
    float: left;
    width: 100%;
}

.carousel-inner {
    margin-bottom: 30px !important;
}

.carousel-indicators {
    position: relative !important;
    left: 0% !important;
    z-index: 15 !important;
    padding-left: 0 !important;
    margin-left: 0% !important;
    text-align: center !important;
    list-style: none !important;
    float: left !important;
    width: 100% !important;
}

.carousel-indicators li {
    display: inline-block !important;
    width: 15px !important;
    height: 15px !important;
    margin: 1px !important;
    text-indent: -999px !important;
    cursor: pointer !important;
    background-color: rgb(5 107 163) !important;
    border-radius: 10px !important;
    border: none !important;
    opacity: 0.6;
    margin-right: 5px !important;
    margin-top: 20px !important;
}

.carousel-indicators .active {
    width: 15px !important;
    height: 15px !important;
    margin: 0 !important;
    background-color: #000 !important;
    border: none !important;
    opacity: 1;
    margin-top: 1px !important;
    margin-right: 10px !important;
    transition: 0.5s all;
    transition-timing-function: ease-in;
    margin-top: 20px !important;
}

.btn-floating {
    width: 45px;
    height: 45px;
    background: #000;
    float: left;
    border-radius: 50%;
    margin: 0 auto;
    text-align: center;
    line-height: 48px;
    font-size: 30px;
    color: #fff;
}

.next {
    position: absolute;
    top: 40%;
    z-index: 999;
    right: -6%;
    padding-left: 6px;
}

.prev {
    position: absolute;
    top: 40%;
    z-index: 999;
    left: -6%;
    padding-right: 5px;
}

.card {
    position: relative !important;
    display: flex !important;
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    flex-direction: column !important;
    min-width: 0 !important;
    background-color: #fff !important;
    background-clip: border-box !important;
    border: 1px solid rgba(0, 0, 0, 0.125) !important;
    border-radius: 0.25rem !important;
    cursor: pointer !important;
}

.content_img{
 position: relative;
 width: 350px;
 height: 350px;
 float: left;
 margin-right: 10px;
}

/* Child Text Container */
.content_img div{
 position: absolute;
 bottom: 0;
 right: 0;
 background: black;
 color: white;
 margin-bottom: 5px;
 font-family: sans-serif;
 opacity: 0;
 visibility: hidden;
 -webkit-transition: visibility 0s, opacity 0.5s linear; 
 transition: visibility 0s, opacity 0.5s linear;
}

/* Hover on Parent Container */
.content_img:hover{
 cursor: pointer;
}

.content_img:hover div{
 width: 350px;
 padding: 8px 15px;
 visibility: visible;
 opacity: 0.7; 
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}



body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>

    <!--====== SLIDER PART START ======-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('front_end/images/slider4.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('front_end/images/slider5.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('front_end/images/slider6.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section class="service_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4">
                    <div class="single_services text-center services_1">
                        <div class="services_icon">
                            <img src="{{ asset('front_end/images/s-icon-1.png')}}" alt="icon" class="wd_40">
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Donate Now</a></h4>
                            <p>A Small Donation Can Make A Change in someone's life. It start from Here. </p>
                        </div>
                        <div class="navbar_btn  d-sm-block" style="width:100%;">
                            <button id="myBtn">Donate Now </button>
                                <div id="myModal" class="modal">
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-4">
                    <div class="single_services text-center services_3">
                        <div class="services_icon">
                            <img src="{{ asset('front_end/images/s-icon-3.png')}}" alt="icon" class="wd_40">
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Send Gift</a></h4>
                            <p>A gift can give a person smile on his face so give a gift of donation and help them to grow .</p>
                        </div>
                        <div class="navbar_btn2 d-sm-block">
                        <a class="main-btn" href="/contact"><i class="fa fa-heart"></i> Send Gift</a>
                    </div>

                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4">
                    <div class="single_services active_2 text-center services_2">
                        <div class="services_icon">
                            <img src="{{ asset('front_end/images/s-icon-2.png')}}" alt="icon" class="wd_40">
                        </div>
                        <div class="services_content">
                            <h4 class="services_title"><a href="#">Be a Volunteer</a></h4>
                            <p>Become A Volunteer Of Our Organization And Make A Change By Helping Others </p>
                        </div>
                        <div class="navbar_btn1  d-sm-block">
                            <a class="main-btn" href="#" onclick="openForm()"><i class="fa fa-heart"></i> Apply Now</a>
                        </div>
                        <div class="form-popup" id="myForm">
                            <form action="/" method="post" class="form-container">
                            {{ csrf_field()}}
                                <h3>Membership Form</h3>

                                <label for="email"><b>Your Name</b></label>
                                <input type="text" placeholder="Enter Name" name="name" required>

                                <label for="psw"><b>Contact Number</b></label>
                                <input type="text" placeholder="Enter Contact Number" name="contactnumber" required>

                                <label for="psw"><b>Address</b></label>
                                <input type="text" placeholder="Enter Address" name="address" required>

                                <button class="main-btn">Send Massage</button>
                                <button class="main-btn" onclick="closeForm()">Close</button>
                            </form>
                        </div>

                        <script>
                        function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    
                        }

                        function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                        }
                        </script>
                    </div> <!-- single services -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== CAMPAING DONER PART START ======-->

    <section class="campaing_doner_area">
        <div class="campaing_area pt-130 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center pb-30">
                            <img src="{{ asset('front_end/images/section_icon.png')}}" alt="Icon">
                            <h3 class="title">Our Running Camapaign</h3>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="campaing_nav pt-15">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="hospital-tab" data-toggle="tab" href="#hospital" role="tab" aria-controls="hospital" aria-selected="true">
                                        <div class="campaing_items items_color_1 d-flex">
                                            <div class="items_icon">
                                                <img src="{{ asset('front_end/images/help-1.jpg')}}" style=width:80px alt="icon">
                                            </div>
                                            <div class="items_content media-body">
                                                <h4 class="items_title">Women and Child Development</h4>
                                                <p>Our organization is helping needed children and women by providing them food and work making them self dependent .</p>
                                            </div>
                                        </div> <!-- campaing items -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="cancer-tab" data-toggle="tab" href="#cancer" role="tab" aria-controls="cancer" aria-selected="false">
                                        <div class="campaing_items items_color_2 d-flex">
                                            <div class="items_icon">
                                                <img src="{{ asset('front_end/images/ChildEducation.jpg')}}" style=width:80px alt="icon">
                                            </div>
                                            <div class="items_content media-body">
                                                <h4 class="items_title">Child Education</h4>
                                                <p>We organize educational classes for students who are not able to go to schools because of their financial conditions and other problems , we also donate books and other stationary to help them keep pushing their education .</p>
                                            </div>
                                        </div> <!-- campaing items -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="environtment-tab" data-toggle="tab" href="#environtment" role="tab" aria-controls="environtment" aria-selected="false">
                                        <div class="campaing_items items_color_3 d-flex">
                                            <div class="items_icon">
                                                <img src="{{ asset('front_end/images/EnvironmentalProtection.jpg')}}" style=width:80px alt="icon">
                                            </div>
                                            <div class="items_content media-body">
                                                <h4 class="items_title">Environtment Recyle</h4>
                                                <p>Our organization is planting  trees. They give us two of the most crucial elements for our survival: oxygen and books. Be part of this campaign and help us to plant more and more trees for our future.</p>
                                            </div>
                                        </div> <!-- campaing items -->
                                    </a>
                                </li>
                            </ul>
                        </div> <!-- campaing nav -->
                    </div>

                    <div class="col-lg-7">
                        <div class="campaing_tab_content mt-30">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="hospital" role="tabpanel" aria-labelledby="hospital-tab">
                                    <div class="campaing_content">
                                        <img src="{{ asset('front_end/images/help-1.jpg')}}" alt="">

                                        <div class="campaing_donate">
                                            <div class="donate_dollar d-flex justify-content-between">
                                                <span>We make a living by what we get, but we make a life by what we give.</span>
                                                
                                            </div> <!-- donate dollar -->
                                            <div class="donate_btn">
                                                <a href="#" class="main-btn"><i class="fa fa-heart"></i> Donate  Now</a>
                                            </div> <!-- donate dollar -->
                                        </div>
                                    </div> <!-- campaing content  -->
                                </div>
                                <div class="tab-pane fade" id="cancer" role="tabpanel" aria-labelledby="cancer-tab">
                                    <div class="campaing_content">
                                        <img src="{{ asset('front_end/images/ChildEducation.jpg')}}" alt="">

                                        <div class="campaing_donate">
                                            <div class="donate_dollar d-flex justify-content-between">
                                                <span>We make a living by what we get, but we make a life by what we give</span>
                                            </div> <!-- donate dollar -->
                                            <div class="donate_btn">
                                                <a href="#" class="main-btn"><i class="fa fa-heart"></i> Donate  Now</a>
                                            </div> <!-- donate dollar -->
                                        </div>
                                    </div> <!-- campaing content  -->
                                </div>
                                <div class="tab-pane fade" id="environtment" role="tabpanel" aria-labelledby="environtment-tab">
                                    <div class="campaing_content">
                                        <img src="{{ asset('front_end/images/EnvironmentalProtection.jpg')}}" alt="">

                                        <div class="campaing_donate">
                                            <div class="donate_dollar d-flex justify-content-between">
                                                <span>We make a living by what we get, but we make a life by what we give.</span>
                                            </div> <!-- donate dollar -->
                                            <div class="donate_btn">
                                                <a href="#" class="main-btn"><i class="fa fa-heart"></i> Donate  Now</a>
                                            </div> <!-- donate dollar -->
                                        </div>
                                    </div> <!-- campaing content  -->
                                </div>
                            </div>
                        </div> <!-- campaing tab content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- campaing area -->
        
        
    </section>

    <!--====== CAMPAING DONER PART ENDS ======-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center pb-30">
                    <h3 class="title" style="text-align:center;">Our Running Camapaign</h3>
                </div>
            </div>
        </div>
    </div>
     &nbsp;       
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Food distribution.jpg')}}" width='100%' height='100%'>
                    <div>We distribute food packages to people who are in need , especially poor colonies where they only can arrange food for them , only one time in a day .</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Food distribution </h6>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Empowering Women socially and Economically.jpg')}}" width='100%' height='100%'>
                    <div>Our NGO’s main motto is to help women who are in need of either educational help or financial help. We help them with maximum support we can provide.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Empowering Women socially and Economically </h6>
                </div>
                            
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Child Development And Their Education.jpg')}}" width='100%' height='100%'>
                    <div>We provide books and stationary to children who are not able to go to school, we also arrange weekly teaching hours to teach poor children and organise events like art and craft to increase creativity among them.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Child Development And Their Education </h6>
                </div>
            </div>
        </div>
    </div>
    &nbsp;
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Fitness Awareness.jpg')}}" width='100%' height='100%'>
                    <div>A healthy brain resides under a healthy body as the saying says parth charitable society
                    Organising yoga , bicycle rally ,dance competition  etc events and making people aware about it’s benefits for each category of people .</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Fitness Awareness : Daily Yoga </h6>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Tree Plantation.jpg')}}" width='100%' height='100%'>
                    <div>No life is possible without trees because  oxygen is essential for all living beings , but people are cutting trees in huge amounts , planting very less of them so our NGO is taking an initiative and planting trees and also organising an awareness program to aware people about its effects.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title"style=text-align:center>Tree Plantation </h6>
                </div>
            </div>
           
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Helping Animals.jpg')}}" width='100%' height='100%'>
                    <div>There are a lot of animals we can see on the roads who have no home and shelter , our ngo has launched a campaign to give something to eat to at least one animal of their locality.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Helping Animals </h6>
                </div>
            </div>
           
        </div>
    </div>
    &nbsp;
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Healthcare.jpg')}}" width='100%' height='100%'>
                    <div>Not every person is capable of paying healthcare bills and buying costly medicines , we as a NGO, try to help people who need medications and provide them medications and also generate funds to help them.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Healthcare</h6>
                </div>
            </div>
          
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Sanitation.jpg')}}" width='100%' height='100%'>
                    <div>As in  India we say “laxmi wahi was karti hai jaha swachta hoti hai ” so our earth is our home and making it clean is every person’s responsibility . Volunteers of our NGO  organise awareness programs from time to time to make people remember their social responsibility.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Sanitation </h6>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <div class="content_img">
                    <img src="{{ asset('front_end/images/Drinking Water.jpg')}}" width='100%' height='100%'>
                    <div>In india in summers we start this campaign first we provide water for birds and animals at our home roofs and at front of our houses , and we also  arrange a “ drinking water point “ so that people who need water can drink from there, we are also running an initiative for cleaning our rivers so that we can drink clean water.</div>
                </div>
                <div class="text-center mb-30">
                    <h6 class="title" style=text-align:center>Drinking Water</h6>
                </div>
            </div>
            &nbsp;
        </div>
    </div>
    
    <!--====== FEATURES PART START ======-->

    <h4 class="title" style="text-align:center;">Gallery</h4>
    <div class="new-producetes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="hr-line"></div>
                </div>
                <div class="col-md-12">
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating prev" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating next" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        </div>

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="{{ asset('front_end/images/Fitness1.jpeg')}}" alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="{{ asset('front_end/images/Fitness2.jpeg')}}" alt="Card image cap" style="height:390px;">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="{{ asset('front_end/images/Fitness5.jpeg')}}" alt="Card image cap" style="height:390px;">
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="{{ asset('front_end/images/Fitness4.jpeg')}}" alt="Card image cap" style="height:390px;">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="{{ asset('front_end/images/Fitness Awareness.jpg')}}" alt="Card image cap" style="height:390px;">
                                            
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>

                            <!--Second slide-->
                        
                        </div>

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                        </ol>

                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>
        </div>
    </div>
    
        <!--====== VOLUNTEER PART START ======-->

    <section class="volunteer_area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center pb-30">
                        <img src="{{ asset('front_end/images/section_icon.png')}}" alt="Icon">
                        <h3 class="title">Our Top Doners</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_1">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/SP Singh.jpg')}}" alt="Volunteer">
                            <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">S P Singh</a></h5>
                                
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_2">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Bhagwan Singh.jpg')}}" alt="Volunteer">
                             <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Bhagwan Singh</a></h5>
                                
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_volunteer mt-30 volunteer_color_3">
                        <div class="volunteer_image">
                            <img src="{{ asset('front_end/images/Dr Archana Singh.jpg')}}" alt="Volunteer">
                             <!-- volunteer social -->
                        </div>
                        <div class="volunteer_content d-flex align-items-center justify-content-center">
                            <div class="content_wrapper">
                                <h5 class="volunteer_name"><a href="#">Dr Archana Singh</a></h5>
                                
                            </div>
                        </div>
                    </div> <!-- single volunteer -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== VOLUNTEER PART ENDS ======-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h3 class="title">Follow Us On Facebook</h3>
                        <div class="single_volunteer mt-30 volunteer_color_3">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fparthcharitablesociety%2F&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style=border:none,overflow:hidden scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                </div>
                <div class="col-lg-6 col-sm-12">

                <h3 class="title">Follow Us On Twitter</h3>
                    <div class="single_volunteer mt-30 volunteer_color_4">
                        <div class="volunteer_image">
                        <a class="twitter-timeline" data-width="340" data-height="500" data-theme="dark" href="https://twitter.com/AnitaSi41811963?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!--====== GO TO TOP PART START ======-->
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
