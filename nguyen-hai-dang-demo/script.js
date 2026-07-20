(function () {
  'use strict';

  var toggle = document.getElementById('navToggle');
  var links = document.getElementById('navLinks');

  function setMenu(open) {
    links.classList.toggle('open', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  }

  if (toggle && links) {
    toggle.addEventListener('click', function () {
      setMenu(!links.classList.contains('open'));
    });

    links.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { setMenu(false); });
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && links.classList.contains('open')) {
        setMenu(false);
        toggle.focus();
      }
    });
  }

  // Lightweight scrollspy: highlight the nav link matching the section in view.
  var sections = Array.prototype.slice.call(document.querySelectorAll('main [id]'));
  var navAnchors = Array.prototype.slice.call(links ? links.querySelectorAll('a[href^="#"]') : []);

  if (sections.length && navAnchors.length && 'IntersectionObserver' in window) {
    var current = '';
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          current = '#' + entry.target.id;
        }
      });
      navAnchors.forEach(function (a) {
        var match = a.getAttribute('href') === current && !a.classList.contains('nav-cta');
        a.classList.toggle('active', match);
        if (match) { a.setAttribute('aria-current', 'true'); } else { a.removeAttribute('aria-current'); }
      });
    }, { rootMargin: '-45% 0px -50% 0px', threshold: 0 });

    sections.forEach(function (s) { observer.observe(s); });
  }
})();
