@extends('public.es.layouts.master')

@section('content')


<div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold">Contáctenos</span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon">
                <li> <a href="#">reservas@machupicchugolden.com , info@machupicchugolden.com <i class="flaticon-suntour-email"></i></a></li>
                <li> <a href="#">(723)-700-1183<i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="#">Av. 28 de Julio Mz. R-2 Oficina 201 - Cusco<i class="flaticon-suntour-map"></i></a></li>
              </ul>
              <p class="mt-20">Si desea mayor información sobre los paquetes turisticos, absolver dudas, darnos sugerencias, etc; escribanos por el formulario de contáctenos.  </p>
              <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.0501372233057!2d-71.96276460039489!3d-13.532514651103106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5faad2fcf35%3A0x41d3623d466dc332!2sEasy+Wash!5e0!3m2!1ses!2spe!4v1561503356877!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25295.930156304785!2d16.371063311644324!3d48.208404844730474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07986fcad78b%3A0x73f5a4d267cc4174!2zTmFnbGVyZ2Fzc2UgMTAsIDEwMTAgV2llbiwg0JDQstGB0YLRgNC40Y8!5e0!3m2!1sru!2sua!4v1453294615596" allowfullscreen=""></iframe>-->
            </div>
          </div>
        </div>
      </div>
      <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
        <div class="container">
          <h4 class="title-section mb-20"><span class="font-bold">Contáctenos</span></h4>
          <div class="widget-contact-form pb-0">
            <!-- contact-form-->
            <div class="email_server_responce"></div>
            <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="input-container">
                    <input type="text" name="name" value="" size="40" placeholder="Nombre" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="email" value="" size="40" placeholder="Correo electrónico" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
              </div>
              <div class="input-container">
                <textarea name="message" cols="40" rows="4" placeholder="Mensaje" aria-invalid="false" aria-required="true"></textarea>
              </div>
              <input type="submit" value="Enviar" class="cws-button alt">
            </form>
            <!-- /contact-form-->
          </div>
        </div>
      </div>
    </div>



@endsection

@section('script')
@endsection
