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
              <li><a class="link-blue-2" href="#">tours</a> /</li>
              <li><span>detalle</span></li>
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
          <!--<div class="detail-category color-grey-3">Champs-Elysées, Paris France</div>-->
          <h2 class="detail-title color-dark-2" style="padding-top: 90px;">{{$detalleTour->nombre}}</h2>
          
          </div>
          <!-- <div class="col-xs-12 col-sm-4">
            <div class="detail-price color-dark-2">price from  <span class="color-blue"> $500</span> /person</div>
          </div> -->
          </div>
        </div>
        <div class="row padd-90">
          <div class="col-xs-12 col-lg-8">

            <div class="detail-content">
              <div class="detail-content-block">
                <h3>DESCRIPCION</h3>
                <p>{{$detalleTour->descripcion}}</p>

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
                <div class="simple-tab type-2 tab-wrapper">
                  <div class="tab-nav-wrapper">
                    <div  class="nav-tab  clearfix" style="text-align: left;">
                      <div class="nav-tab-item active">
                        ITINERARIO
                      </div>
                      <div class="nav-tab-item">
                        INCLUYE
                      </div>                                                           
                    </div>
                  </div>
                  <div class="tabs-content tabs-wrap-style clearfix">
                               
                    <div class="tab-info active">
                      <div class="acc-body">
                                              
                              <h3>ITINERARIO</h3>
                                        <div class="accordion style-1">
                                          @foreach($itinerario as $item)
                                          @if($item->dia == '1')
                                            <div class="acc-panel features">
                                                <div class="acc-title active"><span class="acc-icon"></span>DÍA {{$item->dia}}: {{$item->itinerarionombre}}</div>
                                                <div class="acc-body" style="display: block;">
                                                  <p>{!!$item->descripcionitinerario!!}</p>  
                                                </div>
                                            </div>
                                            @else
                                            <div class="acc-panel">
                                                <div class="acc-title"><span class="acc-icon"></span>DÍA {{$item->dia}}: {{$item->itinerarionombre}}</div>
                                                <div class="acc-body">
                                                  <p>{!!$item->descripcionitinerario!!}</p>  
                                                </div>
                                            </div>
                                             @endif
                                             @endforeach          
                                        </div>                      
                            
                      </div>
                    </div>
                    <div class="tab-info">
                       <div class="acc-body">
                        
                        <p>{!!$detalleTour->organizacion!!}</p>
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
                <h4 class="color-white">RESERVA</h4>
                <div class="details-desc">
                  <form class="contact-form" action="#">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class=" input-style-1 type-2  color-3">
                            <input class="b-30" type="text" required="" placeholder="nombre completo">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="input-style-1 type-2 color-3">
                            <input type="text" required="" placeholder="nacionalidad">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="input-style-1 type-2 color-3">
                            <input type="text" required="" placeholder="número telefonico">
                        </div>
                      </div>  
                      <div class="col-xs-12 col-sm-6">
                        <div class="input-style-1 datepicker hasDatepicker color-3">
                            <input type="date" required="" placeholder="fecha de viaje">
                        </div>
                      </div> 
                      <div class="col-xs-12">
                        <textarea class="area-style-1 color-3" required="" placeholder="Enter your comment"></textarea>
                        <div class="text-center">
                          <button type="submit" class="c-button b-40 bg-white hv-transparent"><span>book now</span></button>
                        </div>
                      </div>
                    </div>          
                  </form>
                </div>
              </div>

          

          <!--<div class="popular-tours bg-grey-2">
            <h4 class="color-dark-2">popular tours</h4>
            <div class="hotel-small style-2 clearfix">
              <a class="hotel-img black-hover" href="#">
                <img class="img-responsive radius-0" src="/plantilla/img/detail/tour_small_1.jpg" alt="">
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
                <img class="img-responsive radius-0" src="/plantilla/img/detail/tour_small_2.jpg" alt="">
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
                <img class="img-responsive radius-0" src="/plantilla/img/detail/tour_small_3.jpg" alt="">
                <div class="tour-layer delay-1"></div>                    
              </a>
              <div class="hotel-desc">
                  <h5><span class="color-dark-2">from <strong>$273</strong> / per</span></h5>
                  <h4>UAE, dubai</h4>
                <div class="hotel-loc tt">115 tours in 35 cities</div>
              </div>
            </div>                      
          </div> -->

          <!--<div class="sidebar-text-label bg-blue-2 color-white">CONTACTO</div> -->

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
                      <img src="/plantilla/img/tour_list/tour_grid_1.jpg" alt="">               
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
                      <img src="/plantilla/img/tour_list/tour_grid_2.jpg" alt="">               
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
                      <img src="/plantilla/img/tour_list/tour_grid_3.jpg" alt="">               
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
                      <img src="/plantilla/img/tour_list/tour_grid_3.jpg" alt="">               
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