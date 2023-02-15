for (let index = 1; index <= 3; index++) {
    const leesMeerLink = document.getElementById(`lees-meer-link-${index}`);
    const modal = document.getElementById(`modal-${index}`);
    const sluitModal = document.getElementById(`sluit-modal-${index}`);

    leesMeerLink.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    sluitModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
}