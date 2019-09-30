@extends('public.es.layouts.master')

@section('content')
<!-- MAP BLOCK -->
<div class="map-block">
  <div id="map-canvas" class="style-4" data-lat="33.664467" data-lng="-117.601586" data-zoom="10" data-style="2"></div>
    <div class="addresses-block">
        <a data-lat="33.664467" data-lng="-117.601586" data-string="Santa Monica Hotel"></a>
    </div>
</div>
<!-- CONTACT- -->
<div class="main-wraper padd-90">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="second-title">
          <h4 class="subtitle color-dr-blue-2 underline">contacto</h4>
          <h2>¿tienes preguntas?</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="second-description text-center color-grey-3">Si desea mayor información sobre los paquetes turisticos, absolver dudas, darnos sugerencias, etc; escribanos por el formulario de contáctenos.</div>     
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        {!! Form::open(['route' => ['contacto-informacion.store'] , 'method' => 'POST', 'class' => 'contact-form','id' => "formEnvio"]) !!}
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="input-style-1 type-2 color-2">
                <input type="text" name="name" value="" size="40" placeholder="Nombre" aria-invalid="false" aria-required="true" class="form-row form-row-first">
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="input-style-1 type-2 color-2">
                  <input type="text" name="email" value="" size="40" placeholder="Correo electrónico" aria-required="true" class="form-row form-row-last">
              </div>
            </div> 
            <div class="col-xs-12">
               <textarea class="area-style-1 color-1" name="message" cols="40" rows="4" placeholder="Mensaje" aria-invalid="false" aria-required="true"></textarea>
              <div class="text-center">
                <button type="submit" value="Enviar" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>enviar mensaje</span></button>
              </div>
            </div>
          </div>          
        {!! Form::close() !!} 
      </div>
    </div>
  </div>
</div>

<!--fin  contactenos --> 
<div class="main-wraper padd-90">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <div class="second-title">
          <!--<h4 class="subtitle color-dr-blue-2 underline">contact info</h4>-->
          <h2>contactanos</h2>
        </div>
      </div>
    </div>
    <div class="contact-row">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="contact-entry">
            <img class="contact-icon" src="/plantilla/img/loc_icon_2_dark.png" alt="">
            <div class="contact-label color-grey-3">Direccion:</div>
            <div class="contact-text color-dark-2">Urb. Lucrepata E-13, Cusco, Peru</div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="contact-entry">
            <img class="contact-icon" src="/plantilla/img/mail_icon_l_dark.png" alt="">
            <div class="contact-label color-grey-3">Correo:</div>
            <a class="contact-text color-dark-2 link-dr-blue-2" href="mailto:let’s_travel@world.com">reservas@tcr.com , info@tcr.com </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4">
          <div class="contact-entry">
            <img class="contact-icon" src="/plantilla/img/phone_icon_3_dark.png" alt="">
            <div class="contact-label color-grey-3">Telefono:</div>
            <a class="contact-text color-dark-2 link-dr-blue-2" href="tel:">(723)-700-1183</a>
          </div>
        </div>            
      </div>
    </div>
    <div class="share style-2 clearfix">
      <ul>
            <li class="color-in"><a href=""><i class="fa fa-linkedin"></i>linkedin<span class="color-in-2">19</span></a></li>     
            <li class="color-fb"><a href=""><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>
            <li class="color-tw"><a href=""><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>
            <li class="color-gg"><a href=""><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>
            <li class="color-pin"><a href=""><i class="fa fa-pinterest"></i>pinterest<span class="color-pin-2">70</span></a></li>
          </ul>           
    </div>
  </div>
</div>

@endsection

@section('script')

<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&amp;callback">
</script>
<script src="/assets/js/map.js"></script>

@endsection
