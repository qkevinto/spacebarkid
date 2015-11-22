<section class="About Section" data-target="about-section" data-transit-out="Animation-fadeOut">
  <div class="Grid">
    <h1 class="Section-heading Section-heading--horizontal"><?php echo $pages->find('about')->title(); ?></h1>
    <p class="About-primary"><?php echo kirbytext($pages->find('about')->text()); ?></p>
  </div>
</section>
