<?php
  $postRelacionados = get_field('posts_relacionados');
  if($postRelacionados) :
?>
  <div class="postRelacionados">
    <h2>Posts Relacionados</h2>
    <?php foreach($postRelacionados as $post) : setup_postdata($post); ?>
    <div class="relacionadosCard">
      <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail(); ?>
        <h3><?php the_title() ?></h3>
      </a>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
