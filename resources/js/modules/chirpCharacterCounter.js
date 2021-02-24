export default function initCharacterCounter() {
  const container = document.querySelector('[data-textarea="container"]');

  if (container) {
    const textarea = container.querySelector('[data-textarea="chirp"]');
    const lengthEl = container.querySelector('[data-textarea="length"]');

    function updateColor(el, toAdd, toRemove = []) {
      toRemove.forEach(className => {
        el.classList.remove(className);
      });
      el.classList.add(toAdd);
    }

    function updateLengthElementColor(element, length) {
      if (length <= 15) {
        return updateColor(element, 'text-red-500', ['text-gray-500', 'text-yellow-500']);
      }

      if (length <= 50) {
        return updateColor(element, 'text-yellow-500', ['text-gray-500', 'text-red-500']);
      }

      return updateColor(element, 'text-gray-500', ['text-red-500', 'text-yellow-500']);
    }

    function updateLengthCount() {
      const currentLength = parseInt(textarea.value.length);
      const maxLength = parseInt(textarea.getAttribute('maxlength'));

      const newLength = maxLength - currentLength

      lengthEl.textContent = newLength;

      updateLengthElementColor(lengthEl, newLength);
    }

    textarea.addEventListener('input', updateLengthCount);
  }
}
