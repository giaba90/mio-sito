<?php include_once("template.php");?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="it" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Ricorda di cambiarlo e metterlo nel file htaccess -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Gianluca Barranca's Portfolio" ?></title>
  <!-- Fogli di stile -->
<!-- Fogli di stile -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="../assets/plugins/flexslider/flexslider.css">
<link rel="stylesheet" href="../assets/css/stili-custom.css">
  <!-- Modernizr -->
  <script src="../assets/js/modernizr.custom.js"></script>
  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="../assets/js/respond.min.js"></script>
  <![endif]-->
 </head>
 <body>
    <?php head();?>
    <div class="container">
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
</div><!-- chiusura container -->
    <?php footer();?>
 <!-- jQuery e plugin JavaScript  -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="../assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
 </body>
</html>