const buttonDaily = document.querySelector('#first-show-button'),
      buttonWeekly = document.querySelector('#second-show-button');

const statsDaily = document.querySelector('#first-show-element'),
      statsWeekly = document.querySelector('#second-show-element');
      

buttonDaily.addEventListener('click', function (e) {
    e.preventDefault;

    this.classList.add('item-active');
    buttonWeekly.classList.remove('item-active');

    statsDaily.classList.add('item-active');
    statsWeekly.classList.remove('item-active');
})
buttonWeekly.addEventListener('click', function (e) {
    e.preventDefault;

    this.classList.add('item-active');
    buttonDaily.classList.remove('item-active');

    statsDaily.classList.remove('item-active');
    statsWeekly.classList.add('item-active');
})