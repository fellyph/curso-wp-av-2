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
<?php endif;?>