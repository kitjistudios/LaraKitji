$(document).ready(function () {

    $('#more').hide();
    $('#evenmore').hide();
    
    $("#link").click(function () {

       $('#more').fadeToggle('medium');

    });

    $("#link2").click(function () {

        $('#evenmore').fadeToggle('medium');
      

    });

});




