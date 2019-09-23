<?php get_header();?>
<h2> Mes Réalisations <h2>
  <?php
$projets=new WP_query(array(
 'post_type'=>'projets',
 'post_per_page'=>10
));
if ($projets->have_posts()):while($projets->have_posts()):$projets->the_post();?>
<div class="grid-item standard">
  <div class="card" id="card">
    <?php the_post_thumbnail(); ?>
    <div class="card-body">
      <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
      <p class="text-secondary card-text"><?php the_excerpt(); ?></p>
      <span class="d-flex justify-content-between"><div><img src="<?php bloginfo('template_directory'); ?>/img/comments.svg"><a href="#"><?php the_author(); ?></a></div><div><img src="<?php bloginfo('template_directory'); ?>/img/calendar.svg"><a href="#">  <?php the_date(); ?></a></div></span>
    </div>
  </div>
</div>
<?php endwhile; else : ?>
<p>desolé, pas de projet publié!</p>
<?php endif; wp_reset_query() ?>
// On affiche les taxonomies gràce à la fonction the_terms()

<?php the_terms( $post->ID, 'realisateurs', 'Réalisateurs : ' ); ?> <br>

<?php the_terms( $post->ID, 'categoriesprojet', 'Catégorie(s) : ' ); ?><br>
<?php
get_footer();
?>
