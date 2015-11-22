<section class="Section Animation Animation-fadeIn" data-transit-in="Animation-fadeIn" data-transit-out="Animation-fadeOut">
  <div class="Grid">
    <h1 class="Section-heading Section-heading--horizontal"><?php echo $pages->find('pieces')->title(); ?></h1>
    <ul class="Pieces Grid-row Grid-row--flush">
      <?php
        $pieces = $pages->find('pieces')->children()->visible();

        foreach ($pieces as $piece) {
          $pieceTitle = $piece->title();
          $pieceExcerpt = $piece->excerpt();
          $pieceURI = $piece->uri();
          $thumbnailObject = $piece->files()->find($piece->thumbnail());
          $thumbnailURL = thumb($thumbnailObject, array('width' => 600, 'height' => 400, 'crop' => true))->url();
          $thumbnailTitle = $thumbnailObject->title();
      ?>
      <li class="Pieces-listItem Grid-item Grid-item--flush Grid-item--oneHalf">
        <a class="Pieces-item" href="<?php echo $pieceURI; ?>" title="<?php echo $pieceTitle; ?>">
          <figure class="Pieces-item-figure">
            <img class="Pieces-item-image" src="<?php echo $thumbnailURL; ?>" alt="<?php echo $thumbnailTitle; ?>">
            <figcaption class="Pieces-item-caption">
              <div class="Pieces-item-heading">
                <h1 class="Pieces-item-title"><?php echo $pieceTitle; ?></h1>
              </div>
              <p class="Pieces-item-description"><?php echo $pieceExcerpt; ?></p>
            </figcaption>
          </figure>
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
</section>
