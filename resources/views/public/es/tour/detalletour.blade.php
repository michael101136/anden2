@extends('public.es.layouts.master')

@section('content')

<div class="content-body">
      <section class="page-section pt-0 pb-50">
        <br/>
        <div class="container">
            <h4 class="mb-20">{{$detalleTour->nombre}}</h4>
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
              <!--<div class="bg-gray-3 p-30-40">-->
              <!--  <ul class="style-1 mb-0">-->
              <!--    <li>Parking</li>-->
              <!--    <li>Concierge service</li>-->
              <!--    <li>Gift shop</li>-->
              <!--    <li>Meeting/Banquet facilities</li>-->
              <!--    <li>Wheelchair accessible</li>-->
              <!--    <li>Restaurant</li>-->
              <!--    <li>Express check out</li>-->
              <!--    <li>Air-conditioned</li>-->
              <!--    <li>Babysitting/child services (surcharge)</li>-->
              <!--  </ul><a href="#"><ins class="alt-5">More amenties</ins></a>-->
              <!--</div>-->
            </div>
          </div>
        </div>
        <!-- section prices-->
        
        <!-- section location-->
            <!--<div id="location" class="container mb-50">-->
            <!--  <div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--      <h4 class="trans-uppercase mb-10">Location</h4>-->
            <!--      <div class="cws_divider mb-30"></div>-->
                  <!-- google map-->
            <!--      <div class="map-wrapper">-->
            <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25295.930156304785!2d16.371063311644324!3d48.208404844730474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07986fcad78b%3A0x73f5a4d267cc4174!2zTmFnbGVyZ2Fzc2UgMTAsIDEwMTAgV2llbiwg0JDQstGB0YLRgNC40Y8!5e0!3m2!1sru!2sua!4v1453294615596" allowfullscreen=""></iframe>-->
            <!--      </div>-->
            <!--      <ul class="icon inline mt-20">-->
            <!--        <li> <a href="#">9300 Meadow Lane, Kalamazoo, MI 49009<i class="flaticon-suntour-map"></i></a></li>-->
            <!--        <li> <a href="#">00 1 877-859-5095<i class="flaticon-suntour-phone"></i></a></li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
        <!-- section amenties-->
            <!--<div id="amenties" class="container mb-50">-->
            <!--  <div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--      <h4 class="trans-uppercase mb-10">Amenties</h4>-->
            <!--      <div class="cws_divider mb-10"></div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="row mt-0 masonry">-->
            <!--    <div class="col-md-3 col-sm-6">-->
            <!--      <h6 class="trans-uppercase">General</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>Room Service</li>-->
            <!--        <li>Newspapers</li>-->
            <!--        <li>Non-smoking Rooms</li>-->
            <!--        <li>Family Rooms</li>-->
            <!--        <li>Elevator</li>-->
            <!--        <li>Safe</li>-->
            <!--        <li>Heating</li>-->
            <!--        <li>All Spaces Non-Smoking</li>-->
            <!--        <li>Air Conditioning</li>-->
            <!--        <li>Carpeted</li>-->
            <!--      </ul>-->
            <!--      <h6 class="trans-uppercase mt-20">Business Facilities</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>RooFax/Photocopying</li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--    <div class="col-md-3 col-sm-6">-->
            <!--      <h6 class="trans-uppercase">Media & Technology</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>Telephone</li>-->
            <!--        <li>Radio</li>-->
            <!--        <li>Cable channels</li>-->
            <!--        <li>Flat-screen TV</li>-->
            <!--      </ul>-->
            <!--      <h6 class="trans-uppercase mt-20"> Bathroom</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>Hairdryer</li>-->
            <!--        <li>Toilet</li>-->
            <!--        <li>Bathroom</li>-->
            <!--        <li>Slippers</li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--    <div class="col-md-3 col-sm-6">-->
            <!--      <h6 class="trans-uppercase">Food & Drink</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>Bar</li>-->
            <!--        <li>Breakfast in the Room</li>-->
            <!--        <li>Restaurant with Dining Menu</li>-->
            <!--        <li>FSpecial Diet Meals (upon request)</li>-->
            <!--        <li>Minibar</li>-->
            <!--      </ul>-->
            <!--      <h6 class="trans-uppercase mt-20"> Activites</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>Hiking</li>-->
            <!--        <li>Cycling</li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--    <div class="col-md-3 col-sm-6">-->
            <!--      <h6 class="trans-uppercase">Front Desk Services</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>24-Hour Front Desk</li>-->
            <!--        <li>Currency Exchange</li>-->
            <!--        <li>Tour Desk</li>-->
            <!--        <li>Ticket Service</li>-->
            <!--        <li>Baggage Storage</li>-->
            <!--        <li>Concierge Service</li>-->
            <!--      </ul>-->
            <!--      <h6 class="trans-uppercase mt-20"> Cleaning Services</h6>-->
            <!--      <ul class="style-1">-->
            <!--        <li>Laundry</li>-->
            <!--        <li>Dry Cleaning</li>-->
            <!--        <li>Ironing Service</li>-->
            <!--        <li>Shoeshine</li>-->
            <!--        <li>Daily Housekeeping</li>-->
            <!--      </ul>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
        <!-- section reviews-->
            <!--<div id="reviews" class="container mb-60">-->
            <!--  <div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--      <h4 class="trans-uppercase mb-10">Reviews travellers</h4>-->
            <!--      <div class="cws_divider mb-30"></div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="reviews-wrap">-->
            <!--    <div class="reviews-top pattern relative">-->
            <!--      <div class="reviews-total">-->
            <!--        <h5>Excellent</h5>-->
            <!--        <div class="reviews-sub-mark">4.2</div>-->
            <!--        <div class="stars-perc"><span style="width:85%"></span></div><span>Based on 67 reviews</span>-->
            <!--      </div>-->
            <!--      <div class="reviews-marks">-->
            <!--        <ul>-->
            <!--          <li>Cleanliness<span><span class="stars-perc"><span style="width:85%"></span></span>4.5</span></li>-->
            <!--          <li>Location<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>-->
            <!--          <li>Staff<span><span class="stars-perc"><span style="width:100%"></span></span>5.0</span></li>-->
            <!--          <li>Free Wi-Fi<span><span class="stars-perc"><span style="width:65%"> </span></span>3.5</span></li>-->
            <!--        </ul>-->
            <!--        <ul>-->
            <!--          <li>Comfort<span><span class="stars-perc"><span style="width:85%"> </span></span>4.5</span></li>-->
            <!--          <li>Facilities<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>-->
            <!--          <li>Value for money<span><span class="stars-perc"><span style="width:100%"> </span></span>5.0</span></li>-->
            <!--        </ul>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="comments">-->
            <!--      <div class="comment-body">-->
            <!--        <div class="avatar"><img src="pic/blog/90x90/1.jpg" data-at2x="pic/blog/90x90/1@2x.jpg" alt>12 Reviews</div>-->
            <!--        <div class="comment-info">-->
            <!--          <div class="comment-meta">-->
            <!--            <div class="title">-->
            <!--              <h5>Lovely clean, comfortable hotel <span>Rachel George</span></h5>-->
            <!--            </div>-->
            <!--            <div class="comment-date">-->
            <!--              <div class="stars stars-5">5</div><span>Mon, 03-23-2016</span>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="comment-content">-->
            <!--            <p>Proin ut pretium sem. Maecenas id commodo massa. Sed vitae urna hendrerit, commodo dolor non, porttitor odio. Suspendisse ac arcu eu enim lobortis luctus sed quis velit. Nam ut vestibulum orci, at sodales libero. Fusce egestas urna a dolor fermentum, id tincidunt leo eleifend. Phasellus pulvinar hendrerit pulvinar.</p>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="comment-body">-->
            <!--        <div class="avatar"><img src="pic/blog/90x90/2.jpg" data-at2x="pic/blog/90x90/2@2x.jpg" alt>12 Reviews</div>-->
            <!--        <div class="comment-info">-->
            <!--          <div class="comment-meta">-->
            <!--            <div class="title">-->
            <!--              <h5>Brilliant hotel with history <span>Phillip Ferguson</span></h5>-->
            <!--            </div>-->
            <!--            <div class="comment-date">-->
            <!--              <div class="stars stars-4">4</div><span>Mon, 03-23-2016</span>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="comment-content">-->
            <!--            <p>Vestibulum tellus justo, scelerisque sit amet imperdiet et, placerat non massa. Aliquam erat volutpat. Proin vitae enim cursus, dapibus est at, feugiat mauris. Sed molestie dolor sed ante dictum dictum. Quisque at nulla ipsum. Praesent interdum euismod turpis, eget tristique justo porta eu. Cras ullamcorper pulvinar nibh, eget faucibus neque porta in.</p>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="reviews-bottom">-->
            <!--      <h4>You've been in this hotel?</h4>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
        <!-- review -->
            <!--<div class="container">-->
            <!--  <div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--      <h4 class="trans-uppercase mb-10">Write a review</h4>-->
            <!--      <div class="cws_divider mb-30"></div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="review-content pattern relative">-->
            <!--    <div class="row">-->
            <!--      <div class="col-md-5 mb-md-30 mb-xs-0">-->
            <!--        <div class="review-total"><img src="pic/blog/120x120.jpg" data-at2x="pic/blog/120x120@2x.jpg" alt>-->
            <!--          <div class="review-total-content">-->
            <!--            <h6>Hotel Bohemians</h6>-->
            <!--            <div class="stars stars-4"></div>-->
            <!--            <ul class="icon">-->
            <!--              <li>Istanbul, Turkey<i class="flaticon-suntour-map"></i></li>-->
            <!--            </ul>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="col-md-7">-->
            <!--        <div class="review-marks clearfix mb-30">-->
            <!--          <ul>-->
            <!--            <li>Cleanliness-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--            <li>Location-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--            <li>Staff-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--            <li>Free Wi-Fi-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--          </ul>-->
            <!--          <ul>-->
            <!--            <li>Comfort-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--            <li>Facilities-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--            <li>Value for money-->
            <!--              <div class="stars stars-5"></div>-->
            <!--            </li>-->
            <!--          </ul>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <form class="form clearfix">-->
            <!--      <div class="row">-->
            <!--        <div class="col-md-4">-->
            <!--          <input type="text" name="email" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first">-->
            <!--        </div>-->
            <!--        <div class="col-md-4">-->
            <!--          <input type="text" name="email" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first">-->
            <!--        </div>-->
            <!--        <div class="col-md-4">-->
            <!--          <input type="text" name="email" value="" size="40" placeholder="Booking Number" aria-required="true" class="form-row form-row-first">-->
            <!--        </div>-->
            <!--        <div class="col-md-12">-->
            <!--          <input type="text" name="password" value="" size="40" placeholder="Title of your review" aria-required="true" class="form-row form-row-last">-->
            <!--        </div>-->
            <!--        <div class="col-md-12">-->
            <!--          <textarea name="message" cols="40" rows="4" placeholder="Message of your review" aria-invalid="false" aria-required="true" class="mb-20"></textarea>-->
            <!--          <input type="submit" value="Add a review" class="cws-button alt float-right">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </form>-->
            <!--  </div>-->
            <!--</div>-->
        <!-- ! review -->
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