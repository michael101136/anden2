<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
@extends('public.es.layouts.master')

@section('content')
<!-- INNER-BANNER -->
<div class="inner-banner ">
  <img class="center-image" src="/plantilla/img/bg_blog.jpg" alt="">
  <div class="vertical-align">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <ul class="banner-breadcrumb color-white clearfix">
              <li><span></span></li>
            </ul>
            <h2 class="color-white">blog</h2>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- BLOG -->
<div class="detail-wrapper">
  <div class="container">
        <div class="row padd-90">
          <div class="col-xs-12 col-md-8">
            <div class="detail-header style-2">
              <h2 class="detail-title color-dark-2">{{$detalleBlog->titulo}}</h2>
          <div class="tour-info-line clearfix">
            <div class="tour-info fl">
                <img src="/plantilla/img/calendar_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2">03/07/2015</span>
              </div>
            <div class="tour-info fl">
                <img src="/plantilla/img/people_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2">By Emma Stone</span>
              </div>
            <div class="tour-info fl">
                <img src="/plantilla/img/comment_icon_grey.png" alt="">
                <span class="font-style-2 color-dark-2">10 comments</span>
              </div>            
          </div>              
            </div>
            <div class="detail-content">
              <div class="detail-content-block">
            <div class="embed-responsive embed-responsive-16by9">
              <img src="{{$detalleBlog->urlimagen}}" data-at2x="pic/blog/770x370@2x.jpg" alt>
            </div>          
            <h3>{{$detalleBlog->autor}}</h3>
            <p>{!!$detalleBlog->contenido!!}</p>
              
            <h5>interesting for you</h5>

            <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue.</p>

            
            <!--<div class="tags clearfix">
              <div class="tags-title color-dark-2">tag:</div>
              <ul class="clearfix">
                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">flights</a></li>
                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a></li>
                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Sale</a></li>
                <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">cruises</a></li>             
              </ul>           
            </div> -->
            <div class="share clearfix">
              <div class="share-title color-dark-2">share:</div>
              <ul>
                      <li class="color-fb"><a href=""><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>
                      <li class="color-tw"><a href=""><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>
                      <li class="color-gg"><a href=""><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>
                      <li class="color-pin"><a href=""><i class="fa fa-pinterest"></i>pinterest<span class="color-pin-2">70</span></a></li>
                    </ul>           
            </div>
          </div>                    
        </div>
        
        <div class="additional-block">
          <h4 class="additional-title">comments <span class="color-dr-blue-2">(4)</span></h4>
          <ul class="comments-block">
            <li class="comment-entry clearfix">
              <img class="commnent-img" src="img/detail/comment_1.jpg" alt="">
              <div class="comment-content clearfix">
                <div class="tour-info-line">
                  <div class="tour-info">
                      <img src="img/calendar_icon_grey.png" alt="">
                      <span class="font-style-2 color-dark-2">03/07/2015</span>
                    </div>
                  <div class="tour-info">
                      <img src="img/people_icon_grey.png" alt="">
                      <span class="font-style-2 color-dark-2">By Emma Stone</span>
                    </div>          
                </div>
                <div class="comment-text color-grey">Nunc a tincidunt lectus, vitae molestie ante. Maecenas feugiat commodo sem facilisis vulputate. Integer fermentum laoreet sollicitud insollicitudin sollicitudin.</div>
                <a class="comment-reply c-button b-26 bg-dr-blue-2 hv-dr-blue-2-o" href="#">Reply</a>
              </div>
              <ul class="comments-block">
                <li class="comment-entry clearfix">
                  <img class="commnent-img" src="img/detail/comment_2.jpg" alt="">
                  <div class="comment-content clearfix">
                    <div class="tour-info-line">
                      <div class="tour-info">
                          <img src="img/calendar_icon_grey.png" alt="">
                          <span class="font-style-2 color-dark-2">03/07/2015</span>
                        </div>
                      <div class="tour-info">
                          <img src="img/people_icon_grey.png" alt="">
                          <span class="font-style-2 color-dark-2">By Emma Stone</span>
                        </div>          
                    </div>
                    <div class="comment-text color-grey">Nunc a tincidunt lectus, vitae molestie ante. Maecenas feugiat commodo sem facilisis vulputate. Integer fermentum laoreet sollicitud insollicitudin sollicitudin.</div>
                    <a class="comment-reply c-button b-26 bg-dr-blue-2 hv-dr-blue-2-o" href="#">Reply</a>
                  </div>
                </li>
              </ul>                       
            </li>
            <li class="comment-entry clearfix">
              <img class="commnent-img" src="img/detail/comment_3.jpg" alt="">
              <div class="comment-content clearfix">
                <div class="tour-info-line">
                  <div class="tour-info">
                      <img src="img/calendar_icon_grey.png" alt="">
                      <span class="font-style-2 color-dark-2">03/07/2015</span>
                    </div>
                  <div class="tour-info">
                      <img src="img/people_icon_grey.png" alt="">
                      <span class="font-style-2 color-dark-2">By Emma Stone</span>
                    </div>          
                </div>
                <div class="comment-text color-grey">Nunc a tincidunt lectus, vitae molestie ante. Maecenas feugiat commodo sem facilisis vulputate. Integer fermentum laoreet sollicitud insollicitudin sollicitudin.</div>
                <a class="comment-reply c-button b-26 bg-dr-blue-2 hv-dr-blue-2-o" href="#">Reply</a>
              </div>                        
            </li>
            <li class="comment-entry clearfix">
              <img class="commnent-img" src="img/detail/comment_1.jpg" alt="">
              <div class="comment-content clearfix">
                <div class="tour-info-line">
                  <div class="tour-info">
                      <img src="img/calendar_icon_grey.png" alt="">
                      <span class="font-style-2 color-dark-2">03/07/2015</span>
                    </div>
                  <div class="tour-info">
                      <img src="img/people_icon_grey.png" alt="">
                      <span class="font-style-2 color-dark-2">By Emma Stone</span>
                    </div>          
                </div>
                <div class="comment-text color-grey">Nunc a tincidunt lectus, vitae molestie ante. Maecenas feugiat commodo sem facilisis vulputate. Integer fermentum laoreet sollicitud insollicitudin sollicitudin.</div>
                <a class="comment-reply c-button b-26 bg-dr-blue-2 hv-dr-blue-2-o" href="#">Reply</a>
              </div>                        
            </li>               
          </ul>
          <form>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="form-block type-2 clearfix">
                  <div class="input-style-1 b-50 brd-0 type-2 color-3">
                    <input type="text" required="" placeholder="Enter your name">
                  </div>
                </div>                
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-block type-2 clearfix">
                  <div class="input-style-1 b-50 brd-0 type-2 color-3">
                    <input type="text" required="" placeholder="Enter your email">
                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-block type-2 clearfix">              
                  <textarea class="area-style-1 type-2 color-3" required="" placeholder="Write a comment..."></textarea>
                </div>
                <input type="submit" class="c-button b-40 fr bg-dr-blue-2 hv-dr-blue-2-o" value="post comment">
              </div>
              
            </div>
          </form>                   
        </div>                      
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="right-sidebar">
              <div class="sidebar-block type-2">
                <div class="widget-search clearfix">
                  <form>
                    <div class="input-style-1 b-50 brd-0 type-2 color-3">
                  <input type="text" placeholder="Enter what you want to find">
                </div>
                <input class="widget-submit" type="submit" value="">
                  </form>
                </div>
              </div>
          <div class="sidebar-block type-2">
            <h4 class="sidebar-title color-dark-2">categories</h4>
            <ul class="sidebar-category color-5">
              @foreach($tipocategoria as $item)
                <!--<li><a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}">{{$item->nombre}}</a></li>-->
                <li><a href="#">{{$item->nombre}}</a></li>
              @endforeach                                                
            </ul>
          </div> 
          <div class="sidebar-block type-2">
            <h4 class="sidebar-title color-dark-2">popular posts</h4>
            <div class="widget-popular">
              @foreach($post as $item)
              <div class="hotel-small style-2 clearfix">
                <a class="hotel-img black-hover" href="{{route('detalleBlog',['blog'=>$item->url])}}">
                  <img class="img-responsive radius-0" src="{{$item->urlimagen}}" alt="">
                  <div class="tour-layer delay-1"></div>                    
                </a>
                <div class="hotel-desc">
                  <div class="tour-info-line">
                    <div class="tour-info">
                        <img src="/plantilla/img/calendar_icon_grey.png" alt="">
                        <span class="font-style-2 color-dark-2">{{$item->fechaPublicacion}}</span>
                      </div>
                    <div class="tour-info">
                        <img src="/plantilla/img/people_icon_grey.png" alt="">
                        <span class="font-style-2 color-dark-2">By {{$item->autor}}</span>
                      </div>          
                  </div>
                    <h4>{!!str_limit($item->titulo,60)!!}</h4>
                                     
                </div>
              </div>
              @endforeach
                                           
            </div>
          </div>
 
          <div class="sidebar-block type-2">
            <div class="widget-slider arrows">
              <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide radius-4 active" data-val="0">
                    <img class="center-image" src="img/detail/widget_s.jpg" alt="">
                    <div class="vertical-bottom">
                      <h4 class="color-white">best hotels reviews</h4>
                      <div class="tour-info-line clearfix">
                        <div class="tour-info">
                            <img src="img/calendar_icon.png" alt="">
                            <span class="font-style-2 color-white">03/07/2015</span>
                          </div>
                        <div class="tour-info">
                            <img src="img/people_icon.png" alt="">
                            <span class="font-style-2 color-white">By Emma Stone</span>
                          </div>          
                      </div>                      
                    </div>
                  </div>
                  <div class="swiper-slide radius-4" data-val="1">
                    <img class="center-image" src="img/home_9/f_slide.jpg" alt="">
                    <div class="vertical-bottom">
                      <h4 class="color-white">royal Hotel</h4>
                      <div class="tour-info-line clearfix">
                        <div class="tour-info">
                            <img src="img/calendar_icon.png" alt="">
                            <span class="font-style-2 color-white">03/07/2015</span>
                          </div>
                        <div class="tour-info">
                            <img src="img/people_icon.png" alt="">
                            <span class="font-style-2 color-white">By Emma Stone</span>
                          </div>          
                      </div>                        
                    </div>                    
                  </div>  
                </div>    
                <div class="pagination pagination-hidden poin-style-1"></div>
                  <div class="arr-t-3">
                  <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
                  <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
                </div>      
              </div>
            </div>
          </div>
          
          <div class="sidebar-block type-2">
            <h4 class="sidebar-title color-dark-2">popular tags</h4>
            <ul class="widget-tags clearfix">
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">flights</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Sale</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">cruises</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Sale</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Illegal</a></li>
              <li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">flights</a></li>               
            </ul>
          </div>                             
                                            
            </div>            
          </div>
        </div>
  </div>
