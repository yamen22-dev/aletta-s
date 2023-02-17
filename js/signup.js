const teamMemberDivs = Array.from(document.querySelectorAll('form > div div.grid-cols-2.mb-2'));
teamMemberDivs.shift();
let tailDiv = teamMemberDivs[1];

for (let i = 0; i < teamMemberDivs.length; i++) {
    const element = teamMemberDivs[i];
    element.classList.add('hidden');
}

const button = document.createElement('button');
const buttonClasses = ['uppercase', 'text-sm', 'font-bold', 'tracking-wide', 'text-gray-100', 'p-3', 'rounded-lg', 'focus:outline-none', 'focus:shadow-outline', 'bg-primarycolor'];
button.innerHTML = "+ teamlid";

buttonClasses.forEach(cssClass => {
    button.classList.add(cssClass);
});

tailDiv.after(button);

button.addEventListener('click', (e) => {
    e.preventDefault();
    unhideButton();
});

function unhideButton() {
    const newInput = teamMemberDivs.shift();
    newInput.classList.remove('hidden');

    if (teamMemberDivs.length < 1) {
        button.remove();
    }
}