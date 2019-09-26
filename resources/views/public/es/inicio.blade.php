@extends('public.es.layouts.master')

@section('content')

<div class="top-baner swiper-animate arrows">
      <div class="swiper-container main-slider" style="height:900px;" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
        <div class="swiper-wrapper">
          <div class="swiper-slide active" data-val="0"> 
            <div class="clip" style="position: absolute;height: 70%">
             <div class="bg bg-bg-chrome act" style="background-image:url(plantilla/img/home_1/main_slide_11.jpg)">
             </div>
            </div>
            <div class="vertical-align">
              <div class="container">
              <div class="row">
                <div class="col-md-12">
                <div class="main-title vert-title">
                  <h1 class="color-white delay-1">the best way to predict the future is to invent it</h1>
                  <p class="color-white-op delay-2"></p>
                  <a href="#" class="c-button bg-aqua hv-transparent delay-2"><img src="/plantilla/img/loc_icon.png" alt="">
                    <span>view our tours</span>
                  </a>
                 </div>
                 </div>
                </div>
              </div>
             </div>
          </div>
          <div class="swiper-slide" data-val="1"> 
            <div class="clip" style="position: absolute;height: 70%">
             <div class="bg bg-bg-chrome act" style="background-image:url(plantilla/img/home_1/main_slide_22.jpg)">
             </div>
            </div>
            <div class="vertical-align">
              <div class="container">
              <div class="row">
                <div class="col-md-12">
                <div class="main-title vert-title">
                  <h1 class="color-white delay-1">Where would you like to go?</h1>
                  <p class="color-white-op delay-2"></p>
                  <a href="#" class="c-button bg-aqua delay-2"><img src="assets/img/loc_icon.png" alt=""><span>view our tours</span></a>
                 </div>
                 </div>
                </div>
              </div>
             </div>
          </div>
        </div>    
          <div class="pagination pagination-hidden poin-style-1"></div>
      </div>
          <div class="arrow-wrapp m-200">
          <div class="cont-1170">
            <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
            <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
          </div>
          </div>
                      
  </div> 
     <!--  
    <div class="main-wraper padd-90">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="second-title">
              <h2>The Best Tours</h2>
                <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="radius-mask tour-block hover-aqua">
              <div class="clip">
             <div class="bg bg-bg-chrome act" style="background-image:url(/plantilla/img/home_1/sea_tour_img_1.jpg)">
             </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="tour-caption">
               <div class="vertical-align">
                <h3 class="hover-it">mauritius</h3>
                  <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                  </div>
                <h4>from <b>$860</b></h4>  
               </div>
               <div class="vertical-bottom">
                 <div class="fl">
                <div class="tour-info">
                  <img src="/plantilla/img/people_icon.png" alt="">
                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                </div>
                <div class="tour-info">
                  <img src="/plantilla/img/calendar_icon.png" alt="">
                    <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                </div>
                 </div> 
                <a href="#" class="c-button b-50 bg-aqua hv-transparent fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
               </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="radius-mask tour-block">
              <div class="clip">
             <div class="bg bg-bg-chrome act" style="background-image:url(/plantilla/img/home_1/sea_tour_img_2.jpg)">
             </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="tour-caption">
               <div class="vertical-align">
                <h3 class="hover-it">santorini</h3>
                  <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                  </div>
                <h4>from <b>$750</b></h4>  
               </div>
               <div class="vertical-bottom">
                 <div class="fl">
                <div class="tour-info">
                  <img src="img/people_icon.png" alt="">
                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                </div>
                <div class="tour-info">
                  <img src="/plantilla/img/calendar_icon.png" alt="">
                    <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                </div>
                 </div> 
                <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
               </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="radius-mask tour-block">
              <div class="clip">
             <div class="bg bg-bg-chrome act" style="background-image:url(/plantilla/img/home_1/sea_tour_img_3.jpg)">
             </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="tour-caption">
               <div class="vertical-align">
                <h3 class="hover-it">paros</h3>
                  <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star"></span>
                  </div>
                <h4>from <b>$600</b></h4>  
               </div>
               <div class="vertical-bottom">
                 <div class="fl">
                <div class="tour-info">
                  <img src="img/people_icon.png" alt="">
                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                </div>
                <div class="tour-info">
                  <img src="/plantilla/img/calendar_icon.png" alt="">
                    <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                </div>
                 </div> 
                <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
               </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="radius-mask tour-block">
              <div class="clip">
             <div class="bg bg-bg-chrome act" style="background-image:url(/plantilla/img/home_1/sea_tour_img_4.jpg)">
             </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="tour-caption">
               <div class="vertical-align">
                <h3 class="hover-it">kythira</h3>
                  <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star"></span>
                  </div>
                <h4>from <b>$1050</b></h4>  
               </div>
               <div class="vertical-bottom">
                 <div class="fl">
                <div class="tour-info">
                  <img src="img/people_icon.png" alt="">
                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                </div>
                <div class="tour-info">
                  <img src="img/calendar_icon.png" alt="">
                    <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                </div>
                 </div> 
                <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
               </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="radius-mask tour-block">
              <div class="clip">
             <div class="bg bg-bg-chrome act" style="background-image:url(/plantilla/img/home_1/sea_tour_img_5.jpg)">
             </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="tour-caption">
               <div class="vertical-align">
                <h3 class="hover-it">corfu</h3>
                  <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star"></span>
                  </div>
                <h4>from <b>$500</b></h4>  
               </div>
               <div class="vertical-bottom">
                 <div class="fl">
                <div class="tour-info">
                  <img src="img/people_icon.png" alt="">
                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                </div>
                <div class="tour-info">
                  <img src="img/calendar_icon.png" alt="">
                    <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                </div>
                 </div> 
                <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
               </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="radius-mask tour-block">
              <div class="clip">
             <div class="bg bg-bg-chrome act" style="background-image:url(/plantilla/img/home_1/sea_tour_img_6.jpg)">
             </div>
            </div>
            <div class="tour-layer delay-1"></div>
            <div class="tour-caption">
               <div class="vertical-align">
                <h3 class="hover-it">crete</h3>
                  <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star"></span>
                  </div>
                <h4>from <b>$700</b></h4>  
               </div>
               <div class="vertical-bottom">
                 <div class="fl">
                <div class="tour-info">
                  <img src="/plantilla/img/people_icon.png" alt="">
                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
                </div>
                <div class="tour-info">
                  <img src="/plantilla/img/calendar_icon.png" alt="">
                    <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
                </div>
                 </div> 
                <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png" alt=""><span>view more</span></a>
               </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
