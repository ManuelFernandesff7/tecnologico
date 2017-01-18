<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <nav class="amber accent-4">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img class="responsive-img" src="images/logo_uanl_head.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html" class="black-text">Inicio</a></li>
        <li><a href="badges.html" class="black-text">Conocénos</a></li>
        <li><a href="collapsible.html" class="black-text">Biblioteca Digital</a></li>
        <li><a href="mobile.html" class="black-text">Bibliotecas</a></li>
        <li><a href="mobile.html" class="black-text">Herramientas</a></li>
      </ul>
      <ul class="side-nav amber accent-4" id="mobile-demo">
        <li><a href="sass.html" class="black-text">Inicio</a></li>
        <li><a href="badges.html" class="black-text">Conocénos</a></li>
        <li><a href="collapsible.html" class="black-text">Biblioteca Digital</a></li>
        <li><a href="mobile.html" class="black-text">Bibliotecas</a></li>
        <li><a href="mobile.html" class="black-text">Herramientas</a></l
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
    <div class="col s12 l12">
    <h4 class="black-text">Contáctanos</h4>
    </div>
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" required="">
          <label for="first_name" class="black-text">Nombre</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name" class="black-text">Apellidos</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" required="">
          <label for="email" class="black-text">Email</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
          <i class="material-icons prefix">comment</i>
            <textarea id="textarea1" class="materialize-textarea" length="120" required=""></textarea>
            <label for="textarea1" class="black-text">Mensaje</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light red" type="submit">Enviar<i class="material-icons right">send</i></button>
    </form>
  </div>
  </div>


 <footer class="amber accent-4 page-footer">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <img class="responsive-img" src="images/vision2020.png">
              </div>
              <div class="col l6 s12">
              <h5>Dirección</h5>
                <p>
                Av. Alfonso Reyes No. 4000 Nte. Col. Regina C.P. 64290<br />
                Monterrey, Nuevo León, México<br />
                Tel: +52 (81) 83.29.40.90<br />
                Fax: +52 (81) 83.29.40.65.</p>
                <p>
                  Sitio desarrollado y mantenido por la Dirección de Bibliotecas
                  de la Secretaría de Extensión y Cultura
                  y el Sistema Integral de Bibliotecas de la UANL
                </p>
              </div>

              <div class="col l3 s12">
              <h5>Enlaces</h5>
              <ul>
                <li><a class="black-text" href="#!">Mapa del sitio</a></li>
                <li><a class="black-text" href="#!">Eventos</a></li>
                <li><a class="black-text" href="#!">SIBUANL</a></li>
                <li><a class="black-text" href="#!">Preguntas frecuentes</a></li>
                <li><a class="black-text" href="#!">Suscribete a biblios</a></li>
                <li><a class="black-text" href="#!">Bolsa de trabajo</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2017 UANL
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>
       <div class="fixed-action-btn vertical click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
    <li><a class="btn-floating orange darken-4"><i class="material-icons">info</i></a></li>
      <li><a class="btn-floating orange darken-4"><i class="material-icons">location_on</i></a></li>
      <li><a class="btn-floating orange darken-4"><i class="material-icons">question_answer</i></a></li>
      
    </ul>
  </div>
  </body>
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      (function($){
       
        })(jQuery); // end of jQuery name space
    </script>
  </body>
</html>