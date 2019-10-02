@extends('public.es.layouts.master')

@section('content')

<!-- INNER-BANNER -->
<div class="inner-banner " >
  <img class="center-image" src="/plantilla/img/bg_blog.jpg" alt="">
  <div class="vertical-align">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <ul class="banner-breadcrumb color-white clearfix">
              <li><a class="link-blue-2" href="#">home</a> /</li>
              <li><span>blog</span></li>
            </ul>
            <h2 class="color-white">blog</h2>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- fin banner-->

<!-- S_NEWS-ENTRY -->
<div class="main-wraper padd-120">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="second-title">
        <h3 class="title-section" style="text-align: center;"><span>Bienvenido a nuestro blog de viajes</span></h3>
              
              <p>¡Hola! Nos encanta viajar por el Perú para descubrir su riqueza natural y cultural. Queremos contagiarte esta pasión y entusiasmo para que disfrutes al máximo la belleza del país y sus tesoros ocultos. ¡Únete a esta aventura y tomemos juntos el mismo camino!</p>
        </div>
      </div>
    </div>
    <div class="blog-grid row">
      @foreach($data as $item)
      <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
        <div class="s_news-entry style-2">
          <a href="{{route('detalleBlog',['blog'=>$item->url])}}"><img class="s_news-img img-responsive"  src="{{$item->urlimagen}}" style="width:320px; height:230px" alt=""></a>
          <h4 class="s_news-title"><a href="{{route('detalleBlog',['blog'=>$item->url])}}">{{$item->titulo}}</a></h4>
          <div class="tour-info-line clearfix">
            <div class="tour-info fl">
                <img src="img/calendar_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2">{{$item->fechaPublicacion}}</span>
              </div>
                       
          </div>
          <div class="s_news-text color-grey-3">{!!str_limit($item->descripcioncorta,70)!!}</div>
          <a href="{{route('detalleBlog',['blog'=>$item->url])}}" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span>view more</span></a>        
        </div>        
      </div>  
      @endforeach                             
    </div>
    <div class="c_pagination clearfix">
      <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>
      <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>
      <ul class="cp_content color-3">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#">10</a></li>
      </ul>
    </div>    
  </div>
</div>


      
@endsection

@section('script')



  
<script>



$(document).on('click','.pagination a', function(e){

    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];

     $.ajax({                        
                url:'{{ route('listar_blog') }}',
                data:{page:page},
                type: 'GET',           
                dataType:'json',
                success: function(data)             
                {
                
                  $("#principal_blog").html(data);

                }
        });  

});

       
     
</script>

@endsection


