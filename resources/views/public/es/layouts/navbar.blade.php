 
 <!-- header page-->
    <header>
      
      <!-- Navigation panel-->
      <nav class="main-nav transparent stick-fixed">
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
             
              <li><a href="/blog">BLOG</a></li>
               <li class="slash">/</li>
              <!-- End Item With Sub-->
              <li><a href="/contacto">CONTACTO </a></li>
              <li class="slash">/</li>
              <!-- End Item With Sub-->
              <li><a href="#" class="mn-has-sub">LANGUAJE<i class="fa fa-angle-down button_open"></i></a>
                <!-- Sub-->
                <ul class="mn-sub">
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'aventura'])}}">ENGLISH</a></li>
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'mistico'])}}">ESPAÑOL</a></li>
                </ul>
                <!-- End Sub-->
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