import Toastify from 'toastify-js';

export default function initToastify() {
  const chirpStatusElement = document.querySelector('#chirp-status');

  if (chirpStatusElement) {
    const toastType = chirpStatusElement.getAttribute('data-bg').trim();

    Toastify({
      text: chirpStatusElement.textContent,
      duration: 3000,
      close: true,
      gravity: "bottom",
      position: 'right',
      className: `bg-none ${toastType}`,
      stopOnFocus: true
    }).showToast();
  }
}
