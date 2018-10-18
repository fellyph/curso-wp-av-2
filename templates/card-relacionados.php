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
      

      <h3>Páginas Relacionadas</h3>
  
      <?php 
        $paginasRelacionadas = get_field('pagina_relacionada');
        
        foreach($paginasRelacionadas as $pagina) {
          echo $pagina . '<br>';
        }
      ?>
  </article>