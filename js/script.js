// const form = document.querySelector('form');
// // when scrollt will the navbar change the color to white
// $(function () {
//     $(document).scroll(function () {
//         let $nav = $(".navbar-fixed-top");
//         $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//     });
// });

// // burger menu functions
// const burgerMenu = document.getElementById('burger-menu');
// const dropdownMenu = document.getElementById('dropdown-menu');

// burgerMenu.addEventListener('click', () => {
//     dropdownMenu.classList.toggle('hidden');
// });

const button2 = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button2.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});
