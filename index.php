<?php
$title ="Blog Mode pour enfants et life style";
include "php/header.php";
  ?>

<div class="container">
  <section id="home">
      <div class="row">
        <div class="col-md-4">
          <article>
            <h2>Vertbaudet, vêtement pour enfants.</h2>
            <p>Avec vertbaudet, retrouvez layette, vêtement bébé, fille et garçon, 
             et chaussures enfant en ligne, mais aussi vêtements de grossesse, 
            puériculture et déco pour ...
            </p>
          </article>
        </div>

        <div class="col-md-4">
          <article>
            <h2>Hackett</h2>
              <p>« Essential British Kids », c’est le concept de la marque anglaise Hackett pour sa ligne de vêtements garçon. Largement influencées par le vestiaire britannique traditionnel, les collections Hackett se succèdent avec un mot d’ordre : le style. Depuis 1983, les vêtements Hackett font l’unanimité dans le vestiaire masculin grâce à un ADN à l’anglaise revisité. Chez Hackett, les vêtements garçon ne font pas exception : blazers pour garçons, pantalons à pinces garçons, polos garçons, chemises, t-shirts… les petits hommes ont l’allure sure version Savile Row 2.0. 
              </p>
          </article>
        </div>

        <div class="col-md-4">
            <ul id="sidebar">
              <?php dynamic_sidebar( 'Main Sidebar' ); ?>
            </ul>
        </div>
      </div>
  </section>
</div>
<!--fin de la premiere ligne-->


<div class="container">
  <section id="home">
      <div class="row">
        <div class="col-md-4">
          <article>
            <h2>Armani Junior</h2>
              <p>Après des études de photographie, de médecine et une expérience de styliste, Giorgio Armani lance sa marque en 1975. Ce parcours hors normes lui confère une certaine idée de l’élégance et la veste Armani, révolutionnaire, propulse la marque...
                <img src="<?php bloginfo('template_directory'); ?>/images/armani-junior-polos-p_l_75805_A.jpg" alt="polo-garcon-Armani" class="img-thumbnail">
              </p>
          </article>
        </div>

        <div class="col-md-3">
          <article>
            <h2>Vidéos qu'on aime</h2>
              <p> TEXTE TEXTE TEXTE TEXTE
                <iframe width="100%" height="" src="http://www.youtube.com/embed/Y6gHMwdD9T0" frameborder="0" allowfullscreen>
                </iframe>
              </p>

              <p> TEXTE TEXTE
                <iframe width="100%" height="" src="http://www.youtube.com/embed/UGrQcyO9K_8" frameborder="0"allowfullscreen>
                </iframe>
              </p>
          </article>
        </div>

        <div class="col-md-5 ">
          <div class="thumbnail">
           <article>
            <h2>Contenu statique de la home page</h2>
             Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla BlablablaBlablabla Blablabla Blablabla Blablabla BlablablaBlablabla Blablabla Blablabla Blablabla BlablablaBlablabla Blablabla Blablabla Blablabla BlablablaBlablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla Blablabla
           </article>
           </div>
        </div>
     </div> 
  </section>
</div> 

<!--fin de la seconde ligne-->




<div class="container">
  <section id="home">
      <div class="row">
        <div class="col-md-6">
          <article>
          <h3>La Perla Baby et Junior</h3>
            <p>La grande marque de lingerie et vêtements d’intérieur La Perla habille aussi les plus petits dans la douceur du coton. La Perla Baby et La Perla Junior proposent des vêtements bébé La Perla ainsi que des pyjamas et sous-vêtements fille précieux et délicats. Inspirations romantiques et rétros, blanc crème, rose clair, ton sur ton, satin, cachemire, dentelle de Valencienne, crochet… chez La Perla, rien n’est trop beau pour les nouveau-nés et les filles. On craque pour les bodies bébé et pyjamas bébé La Perla raffinés et les ensembles fille La Perla pour les plus douces des nuits.
            </p>
          </article>
        </div>

        <div class="col-md-6">
          <div class="thumbnail">
            <img src="" alt="logo-marque-jacadi" class="img-thumbnail" class="img-responsive">
              <div class="caption">
          <article>
            <h2>La marque Jacadi</h2>
              <p> Des vêtements non seulement à la mode mais surtout des produits de qualité avec un choix de basics imtemporel...parole de maman et de mamie Domi.
             </p>
             <p> <a href="" class="btn btn-default " role="button">Je veux trop lire la suite, moi </a>
             </p>
          </article>
            </div>
          </div>
        </div>

      </div>
  </section> 
</div>
<!--fin de la troisième ligne-->
</div> 

<?php get_footer(); ?>
