 
 <!-- header page-->
  <header class="color-1 hovered menu-3">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="nav"> 
            <a href="index.html" class="logo">
              <img src="/plantilla/img/theme-1/logo_dark.png" alt="lets travel">
            </a>
            <div class="nav-menu-icon">
          <a href="#"><i></i></a>
        </div>
          <nav class="menu">
          <ul>
          <li class="type-1 active">
            <a href="#">home<span class="fa fa-angle-down"></span></a>
            <ul class="dropmenu">
              <li><a href="index.html">INICIO</a></li>
            </ul>
          </li>
          <li class="type-1"><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'tradicional'])}}">PAQUETES<span class="fa fa-angle-down"></span></a>
            <ul class="dropmenu">
              <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'tradicional'])}}">TRADICIONAL</a></li>
              <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'vivencial'])}}">VIVENCIAL</a></li>
            </ul>
          </li>
          <li class="type-1"><a href="#">NOSOTROS<span class="fa fa-angle-down"></span></a>
          </li>
          <li class="type-1"><a href="#">CONTACTO<span class="fa fa-angle-down"></span></a>
          </li>
          <li class="type-1"><a href="#">LENGUAJE<span class="fa fa-angle-down"></span></a>
            <ul class="dropmenu">
              <li><a href="cruise_list.html">ESPAÑOL</a></li>
                            <li><a href="cruise_grid.html">ENGLISH</a></li>
            </ul>
          </li>
          </ul>
       </nav>
       </div>
         </div>
      </div>
   </div>
  </header>
    <!-- ! header page-->