<!--

    <div class="main-wraper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="second-title">
              <h2>Beautiful Trips</h2>
                <p class="color-grey">El mundo es demasiado bonito como para viajar sólo por internet.</p>
            </div>
          </div>
        </div>
        <div class="row col-no-padd">

          @foreach($data as $item)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="photo-block hover-aqua">
              <div class="tour-layer delay-1"></div>
              <img src="{{$item->img}}" alt="" style="height: 250px">
                 <div class="vertical-align">
                     <div class="photo-title">
                       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4> 
                      <a class="hover-it" href="{{route('detalletour',['tour'=>$item->slug])}}"><h3>{{$item->nombretour}}</h3></a>
                       <h5 class="delay-1">{{$item->categoriatour}}</h5>
                   </div>
                 </div>
            </div>
          </div>
          @endforeach 
        </div>
    </div>
    </div> -->
    <!-- GAL-ITEM-->
<div class="main-wraper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="second-title">
         
          <h2>Beautiful tours</h2>
          <p class="color-grey">El mundo es demasiado bonito como para viajar sólo por internet.</p>
        </div>
      </div>
    </div>
    <div class="isotope-container row row10">
<div class="row">
@foreach($data as $item)
          <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="radius-mask popular-img">
              <div class="clip">
                <div class="bg bg-bg-chrome act" style="background-image:url({{$item->img}})">
                </div>
               </div>
               <div class="tour-layer delay-1"></div>
               <div class="vertical-bottom">
                 <h4><a href="{{route('detalletour',['tour'=>$item->slug])}}">{{$item->nombretour}}</a></h4>
                          <h5><b class="color-aqua">{{$item->categoriatour}}</b> </h5>
                   </div>
              </div>
            </div>
 @endforeach
