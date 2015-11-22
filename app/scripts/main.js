var transitElements = document.querySelectorAll('[data-transit-out]');
var linkElements = document.querySelectorAll('a[href]');
var linkElementsArray = [].slice.call(linkElements, 0);
var aboutToggleElement = document.querySelector('[data-target="navigation-about-toggle"]');
var aboutToggleString = aboutToggleElement.innerHTML;

var transit = {
  out: function(elements, callback) {
    'use strict';

    var i = 0;
    var tally = 0;
    var onAnimationEnd = function() {
      tally++;

      if (tally === elements.length - 1) {
        callback();
      }
    };

    for (i; i < elements.length; i++) {
      var transitInClass = elements[i].getAttribute('data-transit-in');
      var transitOutClass = elements[i].getAttribute('data-transit-out');

      elements[i].classList.remove(transitInClass);
      elements[i].addEventListener('animationend', onAnimationEnd);
      elements[i].classList.add(transitOutClass);
    }
  }
};

linkElementsArray.forEach(function(element) {
  'use strict';
  var href = element.hasAttribute('href') && !element.hasAttribute('data-no-transit') ? element.getAttribute('href') : false;
  if (href) {
    element.addEventListener('click', function(event) {
      event.preventDefault();
      transit.out(transitElements, function() {
        document.location.href = href;
      });
    });
  }
});

aboutToggleElement.addEventListener('click', function() {
  'use strict';
  var aboutSection = document.querySelector('[data-target="about-section"]');
  var aboutCloseString = aboutToggleElement.getAttribute('data-close-string');

  if (aboutSection.classList.contains('is-visible')) {
    aboutSection.classList.remove('is-visible');
    aboutToggleElement.innerHTML = aboutToggleString;
  } else {
    aboutSection.classList.add('is-visible');
    aboutToggleElement.innerHTML = aboutCloseString;
  }
});
