const buttonDropDownMenu = document.querySelector('.link__personal-area'), // button for open menu
      dropDownMenu = document.querySelector('.area__dropdown-menu');       // drop down menu
        
        
buttonDropDownMenu.addEventListener('click', function () {
    dropDownMenu.classList.toggle('menu-active');
})