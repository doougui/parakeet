export default function initCharacterCounter() {
  const container = document.querySelector('[data-textarea="container"]');

  if (container) {
    const textarea = container.querySelector('[data-textarea="chirp"]');
    const lengthEl = container.querySelector('[data-textarea="length"]');

    function updateLengthCount() {
      const currentLength = parseInt(textarea.value.length);
      const maxLength = parseInt(textarea.getAttribute('maxlength'));

      const newLength = maxLength - currentLength

      lengthEl.textContent = newLength;

      if (newLength <= 50) {
        lengthEl.classList.remove('text-gray-500');

        if (newLength <= 15) {
          lengthEl.classList.remove('text-yellow-500');
          lengthEl.classList.add('text-red-500');
          return;
        }

        lengthEl.classList.add('text-yellow-500');
        return;
      }

      lengthEl.classList.add('text-gray-500');
      lengthEl.classList.remove('text-red-500');
      lengthEl.classList.remove('text-yellow-500');
    }

    textarea.addEventListener('input', updateLengthCount);
  }
}
