@extends('public.es.layouts.master')

@section('content')
<div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-4">
            <div class="search-hotels mb-40 pattern alt">
              <div class="tours-container">
                <div class="tours-box">
                  <div class="tours-search mb-20">
                      
                      
                    <form method="post" class="form search divider-skew">
                      <div class="search-wrap">
                        <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                      </div>
                    </form>
                  
                  </div>
                  <div class="row">
                    <div class="col-md-6 clearfix">
                      <div class="widget-price-slider">
                        <form method="get" action="#">
                          <div class="price_slider_wrapper">
                            <div aria-disabled="false" class="price_slider price_slider_amount ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                              <div class="ui-slider-range ui-widget-header ui-corner-all"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                                <div style="" class="price_label"><span class="from"></span></div></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                                <div style="" class="price_label"><span class="to"></span></div></a>
                            </div>
                            <div class="price_slider_amount addon">
                              <input id="min_price" type="text" name="min_price" value="" data-min="0" placeholder="Min price" style="display: none;">
                              <input id="max_price" type="text" name="max_price" value="" data-max="200" placeholder="Max price" style="display: none;">
                              <input type="hidden" name="post_type" value="product">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="rating">Rating
                        <div class="stars stars-5"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="tours-search">
                        <form method="post" class="form search">
                          <div class="search-wrap">
                            <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                          </div>
                        </form>
                        <div class="button-search">BUSCAR</div>
                      </div>
                    </div>
                  </div>
 
                </div>

              </div>
              
            </div>
            
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
                       
          
          <div class="col-md-8" id="categoria">
            <!-- Recomended item-->
             @foreach($data as $item)
            <div class="recom-item border">
           
              <div class="recom-media"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                  <div class="pic" style="width: 770px; height: 220px;"><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt></div></a>
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
          </div>
            <div id="procesoCarga" style="position: absolute;z-index: 100;margin-left: 700px;margin-top: 300px;"> 
          
        </div>
      </div>
      <!-- call out section-->
   
      <!-- ! call out section	-->
    </div>
@endsection


@section('script')

<script>



$(document).on('click','.pagination a', function(e){

    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];
    $('#procesoCarga').html('<div class="loading"><img src="/public/img/carga2.gif" alt="loading" /><br/></div>');
     $.ajax({                        
                url:'{{ route('listar_tours',['idioma'=> 'es','categoria'=>$categoria]) }}',
                data:{page:page},
                type: 'GET',           
                dataType:'json',
                success: function(data)             
                {
                
                  $("#categoria").html(data);
                  $('#procesoCarga').html('');
                  
                }
        });  
        
    

});

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
