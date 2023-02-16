const form = document.querySelector('form');

// This function listens to the scroll event on the document, and if the user has scrolled
// past the height of the navbar, it adds the class 'scrolled' to the navbar, which changes
// its background color to white. If the user scrolls back up and is within the height of the
// navbar, the 'scrolled' class is removed.
$(function () {
    $(document).scroll(function () {
        let $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

// These lines of code get a reference to the 'burger-menu' and 'dropdown-menu' elements,
// and add an event listener to the 'burger-menu' that toggles the 'hidden' class on the
// 'dropdown-menu' when the user clicks the 'burger-menu' button.
const burgerMenu = document.getElementById('burger-menu');
const dropdownMenu = document.getElementById('dropdown-menu');

burgerMenu.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
});
