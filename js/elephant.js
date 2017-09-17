(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });

    // Collapse the navbar when page is scrolled
    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    });

})(jQuery); // End of use strict

$(document).ready(function(){

    //Delete
    $('.del_mem_id').on('click', function(){
        $id = $(this).attr('name');
        $('.del_mem').on('click', function(){
            window.location = "delete_mem.php?id=" + $id;
        });
    });

    //Update
    $('.update_mem_id').on('click', function(){
        $id = $(this).attr('name');
        $('.update').load('mem_data.php?id=' + $id);
    });

    //Create
    $('.create_mem_id').on('click', function(){
        $id = $(this).attr('name');
        $('.create').load('create_mem.php');
    });
});

$(document).ready(function(){
    $('#myTable').DataTable();
});