<title>Gallery</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>

.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

</style>
<script>
    $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
<meta name="description" content=" Our efforts in every moment which brings peace and help for those who need it most are brought together here.">

@extends('layouts.main')
<section class="page_banner bg_cover" style="background-image: url({{ asset('front_end/images/slider-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page_banner_content text-center">
                        <h3 class="page_title">Gallery</h3>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class="active" href="/">Our Gallery</a></li>
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
                

                @foreach($todoArr122 as $todo1)
                    
                    @if($todo1->galleryimage!= "" || $todo1->galleryimage != null)
                        @if (file_exists(public_path().'/upload/admin_profile/'.$todo1->galleryimage ))
                        <div class="col-lg-4 col-sm-6">
                        <button class="btn btn-default filter-button" data-filter="{{$todo1->categoryname}}">{{$todo1->categoryname}}</button>
                
                        <div class="single-blog">
									<a href="{{asset('/upload/admin_profile/')}}/{{$todo1->galleryimage}}">
										<img src="{{asset('/upload/admin_profile/')}}/{{$todo1->galleryimage}}" alt="{{$todo1->imagealt}}" title="{{$todo1->imagetitle}}">
                                        <p>{{$todo1->imagename}}</p>
                                    </a>
                                    </div>
								</div>
							@endif
						@endif
					@endforeach
            </div> 
        </div>
        </div> 
    </section>
