alert('aloha');
function LoadMap() {
    var Sao_Paulo = {lat: 	-23.5475006, lng: 	-46.6361084};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: Sao_Paulo,
        zoom: 4
    });
    var marker = new google.maps.Marker({
        map: map,
        position: Sao_Paulo,
        title: 'Cezar Cielo!'
    });
}
    /*var Halle = {lat:   50.73385, lng:   4.23454};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: Halle,
        zoom: 4
    });
    var marker = new google.maps.Marker({
        map: map,
        position: Halle,
        title: 'Paul Biederman!'
    });
}*/
