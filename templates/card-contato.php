<div class="contactPage">
  <article <?php post_class("postCard"); ?>>
    <?php the_post_thumbnail('thumb-post'); ?>
    <div class="postCard__info">
      <h2 class="postCard__title"><?php the_title(); ?></h2>
      <div class="postCard__content">
        <?php the_content(); ?>
      </div>
    </div>
  </article>

  <aside class="addressCard">
    <h3>Onde nos encontrar</h3>

    <dl class="addressCard__info">
      <dt class="addressCard__label">Endereço</dt>
      <dd class="addressCard__detail">
        <?php the_field('endereco'); ?>
      </dd>

      <dt class="addressCard__label">Cidade</dt>
      <dd class="addressCard__detail">
        <?php the_field('cidade'); ?>
      </dd>

      <dt class="addressCard__label">Estado</dt>
      <dd class="addressCard__detail">
        <?php the_field('estado'); ?>
      </dd class="addressCard__label">

      <dt class="addressCard__label">Telefone</dt>
      <dd class="addressCard__detail">
        <a href="tel:<?php the_field('telefone'); ?>">
          <?php the_field('telefone'); ?>
        </a>
      </dd>

      <dt class="addressCard__label">E-mail</dt>
      <dd class="addressCard__detail">
        <a href="mailto:<?php the_field('email'); ?>">
          <?php the_field('email'); ?>
        </a>
      </dd>
    </dl>

    <?php 
      $mapaACF = get_field('mapa');
    ?>

    <div id="mapaContainer"></div>
  </aside>
</div>

<script>
  var mapa;
  var marcador;

  var localPin = {
            lat: <?php echo $mapaACF['lat'] ?>, 
            lng: <?php echo $mapaACF['lng'] ?>
      };

  function initMap() {
    mapa = new google.maps.Map(document.getElementById('mapaContainer'), {
      center: localPin, 
      zoom: 16 
    });

    marcador = new google.maps.Marker({
      position: localPin,
      map: mapa
    })
  }
</script>