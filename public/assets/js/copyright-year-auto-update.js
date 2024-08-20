window.addEventListener('load', onLoad);

function onLoad () {
  const currentYearEl = document.getElementById('current-year');

  if (currentYearEl) {
    const currentYear = new Date().getFullYear();

    currentYearEl.textContent = currentYear;
  }
}
