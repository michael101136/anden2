<header class="type-3 color-9 hovered scrol-sm">

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="nav"> 
            <a href="/" class="logo">
              <img src="/plantilla/img/theme-1/logo.png" alt="lets travel">
            </a>
            <div class="nav-menu-icon">
              <a href="#"><i></i></a>
            </div>
            <nav class="menu">
            <ul>
              <li class="type-1 active">
                 <a href="/">INICIO<span ></span></a>
              </li>
              <li class="type-1"><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'tradicional'])}}">PAQUETES<span class="fa fa-angle-down"></span></a>
                <ul class="dropmenu">
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'tradicional'])}}">TRADICIONAL</a></li>
                  <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'vivencial'])}}">VIVENCIAL</a></li>
                </ul>
              </li>
              <li class="type-1"><a href="/about-us">NOSOTROS<span></span></a></li>
              <li class="type-1"><a href="/blog">BLOG<span></span></a></li>
              <li class="type-1"><a href="/contacto">CONTACTO<span></span></a></li>
              <li class="type-1"><a href="#">LENGUAJE<span class="fa fa-angle-down"></span></a>
                <ul class="dropmenu">
                  <li><a href="/es">ESPAÑOL</a>
                      <a href="/en">ENGLISH</a>
                  </li>
                </ul>
              </li>
            </nav>
          </div>
        </div>
      </div>
  </div>
  <div class="loading">
    <div class="loading-center">
      <div class="loading-center-absolute">
        <div class="object object_four"></div>
        <div class="object object_three"></div>
        <div class="object object_two"></div>
        <div class="object object_one"></div>
      </div>
    </div>
  </div>
</header>
