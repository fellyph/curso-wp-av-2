<div class="postCard">
<?php
  $postRelacionados = get_field('posts_relacionados');
  if($postRelacionados) {
    foreach($postRelacionados as $postItem) {
      setup_postdata($postItem);
      the_title();
    }
  }
 ?>
</div>
