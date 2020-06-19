const buttonSignUp = document.querySelector('.switch__signup'),      // reg button
      buttonSignIn = document.querySelector('.switch__signin'),      // login button
      formSignUp = document.querySelector('.signup'),                // reg form
      formSignIn = document.querySelector('.signin'),                // login form
      switchIndicator = document.querySelector('.switch-indicator'); // strip - switcher

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


