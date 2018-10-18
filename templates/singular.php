<div class="singlePage">
  <?php 
    if(function_exists('get_field')):
      if(get_field('id_video')): ?>
  <iframe width="560" 
          height="315" 
          src="https://www.youtube.com/embed/<?php the_field('id_video'); ?>" 
          frameborder="0" 
          allow="autoplay; encrypted-media" allowfullscreen></iframe>
<?php endif;
  endif; ?>
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

      <?php 
        if(function_exists('get_field')):
          if(get_field('post_level') && has_category('tutorial')): ?>
          <p class="postCard__level">
            Nivel do post: 
            <span class="postCard__level_item">
              <?php the_field('post_level'); ?>
            </span>
          </p>
      <?php 
          endif;
        endif; 
      ?>
        <?php 
          $autores = get_field('autores_post');
          if($autores):
        ?>
          <div class="postCard__autores">
            <h3>Autores:</h3>
            <?php foreach( $autores as $autor): ?>
              <div class="autorCard">
                <figure class="autorCard__cracha">
                  <?php 
                    echo $autor['user_avatar'];
                  ?>
                  <figcaption class="autorCard__info">
                    <h4 class="autorCard__nome"><?php echo $autor['display_name']; ?></h4>
                    <p class="autorCard__descricao"><?php echo $autor['user_description']; ?></p>
                  </figcaption>
                </figure>
                
                
              </div>
            <?php endforeach; ?>
          </div>
        <?php
          endif;
        ?>
    </div>
    <footer class="postCard__footer">
      <a href="<?php bloginfo('url'); ?>">Voltar para a home</a>
    </footer>
  </article>
  <?php get_template_part('templates/card', 'miniRelacionados'); ?>
</div>