</div>
<div class="row">
      <div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
      @foreach($data as $item)
      <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
        <a class="black-hover hover-aqua" href="{{route('detalletour',['tour'=>$item->slug])}}">
          <img class="img-full img-responsive" src="{{$item->img}}" alt="" style="height: 215px">
          <div class="tour-layer delay-1"> </div>
          <div class="vertical-align">
            <div class="date color-white"> <strong>{{$item->categoriatour}}</strong> </div>
            <h4 class="hover-it color-white"><b>{{$item->nombretour}}</b></h4>
          </div>
        </a>
         <div class="vertical-align">
              <div class="photo-title">
                       <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4> 
                      <a class="hover-it" href="{{route('detalletour',['tour'=>$item->slug])}}"><h3>{{$item->nombretour}}</h3></a>
                       <h5 class="delay-1">{{$item->categoriatour}}</h5>
              </div>
          </div>
      </div>
      @endforeach
    </div>     
      <!--
      <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
        <a class="black-hover" href="detail.html">
          <img class="img-full img-responsive" src="/plantilla/img/home_7/gal_6.jpg" alt="">
          <div class="tour-layer delay-1"></div>
          <div class="vertical-align">
            <div class="date color-white">July <strong>19th</strong> to July <strong>2</strong></div>
            <h4 class="color-white"><b>tours in monaco</b></h4>
          </div>
        </a>
      </div> -->

    </div>
  </div>
</div>
    <!--inicio responsabilidad social -->
     <div class="main-wraper" style="margin-top: 60px;">
      <div class="row">
          <div class="col-md-12">
            <div class="second-title">
              <h2>RESPONSABILIDAD SOCIAL</h2>
                <p class="color-grey">El mundo es demasiado bonito como para viajar sólo por internet.</p>
            </div>
          </div>
        </div>
      <div class="clip">
        <div class="bg bg-bg-chrome" style="background-image:url(/plantilla/img/home_1/tour_slider_bg.jpg); height:100%; "> </div>
      </div>
      <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="tour-slide" style="background-color: black ; opacity: 0.6 ">
       <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container">
               <div class="row">
                <div class="col-md-12">
                    <div class="slider-tour padd-90-90">
                      <h2>RESPONSABILIDAD SOCIAL</h2>
                      <h3> Ofrecemos los mejores programas culturales y de naturaleza, un servicio de alta calidad a un costo razonable.</h3> 
                       <h5><b>TCR  </b> </h5>
                      </div>  
                </div>
               </div>
            </div> 
        </div>
        <div class="swiper-slide">
            <div class="container">
               <div class="row">
                <div class="col-md-12">
                    <div class="slider-tour padd-94-94">
                    <h3>ACERCA DE NOSOTROS</h3>
                      
                <h2>L</h2> 
                 <h5>july <b>19th</b> to july <b>26th</b></h5>
                      </div>  
                </div>
               </div>
            </div> 
        </div>
       </div>
       <div class="pagination poin-style-1"></div>
      </div>
    </div>
    <!-- fin de responsabilidad social -->     
