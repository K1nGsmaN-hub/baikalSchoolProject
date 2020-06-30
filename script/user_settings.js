const buttonCLose = document.querySelector('.button-close'),
      buttonOpen = document.querySelector('.button-settings'),
      modalWindow = document.querySelector('.settings__modal-window');

const buttonPassword = document.querySelector('#first-modal-button'),
      buttonEmail = document.querySelector('#second-modal-button'),
      buttonAvatar = document.querySelector('#third-modal-button');

const formPassword = document.querySelector('.form-password'),
      formEmail = document.querySelector('.form-email'),
      formAvatar = document.querySelector('.form-avatar');


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
    buttonAvatar.classList.remove('item-active');

    formPassword.classList.add('item-active');
    formEmail.classList.remove('item-active');
    formAvatar.classList.remove('item-active');
})

buttonEmail.addEventListener('click', function (e) {
    e.preventDefault;

    this.classList.add('item-active');
    buttonPassword.classList.remove('item-active');
    buttonAvatar.classList.remove('item-active');

    formPassword.classList.remove('item-active');
    formEmail.classList.add('item-active');
    formAvatar.classList.remove('item-active');
})
buttonAvatar.addEventListener('click', function (e) {
    e.preventDefault;

    this.classList.add('item-active');
    buttonEmail.classList.remove('item-active');
    buttonPassword.classList.remove('item-active');

    formPassword.classList.remove('item-active');
    formEmail.classList.remove('item-active');
    formAvatar.classList.add('item-active');
})