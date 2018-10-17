<div class="singlePage">
  <h2 class="posts__title singlePage__title"><?php the_title(); ?></h2>
  <article class="postCard">
    <div class="postCard__info">
      Categorias: <?php the_category(',') ?>
      <?php the_content(); ?>
      <?php 
          // is_category()
          // para queries de paginas de arquivo
          
          // has_category()
          // pagina single
      ?>
      
      <?php if(get_post_meta( get_the_ID(), 'post_level', true) && has_category('tutorial')): ?>
        <p class="postCard__level">
          Nivel do post: 
          <span class="postCard__level_item">
            <?php echo get_post_meta( get_the_ID(), 'post_level', true); ?>
          </span>
        </p>
      <?php endif; ?>

    </div>
    <footer class="postCard__footer">
      <a href="<?php bloginfo('url'); ?>">Voltar para a home</a>
    </footer>
  </article>
</div>