<style type="text/css">
    
    #diseno{
            height: 40px;
            border: 1px solid #e6e6e6;
            max-width: 100%;
            width: 100%;
            font-size: 14px;
            margin-bottom: 10px;
            padding: 0 15px;
            font-style: italic;
            background: transparent;
    }
</style>


<!-- footer-->
 <footer class="bg-dark type-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-block">
              <img src="/plantilla/img/theme-1/logo.png" alt="" class="logo-footer">
              <div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  magna aliqua. Ut aliquip ex ea commodo consequat.</div>
              <div class="footer-share">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <a href="#"><span class="fa fa-pinterest"></span></a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <div class="footer-block">
                     <h6>Tags:</h6>
                <a href="#" class="tags-b">flights</a>
                <a href="#" class="tags-b">traveling</a>
                <a href="#" class="tags-b">sale</a>
                <a href="#" class="tags-b">cruises</a>
                <a href="#" class="tags-b">cars</a>
                <a href="#" class="tags-b">hotels</a>
                <a href="#" class="tags-b">tours</a>
                <a href="#" class="tags-b">booking</a>
                <a href="#" class="tags-b">countries</a>
           </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="footer-block">
                     <h6>Contact Info</h6>
                       <div class="contact-info" style="margin-bottom: 10px">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Urb. Lucrepata E-13, Cusco, Peru</span></div>
            <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">+93 123 456 789</a></div>
            <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">reservas@tcr.com</a></div>          
            <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">info@tcr.com</a></div>          
            
          </div>
           </div> 
        </div>
        </div>
      </div>
      <div class="footer-link bg-black">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="copyright">
            <span>&copy; 2019 All rights reserved. TCR</span>
          </div>
              <ul>
            <li><a class="link-aqua" href="/">Inicio </a></li>
            <li><a class="link-aqua" href="{{route('paquete',['idioma'=> 'es','categoria'=>'tradicional'])}}">Paquetes</a></li>
            <li><a class="link-aqua" href="/about-us">Nosotros </a></li>
            <li><a class="link-aqua" href="/blog">Blog</a></li>
            <li><a class="link-aqua" href="/contacto"> Contacto</a></li>
          </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> 


    <div id="scroll-top"><i class="fa fa-angle-up"></i></div>

    <!-- ! login popup-->


{!!Html::script('plantilla/js/jquery-2.1.4.min.js')!!}
{!!Html::script('plantilla/js/bootstrap.min.js')!!}
{!!Html::script('plantilla/js/jquery-ui.min.js')!!}
{!!Html::script('plantilla/js/idangerous.swiper.min.js')!!}
{!!Html::script('plantilla/js/jquery.mousewheel.min.js')!!}
{!!Html::script('plantilla/js/jquery.viewportchecker.min.js')!!}
{!!Html::script('plantilla/js/isotope.pkgd.min.js')!!}
{!!Html::script('plantilla/js/all.js')!!}

  </body>
</html>