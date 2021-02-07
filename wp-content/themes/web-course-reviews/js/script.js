$ = jQuery.noConflict();

$(document).ready(function() {
    $('.search-icon').click(function() {
        $('.search-form').show();
        $('.search-icon').hide();
        $('.close-icon').show();
    });
    $('.close-icon').click(function(){
        $('.search-form').hide();
        $('.search-icon').show();
        $('.close-icon').hide();
    });
    $('.hamburger-menu').click(function(){
        $('.mobile-navigation').show();
        $('.hamburger-menu').hide();
        $('.mobile-navigation__logo-container .close-icon').show();
    });
    $('.mobile-navigation__logo-container .close-icon').click(function(){
        $('.mobile-navigation').hide();
        $('.hamburger-menu').show();
        $('.mobile-navigation__logo-container .close-icon').hide();
    });
  });