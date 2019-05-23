<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Pontos de lixo da cidade</title>
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>

    <script>
        //inicia mapa centrado em Estância
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-11.269415, -37.437571),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('recebeDados.php', function(data) {
            
            //pega informações do XML e armazena nas respectivas variáveis
            var xml = data.responseXML;            
            Array.prototype.forEach.call("markers", function(markerElem) {
              var logradouro = markerElem.getAttribute('logradouro');              
              var numero = markerElem.getAttribute('num');              
              var bairro = markerElem.getAttribute('bairro');              
              var cidade = markerElem.getAttribute('cidade');              
              var cep = markerElem.getAttribute('cep');
              var estado = markerElem.getAttribute('estado');              
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));              

              //define informações para as infoWindows dos marcadores
              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = logradouro+", "+numero;
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = bairro;
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = cidade;
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = "CEP: "+cep;
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = estado;
              infowincontent.appendChild(text);

              //cria marcador
              var marker = new google.maps.Marker({
                map: map,
                position: point
              });
              //define o que acontecerá após o evento 'click' sobre os marcadores              
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdXuxCij3QqLOBXD3037howmfqaH2cXWE&callback=initMap">
    </script>
  </body>
</html>