$(function () {

    /* Form */
    $('#form').on("submit", function (e) {
        e.preventDefault();
        var fields = $(this).serializeArray();

        $.post("email.php", fields, responseForm, 'json');
        $('#button').prop("disabled", true);


    });

    function responseForm(r) {

        if (r.success == 0) {

            alert("Revisa los campos");
            $('#button').prop("disabled", false);
        }
        else {
            $('.content-form').text('');
            $('#form').append("<span class='message'>" + r.message + "<span>");
        }
    }

    var owl = $("#owl-demo");


    owl.owlCarousel({
        //autoPlay: 5000,
        navigation: true,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        transitionStyle: "fade",
        beforeInit: updateSize,
        afterInit: updateSize
    });

    owl.on('changed.owl.carousel', function (e) {
        console.log(e)
        if (e.item.index == 0)
            $('.owl-prev').hide();
        else
            $('.owl-prev').show();
        if (e.page.count == (e.page.index + 1))
            $('.owl-next').hide();
        else
            $('.owl-next').show();

    })
});
function updateSize() {

    var heightContent = parseInt($('.owl-item').height()),
        widthContent = parseInt($('.owl-item').width()),
        ratioContent = widthContent / heightContent;

    $(".owl-item").each(function () {
        var heightImg = parseInt($(this).find('img').height()),
            widthImg = parseInt($(this).find('img').width()),
            ratioImg = widthImg / heightImg;
        if ($(window).width() > 800) {
            if (ratioContent > ratioImg) {
                imgW = "100%";
                imgH = "auto";
            } else {
                imgW = "auto";
                imgH = "100vh";
            }
            $(this).find('img').css('width', imgW);
            $(this).find('img').css('height', imgH);
            $(this).find('img').css('height', imgH);
        } else {
            owlH = $('.owl-item').height();
            windowH = $(window).height();
            figureH = windowH - owlH;

            $('#homeFigure').css('height', figureH);
            console.log(owlH + " -- " + windowH + " - -" +figureH  );

        }

    });

}
$('.open-nav').on('click', function () {
    $(this).toggleClass('translate');
    $('header').toggleClass('show-header');

});
$('.images figcaption').on('click', function () {
    $(this).toggleClass('more');

});
$(window).resize(updateSize);

var map;

function initialize() {


    var loc = new google.maps.LatLng(4.637042, -74.062692);
    var myLatLng = new google.maps.LatLng(4.642303, -74.061619);
    var mapOptions = {
        /*
         drag: false,
         dragend: false,
         dragstart: false,
         draggable: false,
         scrollwheel: false,
         navigationControl: false,
         mapTypeControl: false,
         scaleControl: false,*/

        zoom: 14,
        center: myLatLng,
        styles: styleMap
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    var image = 'images/icon.png';


    var myLatLng = new google.maps.LatLng(4.637042, -74.062692);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP,
        content: 'I am the content of this infobox. Wow, what a text.<br><br><a href="#">The good thing is: Tags are also possible</a>'
    });

    polyline.setMap(map);
    shapes.push(polyline);
}

google.maps.event.addDomListener(window, 'load', initialize);