</div>

<div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-8 mb-md-140">
            <!-- Blog Post image-->
          
            <div class="blog-item alt pb-20">
              <!-- Blog Image-->
             
              <div class="pic"><img src="{{$detalleBlog->urlimagen}}" data-at2x="pic/blog/770x370@2x.jpg" alt></div>
              <!-- title, author...-->
              <div class="blog-item-data clearfix">
                <h3 class="blog-title">{{$detalleBlog->titulo}}</h3>
                <p class="post-info"><i class="flaticon-people"></i><span class="posr-author">{{$detalleBlog->autor}} </span>on<a href="#" class="post-category"> <span>Adventure</span></a>,<a href="#" class="post-category"> <span>Wildlife </span></a>at {{$detalleBlog->fechaPublicacion}}</p>
              </div>
              <!-- Text Intro-->
              <p class="mb-25">{!!$detalleBlog->contenido!!}</p>
              
              <!-- Blockquote-->
              <!-- <div class="quote alt-2 clearfix mb-30 mt-20">
                <p>I am not a great cook, I am not a great artist, but I love art, and I love food, so I am the perfect traveller.</p><span>- Michael Palin</span>
              </div> -->
              <!-- Text Intro-->
              
              <!-- Post Tags-->
              <div class="blog-tags mb-40">
                <div class="blog-nav-tags"> <i class="flaticon-suntour-tag"></i><a href="#">Travel</a>, <a href="#">Beach</a>, <a href="#">Family</a></div>
                <div class="blog-nav-share align-right mt-lg-0"> <a href="#" class="cws-social fa fa-twitter"></a>
                <a href="#" class="cws-social fa fa-facebook"></a>
                <a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
              </div>
            </div>
         
           
          </div>
          <div class="col-md-4 sidebar">
            <aside class="sb-right pb-50-imp">
              
              
              <!-- ! widget post-->
              <!-- widget tags-->
              <div class="cws-widget">
                <div class="widget-tags">
                  <h2 class="widget-title">Tags</h2>
                  <!-- item tags-->
                  <div class="widget-tags-wrap">
                  @foreach($tipocategoria as $item)
                    <a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}" rel="tag" class="tag">{{$item->nombre}}</a>
                  @endforeach 
                    
                  </div>
                </div>
              </div>
              
            </aside>
          </div>
        </div>
      </div>
    </div>

    <div id="fb-root"></div>

    <div class="fb-share-button" 
        data-href="{{route('detalleBlog',['blog'=>$detalleBlog->url])}}" 
        data-layout="button_count">
    </div>
    <!-- <a href="http://www.facebook.com/sharer.php?u={{route('detalleBlog',['blog'=>$detalleBlog->url])}}&t={!!$detalleBlog->titulo!!};display=popup&amp; " target="_blank">Compartir en Facebook</a> -->

    
@endsection

@section('script')

<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

@endsection