const button2 = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');

button2.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});
