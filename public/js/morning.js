$(document).ready(function () {

    $('#more').hide();
    $('#evenmore').hide();

    $("#link").click(function () {
        $('#more').fadeToggle();
        if ($(this).text() == "Read More >>")
            $(this).text("<< Show Less")
        else
            $(this).text("Read More >>");
    });

    $("#link2").click(function () {
        $('#evenmore').fadeToggle();
        if ($(this).text() == "Read Even More >>")
            $(this).text("<< Show Less")
        else
            $(this).text("Read Even More >>");

    });

});




