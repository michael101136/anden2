@extends('public.es.layouts.master')

@section('content')

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
  <img class="center-image" src="/public/img/baner-tour.jpg" alt="">
  <div class="vertical-align">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <ul class="banner-breadcrumb color-white clearfix">
              <li><a class="link-blue-2" href="#">home</a> /</li>
              <li><a class="link-blue-2" href="#">tours</a> /</li>
              <li><span>detail</span></li>
            </ul>
            <h2 class="color-white">{{$detalleTour->nombre}}</h2>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- DETAIL WRAPPER -->
<div class="detail-wrapper">
  <div class="container">
    <div class="detail-header">
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div class="detail-category color-grey-3">Champs-Elysées, Paris France</div>
          <h2 class="detail-title color-dark-2">10 Days of Vacation in paris Resorts</h2>
          
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="detail-price color-dark-2">price from  <span class="color-blue"> $500</span> /person</div>
          </div>
          </div>
        </div>
        <div class="row padd-90">
          <div class="col-xs-12 col-lg-8">
            <div class="detail-content">
              <div class="detail-content-block">
                <h3>DESCRIPCION</h3>
                <p>{{$detalleTour->descripcion}}</p>
                  
                <h5>interesting for you</h5>

                <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue.</p>

              </div>
              <div class="detail-top slider-wth-thumbs style-1 arrows">
                <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                          <div class="swiper-wrapper">
                             @foreach($multimedia as $item)
                             <div class="swiper-slide" data-val="{{$item->img}}">
                                 <img class="img-responsive img-full" src="{{$item->img}}" alt="">
                              </div>
                             @endforeach
                            </div>
                          <div class="pagination pagination-hidden"></div>
                    <div class="arrow-wrapp arr-s-3">
                    <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                    <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                  </div>
                      </div>
                      <div class="swiper-container thumbnails" data-autoplay="0" 
                      data-loop="0" data-speed="500" data-center="0" 
                      data-slides-per-view="responsive" data-xs-slides="3" 
                      data-sm-slides="5" data-md-slides="5" data-lg-slides="5" 
                      data-add-slides="5">
                      <div class="swiper-wrapper">
                        @foreach($multimedia as $item)
                    <div class="swiper-slide" data-val="{{$item->img}}">
                      <img class="img-responsive img-full" src="{{$item->img}}" alt="">
                    </div>
                    @endforeach
                  </div>
                  <div class="pagination hidden"></div>
                </div>
              </div>

          
          <div class="detail-content-block">
            <h3>ITINERARIO</h3>
                      <div class="accordion style-1">
                          <div class="acc-panel">
                              <div class="acc-title"><span class="acc-icon"></span>How can I manage Instant Book settings?</div>
                              <div class="acc-body">
                  <h5>metus Aenean eget massa</h5>
                  <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <ul>
                        <li>Shopping history</li>
                        <li>Hot offers according your settings</li>
                        <li>Multi-product search</li>
                        <li>Opportunity to share with friends</li>
                        <li>User-friendly interface</li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <ul>
                        <li>Shopping history</li>
                        <li>Hot offers according your settings</li>
                        <li>Multi-product search</li>
                        <li>Opportunity to share with friends</li>
                        <li>User-friendly interface</li>
                      </ul>                 
                    </div>
                  </div>
                              </div>
                          </div>
                          <div class="acc-panel">
                              <div class="acc-title"><span class="acc-icon"></span>How do I list multiple rooms?</div>
                              <div class="acc-body">
                  <h5>metus Aenean eget massa</h5>
                  <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <ul>
                        <li>Shopping history</li>
                        <li>Hot offers according your settings</li>
                        <li>Multi-product search</li>
                        <li>Opportunity to share with friends</li>
                        <li>User-friendly interface</li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <ul>
                        <li>Shopping history</li>
                        <li>Hot offers according your settings</li>
                        <li>Multi-product search</li>
                        <li>Opportunity to share with friends</li>
                        <li>User-friendly interface</li>
                      </ul>                 
                    </div>
                  </div>
                              </div>
                          </div>
                          <div class="acc-panel">
                              <div class="acc-title"><span class="acc-icon"></span>How do I use my calendar?</div>
                              <div class="acc-body">
                  <h5>metus Aenean eget massa</h5>
                  <p>Mauris posuere diam at enim malesuada, ac malesuada erat auctor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim. Suspendisse id pharetra lacus, et hendrerit mi. Praesent at vestibulum tortor. Ut porta mattis tellus eu sagittis. Nunc maximus ipsum a mattis dignissim.</p>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <ul>
                        <li>Shopping history</li>
                        <li>Hot offers according your settings</li>
                        <li>Multi-product search</li>
                        <li>Opportunity to share with friends</li>
                        <li>User-friendly interface</li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <ul>
                        <li>Shopping history</li>
                        <li>Hot offers according your settings</li>
                        <li>Multi-product search</li>
                        <li>Opportunity to share with friends</li>
                        <li>User-friendly interface</li>
                      </ul>                 
                    </div>
                  </div>
                              </div>
                          </div>                                                                                                                        
                      </div>                      
          </div>                    
        </div>            
          </div>
          <div class="col-xs-12 col-lg-4">
            <div class="right-sidebar">
              <div class="detail-block bg-blue-2">
                <h4 class="color-white">details</h4>
                <div class="details-desc">
              <p class="color-blue-4">Category:  <span class="color-white">sea tour</span></p>
              <p class="color-blue-4">price: <span class="color-white">$500 / person</span></p>
              <p class="color-blue-4">location: <span class="color-white">paris, france</span></p>
              <p class="color-blue-4">date: <span class="color-white">july 19th to july 29th</span></p>
              <p class="color-blue-4">rate: <span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span><span class="fa fa-star color-yellow"></span></p>
              <p class="color-blue-4">number of people: <span class="color-white">2 adult</span></p>
              <p class="color-blue-4">hotel: <span class="color-white">bristol paris hotel</span></p>
              <p class="color-blue-4">kind of transport: <span class="color-white">tourist bus</span></p>
              <p class="color-blue-4">DISCOUNT: <span class="color-white">20% off</span></p>
            </div>
            <div class="details-btn">
              <a href="#" class="c-button b-40 bg-tr-1 hv-blue"><span>view on map</span></a>
              <a href="#" class="c-button b-40 bg-white hv-transparent"><span>book now</span></a>
            </div>
              </div>

          <div class="map-block">
            <div id="map-canvas" class="style-3" data-lat="33.716813" data-lng="-117.191016" data-zoom="10" data-style="2"></div>
              <div class="addresses-block">
                  <a data-lat="33.716813" data-lng="-117.191016" data-string="Santa Monica Hotel"></a>
              </div>
          </div> 

          <div class="popular-tours bg-grey-2">
            <h4 class="color-dark-2">popular tours</h4>
            <div class="hotel-small style-2 clearfix">
              <a class="hotel-img black-hover" href="#">
                <img class="img-responsive radius-0" src="img/detail/tour_small_1.jpg" alt="">
                <div class="tour-layer delay-1"></div>                    
              </a>
              <div class="hotel-desc">
                  <h5><span class="color-dark-2">from <strong>$273</strong> / per</span></h5>
                  <h4>italy, rome</h4>
                <div class="hotel-loc tt">115 tours in 35 cities</div>
              </div>
            </div>
            <div class="hotel-small style-2 clearfix">
              <a class="hotel-img black-hover" href="#">
                <img class="img-responsive radius-0" src="img/detail/tour_small_2.jpg" alt="">
                <div class="tour-layer delay-1"></div>                    
              </a>
              <div class="hotel-desc">
                  <h5><span class="color-dark-2">from <strong>$273</strong> / per</span></h5>
                  <h4>australia, sydney</h4>
                <div class="hotel-loc tt">115 tours in 35 cities</div>
              </div>
            </div>
            <div class="hotel-small style-2 clearfix">
              <a class="hotel-img black-hover" href="#">
                <img class="img-responsive radius-0" src="img/detail/tour_small_3.jpg" alt="">
                <div class="tour-layer delay-1"></div>                    
              </a>
              <div class="hotel-desc">
                  <h5><span class="color-dark-2">from <strong>$273</strong> / per</span></h5>
                  <h4>UAE, dubai</h4>
                <div class="hotel-loc tt">115 tours in 35 cities</div>
              </div>
            </div>                      
          </div>

          <div class="sidebar-text-label bg-blue-2 color-white">useful information</div>

          <div class="help-contact bg-grey-2">
            <h4 class="color-dark-2">Need Help?</h4>
            <p class="color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a class="help-phone color-dark-2 link-blue" href="tel:0200059600"><img src="img/detail/phone24.png" alt="">020 00 59 600</a>
            <a class="help-mail color-dark-2 link-blue" href="mailto:let’s_travel@world.com"><img src="img/detail/letter.png" alt="">let’s_travel@world.com</a>
          </div>                                  
            </div>            
          </div>
        </div>
        <div class="additional-block padd-90">
          <h4 class="additional-title">may interest you</h4>
          <div class="may-interested">
            <div class="row">
              <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item style-11 bg-white">
                    <div class="radius-top">
                      <img src="img/tour_list/tour_grid_1.jpg" alt="">               
                    </div>
                    <div class="title bg-grey-2">
                      <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4><b>tours in greece</b></h4>
                             <div class="rate-wrap">
                              <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    </div>
                      <i>485 rewies</i> 
                            </div> 
                      <div class="hotel-person color-dark-2">from <span>$273</span> person</div>
                    </div>
              </div>            
              </div>
              <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item style-11 bg-white">
                    <div class="radius-top">
                      <img src="img/tour_list/tour_grid_2.jpg" alt="">               
                    </div>
                    <div class="title bg-grey-2">
                      <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4><b>TOURS IN MONACO</b></h4>
                             <div class="rate-wrap">
                              <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    </div>
                      <i>485 rewies</i> 
                            </div> 
                      <div class="hotel-person color-dark-2">from <span>$703</span> person</div>
                    </div>
              </div>            
              </div>
              <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item style-11 bg-white">
                    <div class="radius-top">
                      <img src="img/tour_list/tour_grid_3.jpg" alt="">               
                    </div>
                    <div class="title bg-grey-2">
                      <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4><b>TOURS IN ITALY</b></h4>
                             <div class="rate-wrap">
                              <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    </div>
                      <i>485 rewies</i> 
                            </div> 
                      <div class="hotel-person color-dark-2">from <span>$300</span> person</div>
                    </div>
              </div>            
              </div>
              <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
            <div class="hotel-item style-11 bg-white">
                    <div class="radius-top">
                      <img src="img/detail/interested.jpg" alt="">               
                    </div>
                    <div class="title bg-grey-2">
                      <div class="date list-hidden">July <strong>19th</strong> to July <strong>26th</strong></div>
                        <h4><b>TOURS IN ITALY</b></h4>
                             <div class="rate-wrap">
                              <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    </div>
                      <i>485 rewies</i> 
                            </div> 
                      <div class="hotel-person color-dark-2">from <span>$300</span> person</div>
                    </div>
              </div>            
              </div>                                
            </div>
        </div>
        </div>
  </div>
