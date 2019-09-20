@extends('public.es.layouts.master')

@section('content')
 <!-- SIMPLE-TEXT -->
<div class="main-wraper padd-90">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="second-title">
          <h4 class="subtitle color-dr-blue-2 underline">our proposed</h4>
          <h2>why choose us</h2>
        </div>
      </div>
    </div>    
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
        <div class="simple-text">
          <h3>What We Do?</h3>
          <ul class="color-grey dot-blue-2">
            <li>First Class Flights</li>
            <li>5 Star Accommodations</li>
            <li>Inclusive Packages</li>
            <li>Latest Model Vehicles</li>
            <li>Best Price Guarantee</li>               
          </ul>
        </div>
      </div>
      <div class="col-mob-12 col-xs-12 col-sm-6 col-lg-4">
        <img class="img-responsive img-full radius-5" src="/plantilla/img/inner/about_2.jpg" alt="">
      </div>          
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="simple-text">
          <h3>Who We Are?</h3>
          <p class="color-grey">Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue.</p> 

          <h4>interesting for you</h4>
          <p class="color-grey">Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue.</p>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="container-fluid">
  <div class="testimonials">
     <div class="row no-padd">
       <div class="col-md-12">
          <div class="clip">
            <div class="bg bg-bg-chrome" style="background-image:url(/plantilla/img/home_2/item_img_12.jpg)">
            </div>
          </div>
          <div class="swiper-container testi-3" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="testi-slider-3" style="background-color: black ; opacity: 0.6 ">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testi-wrap" >
                  <div class="qq">
                    <img src="/plantilla/img/quote.png" alt="">
                  </div>
                  <p>Duis posuere eget purus et euismod. Sed luctus ligula non est fringilla commodo. Nullam faucibus quam sit magna risus, fermentum at varius eu.</p>
                    <h4><b>tomas linderman</b></h4>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testi-wrap">
                   <div class="qq">
                     <img src="/plantilla/img/quote.png" alt="">
                   </div>
                  <p>Duis posuere eget purus et euismod. Sed luctus ligula non est fringilla commodo. Nullam faucibus quam sit magna risus, fermentum at varius eu.</p>
                    <h4><b>tomas linderman</b></h4>
                 </div>
              </div>
              <div class="swiper-slide">
                     <div class="testi-wrap">
                       <div class="qq">
                         <img src="/plantilla/img/quote.png" alt="">
                       </div>
                      <p>Duis posuere eget purus et euismod. Sed luctus ligula non est fringilla commodo. Nullam faucibus quam sit magna risus, fermentum at varius eu.</p>
                        <h4><b>tomas linderman</b></h4>
                     </div>
              </div>
            </div>
            <div class="pagination poin-style-1"></div>
          </div>

        </div>
      </div>
  </div> 
</div>

@endsection

@section('script')
  
 
        
 </script>
@endsection


