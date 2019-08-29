<!-- Recomended item-->

             @foreach($data as $item)
            <div class="recom-item border">
           
              <div class="recom-media"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                  <div class="pic" style="width: 770px; height: 220px;"><img src="{{$item->img}}" style="width:770; height:240;" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                <!-- <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div> -->
              </div>
              <!-- Recomended Content-->
             
              <div class="recom-item-body"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                  <h6 class="blog-title">{{$item->nombretour}}</h6></a>
                <div class="stars stars-4"></div>
                <div class="recom-price"><span class="font-4">$90</span> per night</div>
                <p class="mb-30">{{$item->descripciontour}}</p><a href="{{route('detalletour',['tour'=>$item->slug])}}" class="cws-button small alt">Leer más</a>
                <!--<div class="action font-2">20%</div>-->
              </div>
             
              <!-- Recomended Image-->
            </div>
       
             @endforeach
           {!! $data->render() !!}