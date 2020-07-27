$(function () {
  $('.js-header-trigger').on('click', function () {
    $('.js-header-toggle-target').toggleClass('isActive');
    $('.js-trigger-bar').toggleClass('isActive');
  })
})