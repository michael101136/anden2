@extends('public.es.layouts.master')

@section('content')

<div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
      
            <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-2.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Bienvenido a</div>
                <div class="sl-title">Istanbul</div>
                <div class="sl-title-bot">Starting <span>$255</span> per night</div>
              </div>d
            </li>
            <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-4.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Bienvenido a</div>
                <div class="sl-title">Dubai</div>
                <div class="sl-title-bot">Starting <span>$280</span> per night</div>
              </div>
            </li>
          </ul>
        </div>
        <!-- slider info--
        <div class="slider-info-wrap clearfix">
          <div class="slider-info-content">
            @foreach($data as $item)
            <div class="slider-info-item">
              <div class="info-item-media"><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt>
                <div class="info-item-text">
                  <div class="info-price font-4"><span>Precio</span> $105</div>
                  <div class="info-temp font-4"><span> {{$item->nombretour}}  </span>  </div>
                  <p class="info-text"></p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4"> {{$item->categoriatour}} </span> </h3>
                  <div class="price"><span>  </span> </div><a href="{{route('detalletour',['tour'=>$item->slug])}}" class="button">Detalle</a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        -- ! slider-info-->
      </div>

      <section class="page-section pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <!--<h6 class="title-section-top font-4">Special offers</h6>-->
              <h2 class="title-section"><span>DESTINOS</span> POPULARES</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <!--<p>Nullam ac dolor id nulla finibus pharetra. Sed sed placerat mauris. Pellentesque lacinia imperdiet interdum. Ut nec nulla in purus consequat lobortis. Mauris lobortis a nibh sed convallis.</p>-->
            </div>
            <!--<div class="col-md-12"><img src="/public/pic/promo-1.png" data-at2x="pic/promo-1@2x.png" alt class="mt-md-0 mt-minus-70"></div>-->
          </div>
        </div>
        <div class="container">
        <div class="row blog-col">
              <!-- Blog Post-->
              @foreach($data as $item) 
              <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <!-- Blog item-->
                <div class="blog-item clearfix border boxed">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog-single.html">
                      <div class="pic"><img src="{{$item->img}}" style="height: 200px" data-at2x="{{$item->img}}" alt=""></div></a></div>
                  <!-- blog body-->
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                      <h6 class="blog-title"> {{$item->nombretour}} </h6></a>
                    <!-- Text Intro-->
                    <p>{{$item->descripcion}}</p><a href="{{route('detalletour',['tour'=>$item->slug])}}" class="blog-button">Read more</a>
                  </div>
                </div>
                <!-- ! Blog item-->
              </div>
              @endforeach
              <!-- ! Blog Post-->
             
            </div>
          </div>
      </section>
      <!-- ! page section-->
      
      <!-- page section about-->
      <section class="small-section cws_prlx_section bg-white-80 pb-0"><img src="/public/img/banner-tour.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-md-60">
              <!-- section title-->
              <h2 class="title-section-top alt gray">About</h2>
              <h2 class="title-section alt gray mb-20 font-bold"><span>Turismo Rural Comunitario</span></h2>
              <!-- ! section title-->
              <p class="mb-30">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non cursus. Sed commodo odio et ipsum sagittis tincidunt.</p>
              <div class="cws_divider short mb-30"></div>
              <h3 class="font-medium font-5">Andean Adventures</h3>
            </div>
            <div class="col-md-6 flex-item-end"><img src="/public/img/tcr.jpg" alt class="mt-minus-100"></div>
          </div>
        </div>
      </section>
      <!-- ! page section about-->
      <section class="page-section pt-70 pb-140">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <!-- title section-->
              <h2 class="title-section text-center mt-0 mb-0">Testimonios</h2>
              <!-- ! title section-->
              <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
              <!-- twitter full screen-->
              <div class="full-screen">
                <ul class="tweet_list carousel-pag main-color owl-carousel owl-theme" style="opacity: 1; display: block;">
                  <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 4620px; left: 0px; display: block; transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
                      <div class="owl-item" style="width: 770px;">
                        <li class=" tweet_odd">
                          <i class="twitt-icon"></i>
                          <p><span class="tweet_text">testimonio1<br><a href="/reviews">ver mas</a></span><br></p>
                        </li>
                      </div>
                      <div class="owl-item" style="width: 770px;">
                        <li class=" tweet_odd">
                          <p> <span class="tweet_text"> testimonio2<a href="/reviews">ver mas</a></span><br></p>
                        </li>
                      </div>
                      <div class="owl-item" style="width: 770px;">
                        <li class="  tweet_odd">
                          <i class="twitt-icon"><img scr="/public/img/team-1.jpg"></i>
                          <p><span class="tweet_text">testimonio3<br>
                          <a href="/reviews">ver mas</a></span><br></p>
                        </li>
                      </div>
                    </div>
                  </div>
                  <div class="owl-controls clickable"><div class="owl-pagination">
                  </div>
                </ul>
              </div>
                            <!-- ! twitter full screen-->
            </div>
          </div>
        </div>
      </section>
      <!-- testimonials section--
      <section class="small-section cws_prlx_section bg-blue-40"><img src="/public/img/testimonial/testimonials.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Happy Memories</h6>
              <h2 class="title-section alt-2"><span>Our</span> Testimonials</h2>
              <div class="cws_divider mb-25 mt-5"></div>
            </div>
          </div>
          <div class="row">
            !-- testimonial carousel--
            <div class="owl-three-item">
              <!-- testimonial item--
              <div class="testimonial-item">
                <div class="testimonial-top">
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content--
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item--
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/2.jpg" data-at2x="pic/testimonial/top-bg/2@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/2.jpg" data-at2x="pic/testimonial/author/2@2x.jpg" alt></div>
                </div>
                <!-- testimonial content--
                <div class="testimonial-body">
                  <h5 class="title"><span>Peter</span> Robertson</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Nulla elit justo, dapibus ut lacus ac, ornare elementum neque.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item--
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/3.jpg" data-at2x="pic/testimonial/top-bg/3@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/3.jpg" data-at2x="pic/testimonial/author/3@2x.jpg" alt></div>
                </div>
                <!-- testimonial content--
                <div class="testimonial-body">
                  <h5 class="title"><span>Kathy</span> Harrison</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Maece facilisis sit amet mauris eget aliquam. Integer vitae.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item--
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content--
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! testimonials section-->
      <!-- gallery section-->

      
  
      <!-- ! gallery section-->
      <!-- latest news-->
          <!--<section class="small-section cws_prlx_section bg-blue-40"><img src="/public/pic/parallax-3.jpg" alt class="cws_prlx_layer">-->
          <!--  <div class="container">-->
          <!--    <div class="row mb-50">-->
          <!--      <div class="col-md-8">-->
          <!--        <h6 class="title-section-top font-4">Latest News</h6>-->
          <!--        <h2 class="title-section alt-2"><span>Our</span> Blog</h2>-->
          <!--        <div class="cws_divider mb-25 mt-5"></div>-->
          <!--        <p class="color-white">Vestibulum feugiat vitae tortor ut venenatis. Sed cursus, purus eu euismod bibendum, diam nisl suscipit odio, vitae ultrices mauris dolor quis mauris. Curabitur ac metus id leo maxim.</p>-->
          <!--      </div>-->
          <!--      <div class="col-md-4"><i class="flaticon-suntour-calendar title-icon alt"></i></div>-->
          <!--    </div>-->
          <!--    <div class="carousel-container">-->
          <!--      <div class="row">-->
          <!--        <div class="owl-two-pag pagiation-carousel mb-20">-->
                    <!-- Blog item-->
          <!--          <div class="blog-item clearfix">-->
                      <!-- Blog Image-->
          <!--            <div class="blog-media"><a href="blog-single.html">-->
          <!--                <div class="pic"><img src="pic/blog/270x270/1.jpg" data-at2x="pic/blog/270x270/1@2x.jpg" alt></div></a></div>-->
                      <!-- blog body-->
          <!--            <div class="blog-item-body clearfix">-->
                        <!-- title--><a href="blog-single.html">
          <!--                <h6 class="blog-title">Sed semper lacus et enim sodales</h6></a>-->
          <!--              <div class="blog-item-data">Mon, 03-23-2016</div>-->
                        <!-- Text Intro-->
          <!--              <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac, tempor gravida arcu.</p><a href="blog-single.html" class="blog-button">Read more</a>-->
          <!--            </div>-->
          <!--          </div>-->
                    <!-- ! Blog item-->
                    <!-- Blog item-->
          <!--          <div class="blog-item clearfix">-->
                      <!-- Blog Image-->
          <!--            <div class="blog-media"><a href="blog-single.html">-->
          <!--                <div class="pic"><img src="pic/blog/270x270/2.jpg" data-at2x="pic/blog/270x270/2@2x.jpg" alt></div></a></div>-->
                      <!-- blog body-->
          <!--            <div class="blog-item-body clearfix">-->
                        <!-- title--><a href="blog-single.html">
          <!--                <h6 class="blog-title">Aenean nec urna ullamcorper</h6></a>-->
          <!--              <div class="blog-item-data">Mon, 03-23-2016</div>-->
                        <!-- Text Intro-->
          <!--              <p>Nullam efficitur lorem eu felis rutrum elementum. Vestibulum feugiat massa id ante scelerisque blandit.</p><a href="blog-single.html" class="blog-button">Read more</a>-->
          <!--            </div>-->
          <!--          </div>-->
                    <!-- ! Blog item-->
                    <!-- Blog item-->
          <!--          <div class="blog-item clearfix">-->
                      <!-- Blog Image-->
          <!--            <div class="blog-media"><a href="blog-single.html">-->
          <!--                <div class="pic"><img src="pic/blog/270x270/3.jpg" data-at2x="pic/blog/270x270/3@2x.jpg" alt></div></a></div>-->
                      <!-- blog body-->
          <!--            <div class="blog-item-body clearfix">-->
                        <!-- title--><a href="blog-single.html">
          <!--                <h6 class="blog-title">Etiam sit amet est et massa</h6></a>-->
          <!--              <div class="blog-item-data">Mon, 03-23-2016</div>-->
                        <!-- Text Intro-->
          <!--              <p>urabitur rhoncus sem et eros pharetra euismod. Ut commodo sem magna, in congue ex vestibulum ut.</p><a href="blog-single.html" class="blog-button">Read more</a>-->
          <!--            </div>-->
          <!--          </div>-->
                    <!-- ! Blog item-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</section>-->
      <!-- ! latest news-->

      <!--  call out section--
      <section class="page-section pt-90 pb-80 bg-main pattern relative">
      <div class="container">
          <div class="call-out-box clearfix with-icon">
           <div class="row call-out-wrap">
             <div class="col-md-5">
               <h6 class="title-section-top gray font-4">subscribe today</h6>
               <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2><i class="flaticon-suntour-email call-out-icon"></i>
              </div>
              <div class="col-md-7">
                <form action="php/contacts-process.php" method="post" class="form contact-form mt-10">
                  <div class="input-container">
                   <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>
                   <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
     !-- call out section--> 
     <!-- call out section--
      <section class="page-section cws_prlx_section bg-white-80 pb-60 pt-60"><img src="pic/parallax-5.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="call-out-box">
            <div class="call-out-wrap alt">
              <h2 class="title-section alt-2 gray">Do you have questions?</h2><a href="#" class="cws-button border-left large alt mb-20">Contact us</a>
            </div>
          </div>
        </div>
      </section>
      !-- ! call out section-->
    </div>

@endsection

@section('script')
  
 
        
 </script>
@endsection


