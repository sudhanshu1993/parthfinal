@extends ('admin.adminlayouts.adminmain')
<meta name="robots" content="noindex">

<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{ asset('admin/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('admin/css/font.css')}}" type="text/css"/>
<link href="{{ asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 

<body>
<header class="header fixed-top clearfix" style="background-color:#FDC716">
<!--logo start-->
<div class="brand1">
    <a href="/admin/adminindex" class="logo">
	<p>Parth Charitable Society Admin Panel</p>
	</a>

		
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset('front_end/images/logo.png')}}">
                <span class="username">Parth Charitable Trust</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
            </ul>
        </li>
       
    </ul>
</div>
</header>
	
<section id="container">
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                    <a class="active" href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/addgallery">
                        <i class="fa fa-bullhorn"></i>
                        <span>Add Gallery </span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/galleryinfo">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gallery Details</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/admincontact">
                        <i class="fa fa-bullhorn"></i>
                        <span>Connect Us</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/adminmembershipinfo">
                        <i class="fa fa-bullhorn"></i>
                        <span>Membership Details</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
</section>

   


    
    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  
    <form action="{{ route('adminBlogUpdate',$blog->id) }}" method="POST">
      
    @method('PUT')

        @csrf

      
   
    <div class="container">
        <div class="row">
            
            
                <div class="col-xs-12 col-sm-12 col-md-12" style="width:1000px;margin-left:150px;margin-top:85px;">

                    <div class="form-group">

                        <strong>Image Name:</strong>

                            <input type="text" name="imagename" value="{{$blog->imagename}}" class="form-control" placeholder="Name">

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="width:1000px;margin-left:150px">

                    <div class="form-group">

                        <strong>Image alt:</strong>

                        <input type="text" name="imagealt" value="{{$blog->imagealt}}" class="form-control" placeholder="Name">

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="width:1000px;margin-left:150px">

                    <div class="form-group">

                        <strong>Image Title:</strong>
                        <input type="text" name="imagetitle" value="{{$blog->imagetitle}}" class="form-control" placeholder="Name">
                        
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12" style="width:1000px;margin-left:150px">

                    <div class="form-group">

                        <strong>Image Category:</strong>
                        <input type="text" name="categoryname" value="{{$blog->categoryname}}" class="form-control" placeholder="Name">
                        
                        
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            
    
        </div>
        </form>

   
