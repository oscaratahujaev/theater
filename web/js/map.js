/**
 * Created by m_toshpolatov on 20.05.2018.
 */
function initMap() {
    var uluru = {lat: 41.3167942, lng: 69.2305881};
    // 41.3161665,69.2291316
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}