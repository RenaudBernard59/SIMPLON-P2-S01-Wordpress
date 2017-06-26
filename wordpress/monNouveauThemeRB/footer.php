<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */
?>







</main>


 <!-- #################### FOOTER #################### -->


<footer>
  <div class="container">


   <!-- ############ SECTION 1 ############ -->

    <section class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3 class="text-center">Catégories</h3>
      <div class=" panel-group"  id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
      <!-- PANNEAU 1 Web -->
          <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="text-center panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Web</a>
          </h4>
        </div>
        <!-- ========== -->
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
            <div><a   href="themes.html#web">Navigateurs</a></div>
            <div><a   href="themes.html#web">Intégration</a></div>
            <div><a   href="themes.html#web">Back off</a></div>
          </div>
        </div>
      <!-- PANNEAU 2 Matériel -->
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="text-center panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Matériel</a>
          </h4>
        </div>
        <!-- ========== -->
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
            <div><a   href="themes.html#materiel">Composants</a></div>
            <div><a   href="themes.html#materiel">Ordinateurs portables</a></div>
            <div><a   href="themes.html#materiel">Ordinateurs Tout-en-Un</a></div>
            <div><a   href="themes.html#materiel">Tablettes</a></div>
            <div><a   href="themes.html#materiel">Smartphones</a></div>
            <div><a   href="themes.html#materiel">Objets connectés</a></div>
            <div><a   href="themes.html#materiel">Accessoires</a></div>
            <div><a   href="themes.html#materiel">Matériel divers</a></div>
          </div>
        </div>
      <!-- PANNEAU 3 Sofwares -->
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="text-center panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Softwares</a>
          </h4>
        </div>
        <!-- ========== -->
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
            <div><a   href="themes.html#softwares">OS</a></div>
            <div><a   href="themes.html#softwares">Bureautique</a></div>
            <div><a   href="themes.html#softwares">PAO</a></div>
            <div><a   href="themes.html#softwares">Photographie</a></div>
            <div><a   href="themes.html#softwares">Dessin</a></div>
            <div><a   href="themes.html#softwares">Vidéo</a></div>
            <div><a   href="themes.html#softwares">MAO</a></div>
            <div><a   href="themes.html#softwares">Programmation</a></div>
            <div><a   href="themes.html#softwares">System</a></div>
          </div>
        </div>

      <!-- PANNEAU 4 Général-->
        <div class="panel-heading" role="tab" id="headingFour">        
            <h4 class="text-center panel-title">
                <a   href="themes#general.html">Géneral</a>
            </h4>
        </div>
      </div> <!-- END "panel panel-default" -->
      </div> <!-- END "panel-group" -->
    </section>


   <!-- ############ SECTION 2 ############ -->
   
    <section class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3 class="text-center">Outils</h3>
      <div class="text-center panel-group" role="tablist" aria-multiselectable="true">
        <div><a   href="#">Nous sommes le <span id="todayDate"></span></a></div>
        <div><a   href="#">Vous visitez la page depuis <span id="pageTimer"></span></a></div>
        <div><a   href="contact.html">Contact</a></div>
        <div><a   href="#">Cookies</a></div>
        <div><a   href="#">Legal</a></div>
        <div><a   href="#">&copy; 2017</a></div>
      </div>
    </section>


   <!-- ############ SECTION 3 ############ -->
   
    <section class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3 class="text-center">Nuage de tags</h3>
      <div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, eos culpa! Maxime atque impedit aliquid fugit hic mollitia molestiae nobis saepe omnis ex? Eos excepturi suscipit rem veritatis amet quam.
      </div>
    </section>

  </div> <!-- END container -->
</footer>



  <?php wp_footer(); ?>




 <!-- #################### SCRIPTS #################### -->
        <!-- VENDOR PLUG-INS -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <!-- BOILERPLATE -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script> <!-- PERSONNEL -->
        <!-- BOOTSTRAP -->
        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/vendor/npm.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
 

</body>
</html>