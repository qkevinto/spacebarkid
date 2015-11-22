<section class="Section Animation Animation-fadeIn" data-transit-in="Animation-fadeIn" data-transit-out="Animation-fadeOut">
  <div class="Grid">
    <div class="Hero">
      <h1 class="Hero-about"><?php echo $pages->find('hero')->about()->kirbytext(); ?></h1>
      <span class="Hero-tagLine"><?php echo $pages->find('hero')->tagline()->kirbytext(); ?></span>
    </div>
  </div>
</section>
