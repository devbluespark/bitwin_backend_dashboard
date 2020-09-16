$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        
        $(".nav-link").toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        $(".btn-sign-in").toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});