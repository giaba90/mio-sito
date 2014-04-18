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
<span class="header">Portfolio</span>
<section id="portfolio">
  <!-- <h4><i class="fa fa-picture-o fa-lg"></i> I miei lavori</h4> -->
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
</div>
    <?php footer();?>
        <div class="modal fade" id="modal-1">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">gipilab.com</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/gipilab.jpg" alt="" class="img-responsive">
   </div>
   <div class="modal-footer">
    <a href="#" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
    <div class="modal fade" id="modal-2">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">romemedicalcare.com</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/hotel.jpg" alt="" class="img-responsive">
   </div>
   <div class="modal-footer">
    <a href="#" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <div class="modal fade" id="modal-3">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">dagostinoprogress.com</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/dagostinoprogress.jpg" alt="" class="img-responsive">
   </div>
   <div class="modal-footer">
    <a href="#" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <div class="modal fade" id="modal-4">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">romamed-studiomedico.com</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/romamed-siderno.jpg" alt="" class="img-responsive">
   </div>
   <div class="modal-footer">
    <a href="#" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <div class="modal fade" id="modal-5">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">PyRandom</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/pyrandom.jpg" alt="" class="img-responsive">
   </div>
   <div class="modal-footer">
      <p class="pull-left">Simple implementation of a generator pseudorandom numbers</p>
    <a href="https://github.com/giaba90/PyRandom" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <div class="modal fade" id="modal-6">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">Telewifirec</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/teletuwifirec.jpg" alt="" class="img-responsive">
   </div>
   <div class="modal-footer">
      <p class="pull-left">This is a python script for crack a wpa of TeleT&ugrave; / Tele2</p>
    <a href="https://github.com/giaba90/teletuwifirec" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- jQuery e plugin JavaScript  -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/flexslider/jquery.flexslider.js"></script>
<script src="../assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
 </body>
</html>