<?php include_once("template.php");?>
<!DOCTYPE html>
<html lang="it">
<!--[if IE 8]><html class="no-js lt-ie9" lang="it" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Ricorda di cambiarlo e metterlo nel file htaccess -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Gianluca Barranca's Portfolio" ?></title>
  <!-- Fogli di stile -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="../assets/plugins/flexslider/flexslider.css">
<link rel="stylesheet" href="../assets/css/stili-custom.css">
  <!-- Modernizr -->
  <script src="../assets/js/modernizr.custom.js"></script>
  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="../assets/js/respond.min.js"></script>
  <![endif]-->
  <!-- Google Maps -->
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(38.272752,16.296074)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
    <body>
    <!-- menu -->
    <?php head();?>
    <div class="container">
 <section id="intro">
      <div class="row">
        <div class="col-sm-8">
        <!-- foto profilo -->
        <img alt="gianluca barranca picture" class="img-circle circle" src="../assets/img/gb_picture.jpg">
        <h1 class="nome">Gianluca Barranca</h1>
        <h2 class="attivita">IT Freelance</h2>
         <!-- testo -->
        <p class="messaggio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      </div>
      <div class="col-sm-4 dx">
        <!-- contatti -->
         <div class="cont hidden-xs">
            <span class="header">Get in touch</span><div class="clearfix"></div>
         <ul class="list-unstyled">
                <li>
                 <a>Via Repaci 9, Siderno (RC)</a> 
                  <i class="fa fa-globe fa-fw"></i>   
               </li>
               <li>
                  <a>info@gianlucabarranca.com</a>
                  <i class="fa fa-envelope fa-fw"></i>      
               </li>
              <li>
                  <a>+39 334.1734981</a>
                  <i class="fa fa-mobile fa-fw"></i>  
               </li>
            </ul>
            </div>
         <!-- social -->
         <div class="soc hidden-xs">
         <ul>
            <li><a href="#"><img alt="" title="" src="../assets/img/GooglePlus-24.png" height="24" width="24"></a>
            </li>
            <li><a href="#"><img alt="" title="" src="../assets/img/Github-24.png" height="24" width="24"></a>
            </li>
            <li><a href="#"><img alt="" title="" src="../assets/img/LinkedIn-24.png" height="24" width="24"></a>
            </li>
            <li><a href="#"><img alt="" title="" src="../assets/img/Twitter-24.png" height="24" width="24"></a>
            </li>
          </ul>
        </div>
        </div><!-- chiusura colonna -->
        </div> <!-- chiusura prima riga -->
 </section>
      <div class="border"></div>
    <!-- chi sono -->
    <span class="header">Resume</span>
    <section id="resume">
<div class="row">
<div class="col-sm-8">
   <h4><i class="fa fa-pencil fa-lg"></i> Istruzione</h4>
   <ul>
      <li>
         <div class="detail"><span>Marzo 2013</span> </div>
         <div class="info"><strong>Dottore in Informatica</strong><br><br>
         <p>Laurea triennale in Informatica con votazione 110/110 e lode<br> presso l'Universit&agrave; degli Studi di Messina.<br>
         Discussione della tesi: "Responsive Design: un sito multi-device in HTML5 per un visita virtuale dei beni culturali"
         </p>
         </div>
      </li>
   </ul>
   <div class="clearfix"></div>
   <h4><i class="fa fa-suitcase fa-lg"></i> Esperienze</h4>
   <ul>
      <li>
         <div class="detail"><span>Marzo 2013</span> </div>
         <div class="info"><strong>Stagista - Programmatore Web</strong><br><br>
         <p>Stage con finalit&agrave; sviluppo tesi <br>
         Competenze acquisite: HTML5/CSS3, Responsive Design
         </p>
         </div>
  <div class="clearfix"></div>
      </li>
        <li>
         <div class="detail"><span>2008 - Oggi</span> </div>
         <div class="info"><strong>Freelance IT - Webmaster</strong><br><br>
         <p>Sviluppo e amministrazione siti web</p>
         </div>
<div class="clearfix"></div>
      </li>
   </ul>
</div>
<div class="col-sm-4">
<h4><i class="fa fa-flask fa-lg"></i> Competenze</h4>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
    <span class="sr-only">80% Complete</span><p class="align-skill"><b>HTML/CSS - 80%</b></p>
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
    <span class="sr-only">70% Complete</span><p class="align-skill"><b>Python - 70%</b></p>
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
    <span class="sr-only">50% Complete</span><p class="align-skill"><b>Wordpress - 50%</b></p>
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
    <span class="sr-only">65% Complete</span><p class="align-skill"><b>Bootstrap - 65%</b></p>
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    <span class="sr-only">40% Complete</span><p class="align-skill"><b>Photoshop - 40%</b></p>
  </div>
