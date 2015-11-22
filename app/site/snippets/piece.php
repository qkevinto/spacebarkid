<?php
  $heroImageObject = $page->files()->find($page->hero());
  $heroImageURL = $heroImageObject->url();
  $heroImageTitle = $heroImageObject->title();
?>

<article class="Piece Animation Animation-fadeIn" data-transit-in="Animation-fadeIn" data-transit-out="Animation-fadeOut">
  <figure class="Piece-hero-figure" style="background-image: url('<?php echo $heroImageURL; ?>'); ">
    <img class="Piece-hero-image" src="<?php echo $heroImageURL; ?>" alt="<?php echo $heroImageTitle ?>">
  </figure>
  <section class="Section Piece-content">
    <div class="Grid Grid--small">
      <h1><?php echo $page->title(); ?></h1>
      <?php echo kirbytext($page->text()); ?>
    </div>
  </section>
  <aside>
    <?php
      $nextPage = $page->nextVisible() ? $page->nextVisible() : $page->parent()->children()->first();
      $nextPageHeroImageObject = $nextPage->files()->find($nextPage->hero());
      $nextPageHeroImageURL = $nextPageHeroImageObject->url();
    ?>
    <a href="<?php echo $nextPage->url(); ?>" class="Piece-next">
      <span class="Piece-next-heading"><?php echo $nextPage->title(); ?></span>
      <div class="Piece-next-background" style="background-image: url(<?php echo $nextPageHeroImageURL; ?>)"></div>
    </a>
  </aside>
</article>