<!-- inicio de testimoinios --> 
    <div class="main-wraper bg-grey-2 padd-90">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <div class="second-title">
            <h4 class="color-dark-2-light">Testimonios</h4>          
              <h2>Opiniones de nuestros clientes</h2>
            </div>
        </div>
      </div>
        <div class="row">
          <div class="top-baner arrows">
          <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-val="0">
                <div class="tour-item style-3">
                  <div class="radius-top">
                    <img src="/plantilla/img/default-testimonio.jpg" alt="">
                    <div class="tour-weather">sea tour</div>
                  </div>
                  <div class="tour-desc bg-white">
                    <div class="rate">
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      </div>
                    <img class="tm-people" src="/plantilla/img/default-cliente.jpg" alt="">
                    <h4><a class="tour-title color-dark-2 link-green" href="#">inna lunoe</a></h4>
                    <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                  </div>
                </div>              
              </div>
              <div class="swiper-slide" data-val="1">
                <div class="tour-item style-3">
                  <div class="radius-top">
                    <img src="/plantilla/img/default-testimonio.jpg" alt="">
                    <div class="tour-weather">mountains</div>
                  </div>
                  <div class="tour-desc bg-white">
                    <div class="rate">
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      </div>                  
                    <img class="tm-people" src="/plantilla/img/default-cliente.jpg" alt="">
                    <h4><a class="tour-title color-dark-2 link-green" href="#">alina, mark</a></h4>
                    <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                  </div>
                </div>               
              </div>
              <div class="swiper-slide" data-val="2">
                <div class="tour-item style-3">
                  <div class="radius-top">
                    <img src="/plantilla/img/default-testimonio.jpg" alt="">
                    <div class="tour-weather">sea tour</div>
                  </div>
                  <div class="tour-desc bg-white">
                    <div class="rate">
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      </div>                  
                    <img class="tm-people" src="/plantilla/img/default-cliente.jpg" alt="">
                    <h4><a class="tour-title color-dark-2 link-green" href="#">george ross</a></h4>
                    <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                  </div>
                </div>              
              </div>
              <div class="swiper-slide" data-val="4">
                <div class="tour-item style-3">
                  <div class="radius-top">
                    <img src="/plantilla/img/default-testimonio.jpg" alt="">
                    <div class="tour-weather">mountains</div>
                  </div>
                  <div class="tour-desc bg-white">
                    <div class="rate">
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      <span class="fa fa-heart color-green"></span>
                      </div>                  
                    <img class="tm-people" src="/plantilla/img/default-cliente.jpg" alt="">
                    <h4><a class="tour-title color-dark-2 link-green" href="#">mikel, kim</a></h4>
                    <div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
                  </div>
                </div>               
              </div>          
            </div>
            <div class="pagination  poin-style-1 pagination-hidden"></div>
          </div>
                <div class="swiper-arrow-left offers-arrow color-3"><span class="fa fa-angle-left"></span></div>
          <div class="swiper-arrow-right offers-arrow color-3"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>      
    </div>
  </div>
