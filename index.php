<?php get_header() ?>

<ul>
<?php
$args = array(
 'post_type' => 'news',
 'post_per_page' => 5
);
$get_args = new WP_Query( $args );
while ( $get_args->have_posts() ) {
    $get_args->the_post();
?>

<li>
  <?php the_post_thumbnail('medium') ?>
  <a href="<?php  the_permalink() ?>">
     <?php the_title() ?>
  </a>
</li>

<?php } wp_reset_postdata();
?>
</ul>

<?php get_footer() ?>
