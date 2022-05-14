@extends('layouts.app')
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
                <li>
                <a href="{{ route('logout') }}"
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
<!--header start-->
<!--sidebar start-->

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
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
<div class="container">
      <table class="table container" style="width:1000px;margin-left:15px;">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Image Name</th>
            <th>Image Alt </th>
            <th>Image Title</th>
            <th>Image Category</th>
            <th>Action</th>
           </tr>
        </thead>
        @foreach($todoArr124 as $todo)
            <tbody>
                <tr>
                    <td data-breakpoints="xs">{{$todo->id}}</td>
                    <td>{{$todo->imagename}}</a></td>
                    <td>{{$todo->imagealt}}</td>
                    <td>{{$todo->imagetitle}}</td>
                    <td>{{$todo->categoryname}}</td>
                    <td>
                    <a href="{{route('adminBlogEdit',$todo->id)}}" class="btn bg-primary text-white btn-sm">
                          <i class="fa fa-edit"></i>
                        </a>
                    <form method="POST" action="{{route('adminBlogDestroy',$todo->id)}}" id="delete{{$todo->id}}" style="display:none;"> 
                        @csrf
                        @method('DELETE')
                    </form> 
                    <a href="" onclick="if (confirm('Are you sure !!!')) {event.preventDefault();document.getElementById('delete{{$todo->id}}').submit();}else{event.preventDefault();}" class="btn bg-dark text-white btn-sm">
                        <i class="fa fa-times"></i>Delete Image
                    </a></td>
                </tr>
       </tbody>
        @endforeach
    </table>
    
    </div>
  </div>
</div>
</div>
</div>
</section>
</section>