<!-- inicio de testimoinios --> 
<div class="main-wraper padd-90">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <div class="second-title">
              <h2>best propouses for you</h2>
              <p class="color-grey"> Nos encanta viajar por el Perú para descubrir su riqueza natural y cultural. Queremos contagiarte esta pasión y entusiasmo para que disfrutes al máximo la belleza del país y sus tesoros ocultos. ¡Únete a esta aventura y tomemos juntos el mismo camino!</p>
            </div>
        </div>
      </div>
      <div class="row isotope-container">
        <div class="grid-sizer col-xs-12 col-sm-3"></div>
          <div class="item col-xs-12 col-md-6">
          <div class="row">
                <div class="top-baner arrows">
              <div class="swiper-container offers-slider" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="1">
                  <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                  <div class="swiper-slide" data-val="0">
                    <div class="tour-block tour-block-s-6 radius-5 underline-block hover-blue">
                        <div class="tour-layer delay-1"></div> 
                      <img class="center-image"  src="{{$blog->urlimagen}}" alt="">
                      <div class="tour-caption">
                        <div class="vertical-align">
                          <h4>{{$blog->fechaPublicacion}}</h4>
                          <h3 class="underline hover-it">{{$blog->titulo}}</h3>
                          <p class="color-blue">   </p> 
                          <a href="{{route('detalleBlog',['blog'=>$blog->url])}}" class="c-button b-50 bg-white"><span>view more</span></a> 
                        </div>
                      </div>
                    </div>              
                  </div>
                  @endforeach
                </div>
                  <div class="pagination  poin-style-1 pagination-hidden"></div>
              </div>
                    <div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span></div>  
            </div>
          </div>
          </div>          
        <div class="item col-xs-12 col-md-6">
          <div class="tour-block tour-block-s-7 radius-5 underline-block hover-blue">
              <div class="tour-layer delay-1"></div> 
              <img class="center-image" src="/plantilla/img/oferta1.jpg" alt="">
            <div class="tour-caption">
              <div class="vertical-align">
                <h4>sale <span class="color-blue">-20%</span></h4> 
                <h3 class="underline hover-it">bora bora for HONEYMOON</h3>
                <p class="color-white-light">Cursus libero purus ac cursus ut sed.Nunc cursus libero purus ac<br> congue arcu cursus ut sed vitae pulvinar.</p>                  
              </div>
            </div>
            </div>
          </div>
        <div class="item col-xs-12 col-md-6">
          <div class="tour-block tour-block-s-8 radius-5 hover-blue">
              <div class="tour-layer delay-1"></div> 
              <img class="center-image" src="/plantilla/img/oferta2.jpg" alt="">
            <div class="tour-caption">
              <div class="vertical-align">
                <div class="tb_category">hot sale</div> 
                <h3 class="hover-it">Disney Fantasy cruise</h3>
                <h4>only from <span class="color-blue">$860</span></h4>                  
              </div>
            </div>
            </div>
          </div>                                            
      </div>      
    </div>
  </div>


  <!--     
    <div class="main-wraper padd-90">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="second-title">
              <h2>Ultimos Blog</h2>
                <p class="color-grey">Un viaje de miles de kilómetros empieza con un pequeño paso.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-push-6 col-sm-12">
            <div class="popular-desc text-left">
                <div class="clip">
                <div class="bg bg-bg-chrome act bg-contain" style="background-image:url(/plantilla/img/home_1/map_1.png)">
              </div>
              </div>
              <div class="vertical-align">
                <h3>Descubre los ultimos articulos</h3>
                  <p class="color-grey"> Nos encanta viajar por el Perú para descubrir su riqueza natural y cultural. Queremos contagiarte esta pasión y entusiasmo para que disfrutes al máximo la belleza del país y sus tesoros ocultos. ¡Únete a esta aventura y tomemos juntos el mismo camino!</p>
                    
                <a href="/blog" class="c-button bg-aqua hv-transparent b-50 custom-icon">
                  <img class="img-hide" src="/plantilla/img/flag_icon.png" alt="">
                  <img class="img-hov" src="/plantilla/img/flag_icon_aqua.png" alt="" >
                  <span>ver todos los blog</span></a>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-6 col-md-pull-6 col-sm-12">
            <div class="row">
               @foreach($blogs as $blog)
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask popular-img">
                 <div class="clip">
                <div class="bg bg-bg-chrome act" style="background-image:url({{$blog->urlimagen}})">
                </div>
               </div>
               <div class="tour-layer delay-1"></div>
               <div class="vertical-bottom">
                 <h4><a href="{{route('detalleBlog',['blog'=>$blog->url])}}">{{$blog->titulo}}</a></h4>
                          <h5><b class="color-aqua">{{$blog->fechaPublicacion}}</b> </h5>
                   </div>
              </div>
              </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
        
    </div>-->
  </div>   

@endsection

@section('script')
  
 
        
 </script>
@endsection


