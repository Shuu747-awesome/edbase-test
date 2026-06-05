/**
 * ヘッダー：ハンバーガーメニュー
 */
document.addEventListener('DOMContentLoaded', function () {
  var button = document.querySelector('.hamburger');
  var nav = document.getElementById('header-nav');
  if (!button || !nav) return;

  function setOpen(isOpen) {
    nav.classList.toggle('is-open', isOpen);
    button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    button.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
  }

  button.addEventListener('click', function () {
    setOpen(!nav.classList.contains('is-open'));
  });

  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      setOpen(false);
    });
  });
});