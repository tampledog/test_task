function initializeTabs(element) {
  const buttons = element.querySelectorAll('.js-tab-btn');
  const bodies = element.querySelectorAll('.js-tab-content');

  function activateTab(index) {
    bodies.forEach(function (body) {
      body.classList.remove('is-active');
    });

    buttons.forEach(function (button) {
      button.classList.remove('is-active');
    });

    bodies[index].classList.add('is-active');
    buttons[index].classList.add('is-active');
  }

  buttons.forEach(function (button, index) {
    button.addEventListener('click', function (event) {
      if (event.target.classList.contains('is-active')) {
        return;
      }

      activateTab(index);
    });
  })
}

initializeTabs(document.querySelector('.tabs'));


function parseUrl(url) {
  return new URL(url);
}

const link = 'http://ffwagency.com/do/any.php?a=1#foo';

const obj = parseUrl(link);
console.log(obj.hash);
console.log(obj.hostname);
console.log(obj.pathname);