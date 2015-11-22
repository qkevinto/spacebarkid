<nav class="Navigation Section Animation Animation-fadeInDown" data-transit-in="Animation-fadeInDown" data-transit-out="Animation-fadeOutUp">
  <a class="Navigation-title" href="/">spacebarkid</a>
  <div>
    <ul class="Navigation-social">
      <li class="Navigation-social-item">
        <a class="Navigation-social-link" href="<?php echo $pages->find('contact')->twitter(); ?>" title="spacebarkid's Twitter" target="_blank">
          <span class="Navigation-social-link-text">spacebarkid's Twitter</span>
          <svg aria-hidden="true" class="Icons">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/symbols.svg#twitter"></use>
          </svg>
        </a>
      <li class="Navigation-social-item">
        <a class="Navigation-social-link" href="<?php echo $pages->find('contact')->email(); ?>" title="Email spacebarkid" data-no-transit>
          <span class="Navigation-social-link-text">Email spacebarkid</span>
          <svg aria-hidden="true" class="Icons">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/symbols.svg#email"></use>
          </svg>
        </a>
      </li>
    </ul>
    <button class="Navigation-button" data-target="navigation-about-toggle" data-close-string="Close">About</button>
  </div>
</nav>
