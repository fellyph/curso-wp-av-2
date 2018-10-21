<?php 
/*
 Template Name: Contato 
 */
get_header(); ?>
  <?php while(have_posts()): the_post(); ?>
    <?php get_template_part('templates/card','contato'); ?>
  <?php endwhile; ?>
<?php get_footer(); ?>


<script src="https://maps.googleapis.com/maps/api/js?key=ADICIONE_SUA_APIKEY&callback=initMap"
    async defer></script>