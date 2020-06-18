const buttonSignUp = document.querySelector('.switch__signup'),
      buttonSignIn = document.querySelector('.switch__signin'),
      formSignUp = document.querySelector('.signup'),
      formSignIn = document.querySelector('.signin'),
      switchIndicator = document.querySelector('.switch-indicator');

buttonSignUp.addEventListener('click', function () {
    formSignUp.classList.add('form-auth-active');
    formSignIn.classList.remove('form-auth-active');
    switchIndicator.style.left = "2.5%";
})
buttonSignIn.addEventListener('click', function () {
    formSignIn.classList.add('form-auth-active');
    formSignUp.classList.remove('form-auth-active');
    switchIndicator.style.left = "57.5%";
})

