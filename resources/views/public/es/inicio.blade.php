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
        <!-- slider info-->
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
        <!-- ! slider-info-->
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
        <div class="features-tours-full-width">
            <div class="features-tours-wrap clearfix">
          
          

            @foreach($data as $item)
    
                 <div class="features-tours-item">
                    <div class="features-media"><img src="{{$item->img}}" style="height:200px;" data-at2x="{{$item->img}}" alt>
                    <div class="features-info-top">
                      <div class="info-price font-4"><span> </span> $115</div>
                      <div class="info-temp font-4"><span><button type="button" class="btn btn-default" style="color: #fff; background-color: rgba(0,0,0,0); border-color: #ffc107;"><a href="{{route('detalletour',['tour'=>$item->slug])}}">DETALLE</a></button></span></div>
                      <p class="info-text"></p>
                    </div>
          
                    <div class="features-info-bot">
                      <h5 class="title" style=" font-size: 14px; position: absolute;margin-top: -55px;  background-color: rgba(0,0,0,.5);border-bottom-right-radius: 20px;padding: 6px;">
                        <a href="{{route('detalletour',['tour'=>$item->slug])}}">  {{$item->nombretour}} </a> <span class="font-4">   </span> </h5>
                    </div>
                  </div>
                
            </div>
           
            @endforeach
          </div>
        </div>
      </section>
      <!-- ! page section-->
      <!-- counter section -->
      <section class="small-section">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block"><i class="counter-icon flaticon-suntour-world"></i>
                <div class="counter-name-wrap">
                  <div data-count="345" class="counter">0</div>
                  <div class="counter-name">Tours</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-fireworks"></i>
                <div class="counter-name-wrap">
                  <div data-count="438" class="counter">0</div>
                  <div class="counter-name">Holidays</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-hotel"></i>
                <div class="counter-name-wrap">
                  <div data-count="526" class="counter">0</div>
                  <div class="counter-name">Hotels</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 mb-md-30">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-ship"></i>
                <div class="counter-name-wrap">
                  <div data-count="169" class="counter">0</div>
                  <div class="counter-name">Cruises</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-airplane"></i>
                <div class="counter-name-wrap">
                  <div data-count="293" class="counter">0</div>
                  <div class="counter-name">Flights</div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xs-6">
              <div class="counter-block with-divider"><i class="counter-icon flaticon-suntour-car"></i>
                <div class="counter-name-wrap">
                  <div data-count="675" class="counter">0</div>
                  <div class="counter-name">Cars</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! counter section-->
      <!-- page section parallax-->
      <section class="small-section cws_prlx_section bg-gray-40"><img src="public/pic/parallax-1.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h2 class="title-section-top alt">About</h2>
              <h2 class="title-section alt mb-20"><span>Sun</span>Tour</h2>
              <p class="color-white">Vestibulum tincidunt venenatis scelerisque. Proin quis enim lacinia, vehicula massa et, mollis urna. Proin nibh mauris, blandit vitae convallis at, tincidunt vel tellus. Praesent posuere nec lectus non cursus. Sed commodo odio et ipsum sagittis tincidunt non eget felis.</p>
              <div class="cws_divider short mb-30 mt-30"></div>
              <h3 class="font-5 color-white font-medium">Andrew McDonald</h3>
            </div>
            <div class="col-md-7">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/yib7tvIrL6k" class="embed-responsive-item"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ! page section parallax-->
      <!-- recomended section-->
      <section class="small-section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <!--<h6 class="title-section-top font-4">Top rated</h6>-->
              <h2 class="title-section"><span>TOURS</span> RECOMENDADOS</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <!--<p>Maecenas commodo odio ut vulputate cursus. Integer in egestas lectus. Nam volutpat feugiat mi vitae mollis. Aenean tristique dolor bibendum mi scelerisque ultrices non at lorem.</p>-->
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
          </div>
          <div class="row">
            <!-- Recomended item-->
            @foreach($data as $item)
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                    <div class="pic"><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt style="width:770px; height:240px;"></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                    <h6 class="blog-title">{{$item->nombretour}}</h6></a>
                  <div class="stars stars-4"></div>
                  <div class="recom-price"><span class="font-4">$90</span> per night</div>
                  <p class="mb-30">    </p><a href="{{route('detalletour',['tour'=>$item->slug])}}" class="cws-button small alt">Leer más</a>
                  <div class="action font-2">20%</div>
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            @endforeach
 
          </div>
        </div>
      </section>
      <!-- ! recomended section-->
      <!-- testimonials section-->
      <section class="small-section cws_prlx_section bg-blue-40"><img src="pic/parallax-2.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Happy Memories</h6>
              <h2 class="title-section alt-2"><span>Our</span> Testimonials</h2>
              <div class="cws_divider mb-25 mt-5"></div>
            </div>
          </div>
          <div class="row">
            <!-- testimonial carousel-->
            <div class="owl-three-item">
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Nicole</span> Beck</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Suspe blandit orci quis lorem eleifend maximus. Quisque nec.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/2.jpg" data-at2x="pic/testimonial/top-bg/2@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/2.jpg" data-at2x="pic/testimonial/author/2@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Peter</span> Robertson</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Nulla elit justo, dapibus ut lacus ac, ornare elementum neque.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/3.jpg" data-at2x="pic/testimonial/top-bg/3@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/3.jpg" data-at2x="pic/testimonial/author/3@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
                <div class="testimonial-body">
                  <h5 class="title"><span>Kathy</span> Harrison</h5>
                  <div class="stars stars-5"></div>
                  <p class="align-center">Maece facilisis sit amet mauris eget aliquam. Integer vitae.</p><a href="page-about-us.html" class="testimonial-button">Read more</a>
                </div>
              </div>
              <!-- testimonial item-->
              <div class="testimonial-item">
                <div class="testimonial-top"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg" alt></div></a>
                  <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/1@2x.jpg" alt></div>
                </div>
                <!-- testimonial content-->
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
      <!-- call out section-->
      <!--<section class="page-section pt-90 pb-80 bg-main pattern relative">-->
      <!--  <div class="container">-->
      <!--    <div class="call-out-box clearfix with-icon">-->
      <!--      <div class="row call-out-wrap">-->
      <!--        <div class="col-md-5">-->
      <!--          <h6 class="title-section-top gray font-4">subscribe today</h6>-->
      <!--          <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2><i class="flaticon-suntour-email call-out-icon"></i>-->
      <!--        </div>-->
      <!--        <div class="col-md-7">-->
      <!--          <form action="php/contacts-process.php" method="post" class="form contact-form mt-10">-->
      <!--            <div class="input-container">-->
      <!--              <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>-->
      <!--              <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>-->
      <!--            </div>-->
      <!--          </form>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->
      <!-- ! call out section-->
    </div>

@endsection

@section('script')
  
 
        
 </script>
@endsection


