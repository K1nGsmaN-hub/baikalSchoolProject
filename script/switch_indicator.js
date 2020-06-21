
const switchIndicator = document.querySelector('.switch-indicator'); // the strip - switcher

const buttonSwitchFirst = document.querySelector('#first-switch-button'),
      buttonSwitchSecond = document.querySelector('#second-switch-button'),
      elementSwitchedFirst = document.querySelector('#first-switched-element'),
      elementSwitchedSecond = document.querySelector('#second-switched-element');


buttonSwitchFirst.addEventListener('click', function () {
    elementSwitchedFirst.classList.add('item-active');
    elementSwitchedSecond.classList.remove('item-active');
    switchIndicator.style.left = "2.5%";
})
buttonSwitchSecond.addEventListener('click', function () {
    elementSwitchedFirst.classList.remove('item-active');
    elementSwitchedSecond.classList.add('item-active');
    switchIndicator.style.left = "57.5%";
})