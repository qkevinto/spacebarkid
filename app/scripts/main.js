var transit = {
  out: function(elements, callback) {
    var i = 0;
    var tally = 0;

    for (i; i < elements.length; i++) {
      var transitInClass = elements[i].getAttribute('data-transit-in');
      var transitOutClass = elements[i].getAttribute('data-transit-out');

      elements[i].classList.remove(transitInClass);
      elements[i].addEventListener('animationend', function() {
        tally ++;

        if (tally === elements.length - 1) {
          callback();
        }
      });
      elements[i].classList.add(transitOutClass);
    }
  }
}

var transitElements = document.querySelectorAll('[data-transit-out]');
var linkElements = document.querySelectorAll('a[href]');
var linkElementsArray = [].slice.call(linkElements, 0);

linkElementsArray.forEach(function(element) {
  var href = element.hasAttribute('href') ? element.getAttribute('href') : false;
  if (href) {
    element.addEventListener('click', function(event) {
      event.preventDefault();
      transit.out(transitElements, function() {
        document.location.href = href;
      });
    });
  }
});
