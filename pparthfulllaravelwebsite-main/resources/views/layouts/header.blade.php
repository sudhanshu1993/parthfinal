<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Parth Charitable Trust</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('front_end/images/logo.png')}}" type="image/png">

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
        body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
button {
border-radius: 10px;
  background-color: #F86048;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.container {
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}

    </style>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    
    <!--====== PRELOADER PART START ======-->

    
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header_area">
        <div class="header_navbar navbar_transparent">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('logo.png')}}" alt="logo" style="height: 80px;width: 80px">
                    </a> <!-- logo -->
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                       
                    <ul class="navbar-nav ml-auto">
                        
                             <li>
                                <a class="active" href="/">Home </a>
                                
                            </li>
                            
                                
                                    <li><a href="/about">About</a></li>
                                    
                                    <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/contact">Contact</a></li>
                            
                        </ul>
                    </div>
                    <button onclick="document.getElementById('id01').style.display='block'">Donate Now </button>
                        <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                        <form class="modal-content">
                            <div class="container">
                            <h1 style="text-align:left">Account's Details </h1>
                            <br/>
                            <div class="clearfix" style="text-align:left;">
                            <p><b>Bank Name:</b>State Bank Of India</p>
                                <p><b>Account Number:</b>40089328010</p>
                                <p><b>IFSC Code:</b>SBIN0012830</p>
                                <br/>
                            </div>
                            </div>
                        </form>
                        </div>
                </nav> <!-- navbar -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </header>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

