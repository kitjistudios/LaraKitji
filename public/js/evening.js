$(document).ready(function () {

    $('#more').hide();
    $('#evenmore').hide();
    
    $("#link").click(function () {

        $('#more').fadeToggle(3000);

    });

    $("#link2").click(function () {

        $('#evenmore').fadeToggle(3000);

    });

});


