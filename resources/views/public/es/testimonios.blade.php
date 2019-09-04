@extends('public.es.layouts.master')

@section('content')

<div class="content-body">
      <section class="page-section pt-0 pb-50">
        <!-- section reviews-->
        <div id="reviews" class="container mb-60" style="padding-top: 100px;">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">Reviews travellers</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          <div class="reviews-wrap">
            <div class="reviews-top pattern relative">
              <div class="reviews-total">
                <h5>Excellent</h5>
                <div class="reviews-sub-mark">4.2</div>
                <div class="stars-perc"><span style="width:85%"></span></div><span>Based on 67 reviews</span>
              </div>
              <div class="reviews-marks">
                <ul>
                  <li>Cleanliness<span><span class="stars-perc"><span style="width:85%"></span></span>4.5</span></li>
                  <li>Location<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>
                  <li>Staff<span><span class="stars-perc"><span style="width:100%"></span></span>5.0</span></li>
                  <li>Free Wi-Fi<span><span class="stars-perc"><span style="width:65%"> </span></span>3.5</span></li>
                </ul>
                <ul>
                  <li>Comfort<span><span class="stars-perc"><span style="width:85%"> </span></span>4.5</span></li>
                  <li>Facilities<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>
                  <li>Value for money<span><span class="stars-perc"><span style="width:100%"> </span></span>5.0</span></li>
                </ul>
              </div>
            </div>
            <div class="comments">
              <div class="comment-body">
                <div class="avatar"><img src="pic/blog/90x90/1.jpg" data-at2x="pic/blog/90x90/1@2x.jpg" alt>12 Reviews</div>
                <div class="comment-info">
                  <div class="comment-meta">
                    <div class="title">
                      <h5>Lovely clean, comfortable hotel <span>Rachel George</span></h5>
                    </div>
                    <div class="comment-date">
                      <div class="stars stars-5">5</div><span>Mon, 03-23-2016</span>
                    </div>
                  </div>
                  <div class="comment-content">
                    <p>Proin ut pretium sem. Maecenas id commodo massa. Sed vitae urna hendrerit, commodo dolor non, porttitor odio. Suspendisse ac arcu eu enim lobortis luctus sed quis velit. Nam ut vestibulum orci, at sodales libero. Fusce egestas urna a dolor fermentum, id tincidunt leo eleifend. Phasellus pulvinar hendrerit pulvinar.</p>
                  </div>
                </div>
              </div>
              <div class="comment-body">
                <div class="avatar"><img src="pic/blog/90x90/2.jpg" data-at2x="pic/blog/90x90/2@2x.jpg" alt>12 Reviews</div>
                <div class="comment-info">
                  <div class="comment-meta">
                    <div class="title">
                      <h5>Brilliant hotel with history <span>Phillip Ferguson</span></h5>
                    </div>
                    <div class="comment-date">
                      <div class="stars stars-4">4</div><span>Mon, 03-23-2016</span>
                    </div>
                  </div>
                  <div class="comment-content">
                    <p>Vestibulum tellus justo, scelerisque sit amet imperdiet et, placerat non massa. Aliquam erat volutpat. Proin vitae enim cursus, dapibus est at, feugiat mauris. Sed molestie dolor sed ante dictum dictum. Quisque at nulla ipsum. Praesent interdum euismod turpis, eget tristique justo porta eu. Cras ullamcorper pulvinar nibh, eget faucibus neque porta in.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="reviews-bottom">
              <h4>You've been in this hotel?</h4>
            </div>
          </div>
        </div>
        <!-- review -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">Write a review</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          <div class="review-content pattern relative">
            <div class="row">
              <div class="col-md-5 mb-md-30 mb-xs-0">
                <div class="review-total"><img src="pic/blog/120x120.jpg" data-at2x="pic/blog/120x120@2x.jpg" alt>
                  <div class="review-total-content">
                    <h6>Hotel Bohemians</h6>
                    <div class="stars stars-4"></div>
                    <ul class="icon">
                      <li>Istanbul, Turkey<i class="flaticon-suntour-map"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="review-marks clearfix mb-30">
                  <ul>
                    <li>Cleanliness
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Location
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Staff
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Free Wi-Fi
                      <div class="stars stars-5"></div>
                    </li>
                  </ul>
                  <ul>
                    <li>Comfort
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Facilities
                      <div class="stars stars-5"></div>
                    </li>
                    <li>Value for money
                      <div class="stars stars-5"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <form class="form clearfix">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" name="email" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first">
                </div>
                <div class="col-md-4">
                  <input type="text" name="email" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first">
                </div>
                <div class="col-md-4">
                  <input type="text" name="email" value="" size="40" placeholder="Booking Number" aria-required="true" class="form-row form-row-first">
                </div>
                <div class="col-md-12">
                  <input type="text" name="password" value="" size="40" placeholder="Title of your review" aria-required="true" class="form-row form-row-last">
                </div>
                <div class="col-md-12">
                  <textarea name="message" cols="40" rows="4" placeholder="Message of your review" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                  <input type="submit" value="Add a review" class="cws-button alt float-right">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- ! review -->
        
      </section>
      <!-- ! page section-->
      
      
    </div>

@endsection

@section('script')
  
 
        
 </script>
@endsection


