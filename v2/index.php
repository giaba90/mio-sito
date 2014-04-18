<?php include_once("template.php");?>
<!DOCTYPE html>
<html lang="it">
<!--[if IE 8]><html class="no-js lt-ie9" lang="it" ><![endif]-->
<!--[if gt IE 8]><html class="no-js" ><![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gianluca Barranca's Portofolio | IT Freelance</title>
  <meta name="description" content="Portfolio web di Gianluca Barranca - IT Freelance . Download Curriculum Vitae">
  <meta name="author" content="Gianluca Barranca">
  <meta name="ROBOTS" content="INDEX,FOLLOW">
  <meta name="revisit-after" content="30 days">
  <meta name="google-site-verification" content="VL0TH0qifpHwpbpjY1f-ZQXhdSWk2Pdw83myDbOWPx4" />
  <!-- Fogli di stile -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/plugins/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="./assets/css/stili-custom-new.css">
  <!-- Modernizr -->
  <script src="./assets/js/modernizr.custom.js"></script>
  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="./assets/js/respond.min.js"></script>
  <![endif]-->
  <!-- Google Maps -->
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
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
        <img alt="gianluca barranca picture" class="img-circle circle" src="./assets/img/gb_picture.jpg" width="85" height="85">
        <h1 class="nome">Gianluca Barranca</h1>
        <h2 class="attivita">IT Freelance</h2>
         <!-- testo -->
        <p class="messaggio item">Sono un ragazzo degli anni 90' , cresciuto con la passione per i Lego. 
          Nel 1998 ricevo in regalo per Natale il mio primo computer da tavolo. 
          Era in pentium I con su installato Windows 95 successivamente diventato win 98. 
          Lo usavo poco, sennò per giocare a pinball o FIFA e fare qualche disegno con paint. 
          Preferivo i Lego al computer. Nel 2002 la svolta, a casa mia entra il telefono fisso e la prima connessione a 56K. 
          Segue qualche anno più tardi l'adsl. Li qualcosa inizia a cambiare, mi appassiono ad internet, inizio a frequentare forum sul calcio , manga e grafica. 
          <span id="spoiler" style="display:none">
          Divento il moderatore di alcuni di essi ed inizio a imparare l'HTML e i CSS. Su consiglio di un ragazzo conosciuto online seguo dei tutorial su Photoshop. 
          Da li do spazio alla mia fantasia che sin da piccolo mi caratterizzava. 
          Dal 2004 al 2009 frequento l'istituto professionale con indirizzo elettrico ed elettronico e scopro una nuova passione per l'elettronica ed i computer. 
          Finite le superiori decido di provare il test per entrare ad informatica presso l'università di Messina. 
          Esso ha esito positivo, così inizio un percorso universitario triennale. Nel corso dei tre anni , stringo amicizia con persone che condividono con me la stessa passione per l'informatica .
          Mi aggiorno sulle nuove tecnologie ed acquisisco conoscenze sulla programmazione e l'architettura degli elaboratori. 
          Nel Marzo del 2013 discuto la tesi di laurea: "Responsive Design: un sito multi-device in HTML5 per un visita virtuale dei beni culturali" che viene premiata con un 110 e lode più la vittoria del premio di laurea . 
          Una grande soddisfazione personale e familiare . Oggi porto avanti lo studio da autodidatta dei linguaggi di programmazione web e tecniche seo. Realizzo come freelance siti web e sono in cerca di occupazione fissa.
          </span>
           <a href="#" class="more" id="read_more" onclick="hide();">Continua...</a>
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
            <li><a href="https://plus.google.com/+GianlucaBarranca"><img alt="gianluca barranca su google plus" title="gianluca barranca su google plus" src="./assets/img/GooglePlus-24.png" height="24" width="24"></a>
            </li>
            <li><a href="https://github.com/giaba90"><img alt="gianluca barranca su github giaba90" title="gianluca barranca su github " src="./assets/img/Github-24.png" height="24" width="24"></a>
            </li>
            <li><a href="http://www.linkedin.com/pub/gianluca-barranca/3a/a4/264"><img alt="gianluca barranca su linkedin" title="gianluca barranca su linkedin" src="./assets/img/LinkedIn-24.png" height="24" width="24"></a>
            </li>
            <li><a href="https://twitter.com/giaba90"><img alt="" title="" src="./assets/img/Twitter-24.png" height="24" width="24"></a>
            </li>
          </ul>
        </div>
        </div><!-- chiusura colonna -->
        </div> <!-- chiusura prima riga -->
 </section>
      <div class="border"></div>
    <!-- chi sono -->
    <section id="resume">
      <h3><span class="header">Resume</span></h3>
    <div class="row">
<div class="col-sm-8">
   <h4><i class="fa fa-pencil fa-lg"></i> Istruzione</h4>
   <ul>
      <li>
         <div class="detail"><span>Marzo 2013</span> </div>
         <div class="info"><strong>Dottore in Informatica</strong><br><br>
         <p>Laurea di 1° livello in Informatica con votazione 110/110 e lode<br> presso l'Universit&agrave; degli Studi di Messina.<br>
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
<a class="btn btn-info dw-cv" href="/cv_gianluca_barranca.pdf" role="button">Download CV</a>
  </div>
</div><!-- chiusura row -->
</section>
    <!-- Portfolio -->
    <div class="border"></div>
<section id="portfolio">
    <h3><span class="header">Portfolio</span></h3>
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
<section id="contatti">
    <h3><span class="header">Form contatti</span></h3>
  <div class="row">
   <div class="col-xs-10 col-md-9 margin-bottom-30">
      <form method="post" class="contactform margin-bottom-30" name="contactform" action="invio_email.php">
            <label for="name">Nome<span class="required">*</span></label>
            <input type="text" required="" placeholder="Inserisci il tuo nome" id="name" name="name">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" required="" placeholder="e.g. info@gianlucabarranca.com" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" id="email" name="email">
            <label for="messaggio">Messaggio<span class="required">*</span></label>
            <textarea required="" placeholder="Inserisci qui il tuo messaggio" rows="5" cols="40" id="messaggio" name="messaggio"></textarea>
     <br> <button class="submit-comment" name="submit" type="submit">Send Message</button> 
          </form>
   </div>
   <div class="col-xs-8 col-md-3">
           <div class="titoletto"><h2>Contatti</h2></div>
         <ul class="list-unstyled contatti margin-bottom-30">
                <li>
                 <a><i class="fa fa-home"></i>Via Repaci 9, Siderno (RC)</a>  
               </li>
               <li>
                  <a><i class="fa fa-envelope"></i>info@gianlucabarranca.com</a>     
               </li>
              <li>
                  <a><i class="glyphicon glyphicon-phone"></i>+39 334.1734981</a>
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
    <?php modal(); ?>
 <a href="#" class="scrolltotop"><p>prova</p></a>
   <!-- jQuery e plugin JavaScript  -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="./assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
function hide(){
  if(document.getElementById('spoiler') .style.display=='none') {
      document.getElementById('spoiler') .style.display='';
      document.getElementById("read_more").innerHTML="Nascondi";
    }
    else{
      document.getElementById('spoiler') .style.display='none';
      document.getElementById("read_more").innerHTML="Continua...";
    }
}
$(document).ready(function(){

   $(window).scroll(function(){
       if ($(this).scrollTop() > 250) {
           $('.scrolltotop').fadeIn();
       }
       else {
           $('.scrolltotop').fadeOut();
       }
});
$('.scrolltotop').click(function(){
       $("html, body").animate({ scrollTop: 0 }, 800);
       return false;
       });
});
</script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48000382-1', 'gianlucabarranca.it');
  ga('send', 'pageview');

</script>
    </body>
</html>