@extends('public.es.layouts.master')

@section('content')
<div class="top-baner arrows" style="margin-top:0px">
  <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2" style="height:300px; background-color: black; opacity: 0.6" >
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="inner-banner style-3">
          <img class="center-image" src="/plantilla/img/bg-tradicional.jpg" alt="">
          <div class="vertical-align">
            <div>                 
                <h2 class="color-white">Tours tradicionales </h2>
                <h3 class="color-white"><span>from $960 /</span> person</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
            <div class="inner-banner style-3">
              <img class="center-image" src="/plantilla/img/bg-vivencial.jpg" alt="">
              <div class="vertical-align">
                <div class="container">
                                    
                  <h2 class="color-white">Tours vivenviales</h2>
                  <h3 class="color-white"><span>from $1960 /</span> person</h3>
                </div>
              </div>
            </div>
      </div>                               
    </div>
    <div class="pagination pagination-hidden poin-style-1"></div>
  </div>
  <div class="arrow-wrapp arr-s-6">
      <div class="cont-1170">
        <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
        <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
      </div>
  </div>
</div>


    <div class="list-wrapper bg-grey-2">
      <div class="container">
        <ul class="list-breadcrumb clearfix">
          <li><a class="color-grey link-dr-blue" href="#">home</a> /</li>
          <li><a class="color-grey link-dr-blue" href="#">hotels</a> /</li>
          <li><span class="color-dr-blue">list hotels</span></li>
        </ul>     
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="sidebar bg-white clearfix">
            <!--<div class="sidebar-block">
              <h4 class="sidebar-title color-dark-2">search</h4>
              <div class="search-inputs">
                <div class="form-block clearfix">
                  <div class="input-style-1 b-50 color-3">
                    <img src="img/loc_icon_small_grey.png" alt="">
                    <input type="text" placeholder="Where do you want to go?">
                  </div>
                </div>              
                <div class="form-block clearfix">
                  <div class="input-style-1 b-50 color-3">
                    <img src="img/calendar_icon_grey.png" alt="">
                    <input type="text" placeholder="Check In" class="datepicker">
                  </div>          
                </div>
                <div class="form-block clearfix">
                  <div class="input-style-1 b-50 color-3">
                    <img src="img/calendar_icon_grey.png" alt="">
                    <input type="text" placeholder="Check Out" class="datepicker">
                  </div>          
                </div>
              </div>
              <input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">        
            </div>-->
            <div class="sidebar-block">
              <h4 class="sidebar-title color-dark-2">categories</h4>
              <ul class="sidebar-category color-3">
                <li class="active">
                  <div class="item-top-sellers clearfix"><img src="/public/tours/categoria/3.jpg" onclick="listar_categorias('tradicional');" data-at2x="/public/tours/categoria/3.jpg" alt>
                    <h3 class="title"><a href="javascript:;" onclick="listar_categorias('tradicional');">TRADICIONAL</a><span style="width:80%"></span></h3>
                  </div>
                </li>
                <li>
                  <div class="item-top-sellers clearfix"><img src="/public/tours/categoria/4.jpg" onclick="listar_categorias('vivencial');" data-at2x="/public/tours/categoria/4.jpg" alt>
                    <h3 class="title"><a href="javascript:;" onclick="listar_categorias('vivencial');">VIVENCIAL</a><span style="width:80%"></span></h3>
                  </div>                
                </li>               
              </ul>
            </div>             
                     
            </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="list-header clearfix">
                <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                  <div class="drop">
                   <b>Sort by price</b>
                    <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                    <span>
                        <a href="#">ASC</a>
                      <a href="#">DESC</a>
                    </span>
                   </div>
                </div>
                
                <div class="list-view-change">
                  <div class="change-grid color-3 fr"><i class="fa fa-th"></i></div>
                  <div class="change-list color-3 fr active"><i class="fa fa-bars"></i></div>
                  <div class="change-to-label fr color-grey-8">View:</div>
                </div>
              
            </div> 
            <div class="list-content clearfix">
              @foreach($data as $item)
              <div class="list-item-entry">
                  <div class="hotel-item style-9 bg-white">
                    <div class="table-view" style="height: 200px">
                        <div class="radius-top cell-view"  >
                          <img src="{{$item->img}}" alt="" style="height: 200px;">
                          <div class="price price-s-4">$600</div>                
                        </div>

                        <div class="title hotel-middle cell-view">
                    <div class="tour-info-line clearfix">
                      <div class="tour-info fl">
                          <img src="/plantilla/img/calendar_icon_grey.png" alt="">
                          <span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
                        </div>
                      <div class="tour-info fl">
                          <img src="/plantilla/img/loc_icon_small_grey.png" alt="">
                          <span class="font-style-2 color-grey-3">PERU</span>
                        </div>            
                    </div>
                            <h4><b>{{$item->nombretour}}</b></h4>
                              <div class="rate-wrap list-hidden">
                                <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      </div>
                        <i>485 rewies</i> 
                              </div>  
                          <p class="f-14 color-grey-3">{{$item->descripciontour}}</p>
                          <div class="buttons-block bg-dr-blue-2">
                            <a href="{{route('detalletour',['tour'=>$item->slug])}}" class="c-button b-40 bg-grey-3-t hv-grey-3-t b-1">detail</a>
                            <a href="#" class="c-button b-40 bg-white hv-transparent fr">book now</a>
                          </div>
                        </div>
                                                
                    </div>
                  </div>            
              </div>
               @endforeach                                 
            </div>
              
           {!! $data->render() !!}
            <div class="c_pagination clearfix padd-120">
            <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>
            <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>
            <ul class="cp_content color-3">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#">10</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
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
