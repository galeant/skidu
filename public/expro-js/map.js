function initMap() {
    var myLatLng = {lat: -6.2847099, lng: 106.7137447};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map
    });

}