   	 var map
   	 // Initialize and add the map
	function initMap() {
  	// The location of Estância
  	var estancia = {lat: -11.269415, lng: -37.437571};
  	// The map, centered at Estância
  	map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: estancia});
  	// The marker, positioned at Estância
  }
     //add marcador
     function addMarker(location) {
        var marker = new google.maps.Marker({position: location, map: map});
      }  