</div>

<div class="content-body">

      <section class="page-section pt-0 pb-50">
        <br/>
        <div class="container" >
            <h4 class="mb-20">{{$detalleTour->descripcion}}</h4>
        </div>

        <div class="container">
          <div id="flex-slider" class="flexslider">
            <ul class="slides">
                @foreach($multimedia as $item)
                    <li><img src="{{$item->img}}" alt ></li>
                @endforeach

            </ul>
          </div>
          <div id="flex-carousel" class="flexslider">
            <ul class="slides">
                 @foreach($multimedia as $item)
              <li><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt ></li>
                  @endforeach

            </ul>
          </div>
        </div>
        <div class="container mt-30">
        
            
          <!--<h4 class="mb-20">DETALLES</h4>-->
          <div class="row">
            <div class="col-md-8">
              <div class="tabs">
                <div class="block-tabs-btn clearfix">
                    <div data-tabs-id="tabs3" class="tabs-btn active">Itinerarios</div>
                    <div data-tabs-id="tabs2" class="tabs-btn">Precios</div>
                    <div data-tabs-id="tabs1" class="tabs-btn">Incluye</div>
             
                
                </div>
                <!-- tabs keeper-->
                <div class="tabs-keeper">
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs1" class="container-tabs ">
                    <h6 class="trans-uppercase"> </h6>
                    <p>{!!$detalleTour->organizacion!!} </p>
                    <!--<ul class="style-3">-->
                    <!--  <li>Nam molestie dolor id auctor sodales;</li>-->
                    <!--  <li>In sagittis dolor vel turpis aliquet pharetra;</li>-->
                    <!--  <li>Quisque non turpis in dui congue dapibus;</li>-->
                    <!--  <li>Vivamus varius nisl quis dictum maximus;</li>-->
                    <!--  <li>Vestibulum scelerisque ligula quis est faucibus tincidunt.</li>-->
                    <!--</ul>-->
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs2" class="container-tabs">
                   
                   <div class="row">
                            <div class="mb-md-50"><img src="pic/promo-2.jpg" alt class="mt-minus-100"></div>
                            <div class="col-md-12">
                     
                               <div class="search-hotels room-search pattern">
                                    <div class="search-room-title">
                                      <h5>Precios del tour</h5>
                                    </div>
                                    <div class="tours-container">
                                      <div class="tours-box">
                                        <div class="tours-search mb-10">
                                          <form method="post" class="form search divider-skew">
                                            <div class="search-wrap">
                                              <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                                            </div>
                                          </form>
                                         
                                          <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                                            <select>
                                              <option>Adult</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                                            <select>
                                              <option>Child</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="selection-box"><i class="flaticon-suntour-bed box-icon"></i>
                                            <select>
                                              <option>Room</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="button-search">GO</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               <div class="room-table">
                                <table class="table alt-2">
                                  <thead>
                                    <tr>
                                      <th>Room Type</th>
                                      <th>Max.</th>
                                      <th>Options</th>
                                      <th>Today's price</th>
                   
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td> <img src="pic/190x130.jpg" data-at2x="pic/190x130@2x.jpg" alt>
                                        <h6>Grand Hotel Wien</h6>
                                        <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed) Room sleeps <br> 4 guests (up to 3 children)</p>
                                      </td>
                                      <td> 
                                        <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i></div>
                                        <p>4 guest</p>
                                      </td>
                                      <td> 
                                        <ul class="style-1">
                                          <li>Special conditions, pay when you stay</li>
                                          <li>Breakfast included</li>
                                          <li>Free Parking</li>
                                        </ul>
                                      </td>
                                      <td class="room-price">$120</td>
                                     
                                    </tr>
                                    <tr>
                                      <td> <img src="pic/190x130.jpg" data-at2x="pic/190x130@2x.jpg" alt>
                                        <h6>Deluxe Room, Sea View</h6>
                                        <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed)</p>
                                      </td>
                                      <td> 
                                        <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i><i class="flaticon-people alt"></i><i class="flaticon-people alt"></i></div>
                                        <p>2 guest</p>
                                      </td>
                                      <td> 
                                        <ul class="style-1">
                                          <li>Special conditions, pay when you stay</li>
                                          <li>Breakfast included</li>
                                          <li>Free Parking</li>
                                          <li>Free Internet</li>
                                        </ul>
                                      </td>
                                      <td class="room-price">Sold out</td>
                                     
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                           
                            </div>
                    </div>
                 
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs3" class="container-tabs active">
                
                         <div class="row">
                            <div class="mb-md-50"><img src="pic/promo-2.jpg" alt class="mt-minus-100"></div>
                            <div class="col-md-12">
                              <!-- section title-->
                                  <!--<h2 class="title-section mt-0 mb-0">About us</h2>-->
                              <!-- ! section title-->
                                  <!--<div class="cws_divider with-plus short-3 mb-20 mt-10"></div>-->
                              <!--<p class="mb-50">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>-->
                              <!-- accordion-->
                              
                              
                              <div class="toggle style-2">
                                
                               
                                @foreach($itinerario as $item)
                                    @if($item->dia == '1')
                                        <div class="content-title active"> <span class="active"><i class="active-icon"></i>DÍA {{$item->dia}}: {{$item->itinerarionombre}}</span></div>
                                        <div class="content">{!!$item->descripcionitinerario!!}</div>
                                    @else
                                        <div class="content-title"> <span><i class="active-icon"></i>DÍA {{$item->dia}}: {{$item->itinerarionombre}}</span></div>
                                        <div class="content">{!!$item->descripcionitinerario!!} </div>
                                   @endif
                              @endforeach
                              </div>
              
                              
                            </div>
                    </div>
                   
                
                  </div>
                  <!-- /tabs container-->
                </div>
                <!-- /tabs keeper-->
              </div>
            </div>
            <!--<div class="col-md-8">-->
            <!-- hola-->
            <!--</div>-->
            <div class="col-md-4">
                
             <div class="cws-widget">
                <div class="widget-top-sellers">
                  <h2 class="widget-title"> CATEGORIAS</h2>
                  <!-- item recent post-->
                  <div class="item-top-sellers clearfix">
                      <img src="/public/tours/categoria/1.jpg"  onclick="listar_categorias('aventura');" data-at2x="/public/tours/categoria/1.jpg" alt>
                      <h3 class="title"><a href="javascript:;" onclick="listar_categorias('aventura');">AVENTURA</a></h3>
                  </div>
                  <!-- ! item recent post-->
                  <!-- item recent post-->
                  <div class="item-top-sellers clearfix"><img src="/public/tours/categoria/2.jpg" onclick="listar_categorias('mistico');" data-at2x="/public/tours/categoria/2.jpg" alt>
                    <h3 class="title"><a href="javascript:;" onclick="listar_categorias('mistico');">MÍSTICO</a></h3>
                  </div>
                  <!-- ! item recent post-->
                  <!-- item recent post-->
                  <div class="item-top-sellers clearfix"><img src="/public/tours/categoria/3.jpg" onclick="listar_categorias('tradicional');" data-at2x="/public/tours/categoria/3.jpg" alt>
                    <h3 class="title"><a href="javascript:;" onclick="listar_categorias('tradicional');">TRADICIONAL</a><span style="width:80%"></span></h3>
                  </div>
                  <!-- ! item recent post-->
                  
                  <div class="item-top-sellers clearfix"><img src="/public/tours/categoria/4.jpg" onclick="listar_categorias('vivencial');" data-at2x="/public/tours/categoria/4.jpg" alt>
                    <h3 class="title"><a href="javascript:;" onclick="listar_categorias('vivencial');">VIVENCIAL</a><span style="width:80%"></span></h3>
                  </div>
                </div>
                     </div>
            </div>
          </div>
        </div>
        <!-- section prices-->
      </section>
    </div>

@endsection

@section('script')

<script>

function listar_categorias(categoria)
{
  
    $('#procesoCarga').html('<div class="loading"><img src="/public/img/carga2.gif" alt="loading" /><br/></div>');
     $.ajax({                        
                url:'{{ route('listar_tours_categoria',['idioma'=> 'es']) }}/'+categoria,
                type: 'GET',           
                dataType:'json',
                success: function(data)             
                {
           
                  $("#categoria").html(data);
                  $('#procesoCarga').html('');

                }
        });  
        
     return false;  
}
    
</script>


@endsection