<div id="procesoCarga" style="position: absolute;z-index: 100;margin-left: 580px;margin-top: 300px;">
            
            </div>
@foreach($blog as $item)
              <div class="col-lg-6 mb-30">
                <!-- Blog item-->
                <div class="blog-item clearfix border">
                  <!-- Blog Image-->
                  <div class="blog-media"><a href="blog-single.html">
                      <div class="pic"><img src="{{ $item->urlimagen}}" data-at2x="pic/blog/270x270/1@2x.jpg" alt style="width:270px; height:270px;"></div></a></div>
                  <!-- blog body-->
                  <div class="blog-item-body clearfix">
                    <!-- title--><a href="blog-single.html">
                      <h6 class="blog-title">{{$item->titulo}}</h6></a>
                    <div class="blog-item-data">{{$item->fechaPublicacion}}</div>
                    <!-- Text Intro-->
                    
                   <p> {!!str_limit($item->descripcioncorta,80)!!}</p><a href="blog-single.html" class="blog-button">Leer más</a>
                  </div>
                </div>
                <!-- ! Blog item-->
              </div>
@endforeach
{!! $blog->render() !!}