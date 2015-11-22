<section class="Section Animation Animation-fadeIn" data-transit-in="Animation-fadeIn" data-transit-out="Animation-fadeOut">
  <div class="Grid">
    <h1 class="Section-heading Section-heading--horizontal"><?php echo $pages->find('pieces')->title(); ?></h1>
    <ul class="Pieces Grid-row Grid-row--flush">
      <?php
        $pieces = $pages->find('pieces')->children()->visible();
      ?>
      <?php foreach ($pieces as $piece) {?>
      <li class="Grid-item Grid-item--flush Grid-item--oneHalf">
        <a class="Pieces-item" href="<?php echo $piece->uri(); ?>">
          <figure class="Pieces-item-figure">
            <img class="Pieces-item-image" src="<?php echo $piece->files()->find($piece->hero())->url(); ?>">
            <figcaption class="Pieces-item-caption">
              <h1 class="Pieces-item-title"><?php echo $piece->title(); ?></h1>
              <p class="Pieces-item-description"><?php echo $piece->text(); ?></p>
            </figcaption>
          </figure>
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
</section>
