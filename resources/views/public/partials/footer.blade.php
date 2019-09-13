<style type="text/css">
    
    #diseno{
            height: 40px;
            border: 1px solid #e6e6e6;
            max-width: 100%;
            width: 100%;
            font-size: 14px;
            margin-bottom: 20px;
            padding: 0 15px;
            font-style: italic;
            background: transparent;
    }
</style>


<!-- footer-->
 <footer class="bg-dark type-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="footer-block">
              <img src="img/theme-1/logo.png" alt="" class="logo-footer">
              <div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  magna aliqua. Ut aliquip ex ea commodo consequat.</div>
              <div class="footer-share">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <a href="#"><span class="fa fa-pinterest"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
           <div class="footer-block">
            <h6>Travel News</h6>
            <div class="f_news clearfix">
              <a class="f_news-img black-hover" href="#">
                <img class="img-responsive" src="img/home_6/news_1.jpg" alt="">
                <div class="tour-layer delay-1"></div>
              </a>
              <div class="f_news-content">
                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                <span class="date-f">Mar 18, 2015</span>
                <a href="#" class="r-more">read more</a>
              </div>
            </div>
            <div class="f_news clearfix">
              <a class="f_news-img black-hover" href="#">
                <img class="img-responsive" src="img/home_6/news_2.jpg" alt="">
                <div class="tour-layer delay-1"></div>
              </a>
              <div class="f_news-content">
                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                <span class="date-f">Mar 18, 2015</span>
                <a href="#" class="r-more">read more</a>
              </div>
            </div>
            <div class="f_news clearfix">
              <a class="f_news-img black-hover" href="#">
                <img class="img-responsive" src="img/home_6/news_1.jpg" alt="">
                <div class="tour-layer delay-1"></div>
              </a>
              <div class="f_news-content">
                <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                <span class="date-f">Mar 18, 2015</span>
                <a href="#" class="r-more">read more</a>
              </div>
            </div>              
           </div>
        </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <div class="footer-block">
                     <h6>Contact Info</h6>
                       <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Aenean vulputate porttitor</span></div>
            <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">+93 123 456 789</a></div>
            <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">letstravel@mail.com</a></div>          
            <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">let’s_travel@world.com</a></div>          
            
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
            <span>&copy; 2015 All rights reserved. LET'STRAVEL</span>
          </div>
              <ul>
            <li><a class="link-aqua" href="#">Privacy Policy </a></li>
            <li><a class="link-aqua" href="#">About Us</a></li>
            <li><a class="link-aqua" href="#">Support </a></li>
            <li><a class="link-aqua" href="#">FAQ</a></li>
            <li><a class="link-aqua" href="#">Blog</a></li>
            <li><a class="link-aqua" href="#"> Forum</a></li>
          </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> 


    <div id="scroll-top"><i class="fa fa-angle-up"></i></div>
    <!-- ! footer-->
    <!-- login popup-->
    <div class="login-popup">
      <div class="login-popup-wrap">
        <div class="title-wrap">
          <h2>Login</h2><i class="close-button flaticon-close"></i>
        </div>
        <div class="login-content">
          
            <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-row" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <h6 style="color: red;font-family: italic;">{{ $errors->first('email') }} <h6>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password"  class="form-row form-row-last" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <h6 style="color: red;font-family: italic;">{{ $errors->first('password') }} <h6>
                </span>
                @endif

            </div>
            <div class="row">
                
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="cws-button gray alt full-width mt-20">Login</button>
                </div>
                <!-- /.col -->
            </div>

               <div class="remember">
                <div class="checkbox">
                  <input id="checkbox30" type="checkbox" value="None" name="check">
                  <label for="checkbox30">Remember Me</label>
                </div><a href="#">Forgot Password ?</a>
              </div>
        </form>



       
        </div>
        <div class="login-bot">
          <p>No account yet? <a href="#">Register now</a></p>
        </div>
      </div>
    </div>
    <!-- ! login popup-->


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background: #ffc107;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white;text-align: center;">REGISTRAR</h4>
        </div>
        <div class="modal-body">
         
            <div class="login-content">
          
                         
       
        </div>

        </div>
        <div class="modal-footer"  style="background: #ffc107;">
      
        </div>
      </div>
    </div>
  </div>


    <!-- news popup-->
    <div class="news-popup"> 
      <div class="news-popup-wrap"> <i class="close-button flaticon-close"></i>
        <div class="row">
          <div class="col-sm-6"><img src="pic/news-popup.jpg" data-at2x="pic/news-popup@2x.jpg" alt></div>
          <div class="col-sm-6">
            <div class="news-content">
              <div class="news-title">
                <h2>Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
              </div>
              <form method="get" action="#" class="newsletter contact-form">
                <label class="mb-0">
                  <input type="text" placeholder="Enter Your Email ..." value="" name="email" class="newsletter-field mb-0">
                </label>
                <button type="submit" class="newsletter-submit cws-button alt">Submit</button>
              </form>
              <div class="checkbox-wrap">
                <div class="checkbox">
                  <input id="checkbox40" type="checkbox" value="None" name="check">
                  <label for="checkbox40">Dont Show This Message Again</label>
                </div>
              </div>
              <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! news popup-->



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