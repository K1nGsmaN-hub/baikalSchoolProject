const buttonDropDownMenu = document.querySelector('.link__dropdown-menu'), // button for open menu
      dropDownMenu = document.querySelector('.dropdown-menu__area');       // drop down menu
        
        
buttonDropDownMenu.addEventListener('click', function () {
    dropDownMenu.classList.toggle('menu-active');
})