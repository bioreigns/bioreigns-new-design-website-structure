/*add class menu*/
$(document).ready(function() {
    var url = window.location;
    var pathname = window.location.pathname;

    $('ul.navbar-nav a[href="' + url + '"]').parent().addClass('active');


    $('ul.navbar-nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');


    // add active when click on dropdown

    $('ul.navbar-nav div.dropdown-menu a.dropdown-item[href="' + url + '"]').parentsUntil('ul.navbar-nav', 'li').addClass('active');

    $('ul.navbar-nav div.dropdown-menu a.dropdown-item').filter(function() {
        return this.href == url;
    }).parentsUntil('ul.navbar-nav', 'li').addClass('active');
});