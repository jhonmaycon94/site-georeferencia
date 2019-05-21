	// Initialize and add the map
	function initMap() {
  	// The location of Uluru
  	var sergipe = {lat: -11.034718, lng: -37.551850};
  	// The map, centered at Uluru
  	var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 7, center: sergipe});
  	// The marker, positioned at Uluru
  }

     function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        markers.push(marker);
      }