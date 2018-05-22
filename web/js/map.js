/**
 * Created by m_toshpolatov on 20.05.2018.
 */
function initMap() {
    var uluru = {lat: 41.316841, lng: 69.230601};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}