</div>
<!-- Fine skill  -->
<a class="btn btn-info dw-cv" href="#" role="button">Download CV</a>
  </div>
</div><!-- chiusura row -->
</section>
    <!-- Portfolio -->
    <div class="border"></div>
    <span class="header">Portfolio</span>
<section id="portfolio">
<div class="row">
   <div id="categorie">
<!-- Nav tabs -->
<ul class="nav nav-pills">
  <li class="active"><a href="#all" data-toggle="pill">All</a></li>
  <li><a href="#website" data-toggle="pill">Website</a></li>
  <li><a href="#project" data-toggle="pill">Other Project</a></li>
</ul>
</div>
<!-- Tab panes -->
<div class="tab-content">
   <div class="tab-pane active" id="all">
      <?php portfolio_web();?>
      <?php portfolio_project();?>
   </div>
   <div class="tab-pane" id="website">
      <?php portfolio_web();?>
   </div>
   <div class="tab-pane" id="project">
      <?php portfolio_project(); ?>
   </div>
</div>
</div>
</section>
    <!-- Contatti -->
    <div class="border"></div>
     <div id="map-canvas" class="map margin-bottom-40"></div>
    <span class="header">Form contatti</span>
<section id="contatti">
  <div class="row">
   <div class="col-md-9 margin-bottom-30">

       <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'custom',
    custom_theme_widget: 'recaptcha_widget'
 };</script>

      <form method="post" class="contactform margin-bottom-30" name="contactform" action="captcha/verify.php">
            <label for="name">Nome<span class="required">*</span></label>
            <input type="text" required="" placeholder="Enter your name" id="name" name="name">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" required="" placeholder="e.g. info@gipilab.com" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" id="email" name="email">
            <label for="messaggio">Messaggio<span class="required">*</span></label>
            <textarea required="" placeholder="Inserisci qui il tuo messaggio" rows="5" cols="40" id="messaggio" name="messaggio"></textarea>
            <div id="captcha">
            <div id="recaptcha_widget" style="display:none">
   <div id="recaptcha_image"></div>
   <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
   <span class="recaptcha_only_if_image">Inserisci le lettere nello spazio bianco:</span>
   <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
   <div><a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
   <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Genera un'altro codice</a></div>
 </div>
 <script type="text/javascript"
    src="http://www.google.com/recaptcha/api/challenge?k=6Let4ewSAAAAACOedlqGyvYOMck_BBAUU7bFJK0b">
 </script>
 <noscript>
   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Let4ewSAAAAACOedlqGyvYOMck_BBAUU7bFJK0b"
        height="300" width="500" frameborder="0"></iframe><br>
   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
   </textarea>
   <input type="hidden" name="recaptcha_response_field"
        value="manual_challenge">
 </noscript>
            </div><!-- chiusura captcha div -->
     
     <br> <button class="submit-comment" name="submit" type="submit">Send Message</button> 
          </form>
   </div>
   <div class="col-md-3">
           <div class="titoletto"><h2>Contatti</h2></div>
         <ul class="list-unstyled contatti margin-bottom-30">
                <li>
                 <a>
                  <i class="fa fa-home"></i>  
                  Via Repaci 9, Siderno (RC)</a>  
               </li>
               <li>
                  <a>
                  <i class="fa fa-envelope"></i>
                  info@gianlucabarranca.com</a>     
               </li>
              <li>
                  <a>
                  <i class="glyphicon glyphicon-phone"></i>  
                  +39 334.1734981</a>
               </li>
            </ul>
         <div class="titoletto"><h2>Orari</h2></div>
         <ul class="list-unstyled orario">
                <li>
                  <strong>Lunedi-Venerdi:</strong>
                  10:00 - 20:00
                </li>
                <li>
                  <strong>Sabato:</strong>
                  11:00 - 15:00
                </li>
                <li>
                  <strong>Domenica:</strong>
                  Riposo
                </li>
          </ul>
            </div> <!-- chiusura colonna contatti -->
   </div>
</section>    
    </div><!-- chiusura container -->
    <!-- footer-->
    <?php footer();?>
   <!-- jQuery e plugin JavaScript  -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="../assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="../assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
    </body>
</html>