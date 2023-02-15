const teamMemberDivs = Array.from(document.querySelectorAll('form > div div.grid-cols-2.mb-2'));
let tailDiv = teamMemberDivs[3];

for (let i = 1; i < teamMemberDivs.length; i++) {
    const element = teamMemberDivs[i];
    element.classList.add('hidden');
}

const button = document.createElement('button');
const buttonClasses = ['uppercase', 'text-sm', 'font-bold', 'tracking-wide', 'text-gray-100', 'p-3', 'rounded-lg', 'focus:outline-none', 'focus:shadow-outline', 'bg-secondarycolor'];
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
    const newInput = teamMemberDivs.pop();
    newInput.classList.remove('hidden');

    if (teamMemberDivs.length < 2) {
        button.remove();
    }
}