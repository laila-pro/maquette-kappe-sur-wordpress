<?php get_header(); ?>

  <div class="grid">

    <div class="grid-item gallery">

      <div class="card ml-4" id="card">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php bloginfo('template_directory'); ?>/img/img_1.jpg" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_directory'); ?>/img/carousel_1.jpg" class="d-block img-fluid" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h4>TEST BORIS</h4>
          <p class="text-secondary card-text">A man who works with his hands is alaborer; amanwho works with his hand s and his brain is acraftsman; but aman whoworks with his</p>
          <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>

      </div>

    </div>

    <div class="grid-item picture">
      <div class="card" id="card">
        <img class="card-img-top" class="-img" src="<?php bloginfo('template_directory'); ?>/img/img_2.jpg" alt="">
      </div>
    </div>
    <div class="grid-item simple">
      <div class="card-bleu" id="card">
        <div class="card-body text-center">
          <p class="card-text">Another Post where you can
          put a link to a specific website</p>
          <a href="http://www.themeforest.net">http://www.themeforest.net</a>
        </div>
      </div>
    </div>
    <div class="grid-item simple">
      <div class="card-bleu" id="card">
        <div class="card-body text-center">
          <p class="card-text">Another Post where you can
          put a link to a specific website</p>
          <a href="http://www.themeforest.net">http://www.themeforest.net</a>
        </div>
      </div>
    </div>
    <div class="grid-item player">
      <div class="card" id="card">
        <iframe max-width="100%" max-height="100%" src="https://www.youtube.com/embed/bo_efYhYU2A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h4>Self-hosted video post</h4>
          <p class="text-secondary card-text">A man who works with his hands is alaborer; man who works with his hand s and his brain is acraftsman; but man who works with his</p>
          <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>
      </div>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="grid-item standard">
      <div class="card" id="card">
        <?php the_post_thumbnail( '' ); ?>
        <div class="card-body">
          <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
          <p class="text-secondary card-text"><?php the_excerpt(); ?></p>
          <span class="d-flex justify-content-between">
            <div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#"><?php the_author(); ?></a></div>
            <div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  <?php the_date(); ?> </a></div>
          </span>
        </div>
      </div>
    </div>
  <?php endwhile; else : ?>
  <p>malkite walo!</p>
  <?php endif; ?>


<!--
    <div class="grid-item picture">
      <div class="card" id="card">
        <img class="card-img-top" class="-img" src="<?php //bloginfo('template_directory'); ?>/img/img_4.jpg" alt="">
      </div>
    </div>
    <div class="grid-item">
      <div class="card standard" id="card">
        <img class="card-img-top" src="<?php //bloginfo('template_directory'); ?>/img/img_5.jpeg" alt="">
        <div class="card-body">
          <h4>Standard post format</h4>
          <p class="text-secondary card-text">A man who works with his hands is alaborer; amanwho works with his hand s and his brain is a craftsman; but amanwho works with his</p>
          <span class="d-flex justify-content-between"><div><img src="<?php //bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php //bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>
      </div>
    </div>-->
    <div class="grid-item aside">
      <div class="card-aside text-white" id="card">
        <div class="card-body">
          <h4>Aside Post Format</h4>
          <p class="card-text">This is Photoshop's version  of Lorem IpsumProin gravida nibh vel velit auctor aliquet. Aenean sollicitudinp</p>
        </div>
      </div>
    </div>
    <div class="grid-item simple">
      <div class="card-black text-white" id="card">
        <div class="card-body text-center">
          <blockquote class="font-italic">Logic will get you from A to B. Imagination will take yoeverywhere.</blockquote>
          <p class="text-bleu" id="grand">“</p>
          <p class="text-bleu">Albert Einstein</p>
          <p class="text-secondary card-text"></p>
        </div>
      </div>
    </div>
    <div class="grid-item standard">
      <div class="card" id="card">
        <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/img/img_6.jpg" alt="">
        <div class="card-body">
          <h4>Standard post format</h4>
          <p class="text-secondary card-text">A man who works with his hands is alaborer; amanwho works with his hand s and his brain is acraftsman; but aman whoworks with his hands and his brainand his heart is anartist</p>
          <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>
      </div>
    </div>
    <div class="grid-item player">
      <div class="card" id="card">
        <iframe max-width="100%" max-height="100%" src="https://www.youtube.com/embed/0VR3dfZf9Yg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <h4>Self-hosted video post</h4>
          <p class="text-secondary card-text">A man who works with his hands is alaborer; amanwho works with his hand s and his brain is acraftsman; but aman whoworks with his hands and his brainand his heart is anartist</p>
          <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>
      </div>
    </div>
    <div class="grid-item gallery">
      <div class="card" id="card">
        <div id="carouselExample" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php bloginfo('template_directory'); ?>/img/img_7.gif" class="d-block img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_directory'); ?>/img/carousel_2.jpg" class="d-block img-fluid" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h4>Gallery Post Exemple</h4>
          <p class="text-secondary card-text">A man who works with his hands is a laboreraman who works with his hand s and his brain is a craftsman; butman who works with his hands and his brain and his heart isaartist</p>
          <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>
      </div>
    </div>
    <div class="grid-item standard">
      <div class="card" id="card">
        <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/img/img_8.png" alt="">
        <div class="card-body">
          <h4>Standard post format</h4>
          <p class="text-secondary card-text">A man who works with his hands is a laborer; a
          man who works with his hand s and his brain is a craftsman; but
          a man who works with his hands and his brain and his heart is
          an artist</p>
          <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#">  comments</a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  sept 12, 2019</a></div></span>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
