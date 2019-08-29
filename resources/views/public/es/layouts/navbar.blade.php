 
 <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:reservas@machupicchugolden.com"> <i class="flaticon-suntour-email"></i>prueba@tours.com</a></div><span>/</span>
                <div class="tel-top"><a href="tel:(723)-700-1183"> <i class="flaticon-suntour-phone"></i>0051 084 584 272 </a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
            <div class="col-md-6 col-sm-5 text-right">
              <div class="top-right-wrap">
                
              
              <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en"> <span class="glyphicon glyphicon-user"></span>  Iniciar sesión <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="/register">Crear cuenta</a></li>
                          <li> 
                              <div class="top-login"><a href="#">Iniciar sesión</a></div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Language <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">English</a></li>
                          <li> <a href="#">Español</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <!-- <div class="nav-logo-wrap local-scroll"><a href="index.html" class="logo"><img src="/public/img/logo.png" data-at2x="img/logo@2x.png" style="height: 20px;"></a></div> -->
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <!-- Item With Sub-->
              <li>
                <a href="/" class="mn-has-sub active">INICIO</a>
              </li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'aventura'])}}" class="mn-has-sub">PAQUETES<i class="fa fa-angle-down button_open"></i></a>
                <!-- Sub-->
                <ul class="mn-sub">
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'aventura'])}}">AVENTURA</a></li>
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'mistico'])}}">MÍSTICO</a></li>
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'tradicional'])}}">TRADICIONAL</a></li>
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'vivencial'])}}">VIVENCIAL</a></li>
                </ul>
                <!-- End Sub-->
              </li>
              <li class="slash">/</li>
              <li><a href="page-contact.html">NOSOTROS</a></li>
              <li class="slash">/</li>

              <li><a href="page-contact.html">TESTIMONIOS</a></li>
               <li class="slash">/</li>

              <li><a href="page-contact.html">CONDICIONES</a></li>
               <li class="slash">/</li>
             
              <li><a href="/blog">BLOG</a></li>
               <li class="slash">/</li>
              <!-- End Item With Sub-->
              <li><a href="/contacto">CONTACTO </a>
                <!-- Sub-->
              
                <!-- End Sub-->
              </li>
              <!-- End Item With Sub-->
            
              
              <li class="search"><a href="#" class="mn-has-sub">Buscar tours</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        <form method="post" class="form">
                          <div class="search-wrap">
                            <input type="text" placeholder="¿Buscar tours?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                          </div>
                        </form>
                      </div>
                      <div class="close-button"><span>Search</span></div>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->