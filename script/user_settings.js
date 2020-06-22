const buttonCLose = document.querySelector('.button-close'),
      buttonOpen = document.querySelector('.button-settings'),
      modalWindow = document.querySelector('.settings__modal-window');

const buttonPassword = document.querySelector('#first-button'),
      buttonEmail = document.querySelector('#second-button');

const formPassword = document.querySelector('.form-password'),
      formEmail = document.querySelector('.form-email');


buttonOpen.addEventListener('click', function () {
    modalWindow.classList.add('item-active');
})
buttonCLose.addEventListener('click', function () {
    modalWindow.classList.remove('item-active');
})

buttonPassword.addEventListener('click', function (e) {
    e.preventDefault;

    this.classList.add('item-active');
    buttonEmail.classList.remove('item-active');

    formPassword.classList.add('item-active');
    formEmail.classList.remove('item-active');
})
buttonEmail.addEventListener('click', function (e) {
    e.preventDefault;

    this.classList.add('item-active');
    buttonPassword.classList.remove('item-active');

    formPassword.classList.remove('item-active');
    formEmail.classList.add('item-active');
})