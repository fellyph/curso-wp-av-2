<article class="relacionadosCard">
      <?php if(get_field('post_relacionado')): ?>
      <h3 class="relacionadosCard__title">Post Relacionado</h3>
      <?php
        $linkRelacionado = get_field('post_relacionado');
      ?>
      <a class="relacionadosCard__link" 
         href="<?php echo $linkRelacionado['url']; ?>"
         target="<?php echo $linkRelacionado['target']; ?>">
        <?php echo $linkRelacionado['title']; ?>
      </a>
      <?php endif; ?>
  
      <?php 
        $paginasRelacionadas = get_field('paginas_relacionadas');
        if($paginasRelacionadas) {
          echo '<h3>Páginas Relacionadas</h3>';
          foreach($paginasRelacionadas as $pagina) {
            echo $pagina . '<br>';
          }
        }
      ?>

      <?php 
        $objetoPost = get_field('objeto_do_post');
        if($objetoPost):
          setup_postdata($objetoPost);
      ?>
      <h4>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h4>
      <?php the_excerpt(); ?>
      <?php endif;?>
      <?php wp_reset_postdata(); ?>
  </article>