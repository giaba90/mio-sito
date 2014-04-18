<?php function head(){ ?>
 <header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-responsive-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
                </button> <img src="../assets/img/GB-portfolio-logo.png" class="img-responsive my_img" alt="gianluca barranca logo" width="250" height="51">
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#resume">Chi sono</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contatti">Contatti</a></li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </nav>
    <!-- /.navbar -->
</header><?php } ?>

<?php function footer(){ ?>
<footer>
    <section id="footer-copy">
        <div class="row">
          <span class="left">&copy; 2014 Gianluca Barranca</span>
          <div class="social"> 
                <a role="button" tabindex="0" class="git" href="https://github.com/giaba90"><i class="fa fa-github-square fa-2x"></i><p>testo</p></a>
                <a class="lnk" href="http://www.linkedin.com/pub/gianluca-barranca/3a/a4/264"><i class="fa fa-linkedin-square fa-2x"></i><p>testo</p></a>
                <a class="tw"  href="https://twitter.com/giaba90"><i class="fa fa-twitter-square fa-2x"></i><p>testo</p></a>
             </div> <!-- chiusura social -->
        </div>
    </section>
</footer><?php } ?>

<?php function portfolio_web(){ ?>
   <div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
  <a data-toggle="modal" href="#modal-1">
  <img src="../assets/img/fancybox/gipilab-preview.jpg" alt="anteprima sito gipilab web agency" width="250" height="180">
  <div class="portfolio-caption">
   <h5 class="text-center">GipiLab Web Agency</h5>
  </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
    <a data-toggle="modal" href="#modal-2">
  <img src="../assets/img/fancybox/hotel-preview.jpg" alt="anteprima sito rome medical care" width="250" height="180" >
  <div class="portfolio-caption">
   <h5 class="text-center">Rome Medical Care</h5>
    </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
    <a data-toggle="modal" href="#modal-3">
  <img src="../assets/img/fancybox/dagostinoprogress-preview.jpg" alt="anteprima sito dagostino progress" width="250" height="180" >
  <div class="portfolio-caption">
   <h5 class="text-center">D'agostino Progress </h5>
  </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
    <a data-toggle="modal" href="#modal-4">
  <img src="../assets/img/fancybox/romamed-siderno-preview.jpg" alt="anteprima sito romamed siderno" width="250" height="180">
  <div class="portfolio-caption">
   <h5 class="text-center">RomaMed Siderno</h5>
   </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
    <a data-toggle="modal" href="#modal-7">
  <img src="../assets/img/fancybox/associazione-cambiamenti-preview.jpg" alt="anteprima sito associazione cambiamenti siderno" width="250" height="180">
  <div class="portfolio-caption">
   <h5 class="text-center">Associazione Cambi@Menti</h5>
   </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<?php } ?>

<?php function portfolio_project(){ ?>
   <div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
   <a data-toggle="modal" href="#modal-5">
  <img src="../assets/img/fancybox/pyrandom-preview.jpg" alt="anteprima progetto pyrandom" width="250" height="180">
  <div class="portfolio-caption">
   <h5 class="text-center">PyRandom</h5>
  </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<div class="col-xs-6 col-sm-3">
 <div class="portfolio-thumbnail">
   <a data-toggle="modal" href="#modal-6">
  <img src="../assets/img/fancybox/teletuwifirec-preview.jpg" alt="anteprima progetto teletu wifi rec" width="250" height="180">
  <div class="portfolio-caption">
   <h5 class="text-center">TeletuWifirec</h5>
  </div><!-- chiusura caption -->
  </a><!-- chiusura modal -->
 </div><!-- chiusura thumbnail -->
</div><!-- chiusura col -->
<?php } ?>

<?php function modal(){ ?>
<div class="modal fade" id="modal-1">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">gipilab.com</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/gipilab.jpg" width="620" height="464" alt="gipilab web agency" class="img-responsive">
   </div>
   <div class="modal-footer">
         <p class="pull-left">Sito web realizzato con Wordpress per la web agency con cui collaboro</p>
    <a href="http://gipilab.com/" class="btn btn-primary">Visita il sito</a>
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
    <img src="../assets/img/fancybox/hotel.jpg" width="620" height="464" alt="sito di rome medical care " class="img-responsive">
   </div>
   <div class="modal-footer">
    <p class="pull-left">Sito web multilingua realizzato in HTML&amp;CSS per una guardia medica romana</p>
    <a href="http://romemedicalcare.com/" class="btn btn-primary">Visita il sito</a>
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
    <img src="../assets/img/fancybox/dagostinoprogress.jpg" width="620" height="458" alt="sito della dagostino progress" class="img-responsive">
   </div>
   <div class="modal-footer">
    <p class="pull-left">Sito web realizzato in HTML&amp;CSS per la ferramenta D'agostino Progress</p>
    <a href="http://www.dagostinoprogress.com/" class="btn btn-primary">Visita il sito</a>
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
    <img src="../assets/img/fancybox/romamed-siderno.jpg" width="620" height="464" alt="sito di romamed sidermo" class="img-responsive">
   </div>
   <div class="modal-footer">
     <p class="pull-left">Sito web realizzato con Wordpress per lo studio medico Romamed di Siderno</p>
    <a href="http://www.romamed-studiomedico.com/" class="btn btn-primary">Visita il sito</a>
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
    <img src="../assets/img/fancybox/pyrandom.jpg" width="620" height="464" alt="link al progetto pyrandom" class="img-responsive">
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
    <img src="../assets/img/fancybox/teletuwifirec.jpg" width="620" height="464" alt="link al sito web dell'associazione cambiamenti di siderno" class="img-responsive">
   </div>
   <div class="modal-footer">
      <p class="pull-left">This is a python script for crack a wpa of TeleT&ugrave; / Tele2</p>
    <a href="https://github.com/giaba90/teletuwifirec" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <div class="modal fade" id="modal-7">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title">Associazione Cambi@Menti</h5>
   </div>
   <div class="modal-body">
    <img src="../assets/img/fancybox/associazione-cambiamenti.jpg" width="620" height="464" alt="link al progetto teletu wifi rec" class="img-responsive">
   </div>
   <div class="modal-footer">
      <p class="pull-left">Sito web realizzato con Wordpress per l'Associazione Cambi@Menti di Siderno</p>
    <a href="http://associazionecambiamenti.it" class="btn btn-primary">Visita il sito</a>
   </div>
  </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php } ?>