<?php
  include "dbconfig.php";
?>
 
<!DOCTYPE html>
<html>
  <head>
      <title>MAPS</title>
    <style>
      #map-canvas {
        width: 1350px;
        height: 640px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
    var marker;
      function initialize() {
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
 
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
 
          <?php 
            $query = mysqli_query($con,"select ST_X(lokasi) as latitude, ST_Y(lokasi) as longitude, user_id as u from location order by tanggal desc limit 1 ");
            while ($data = mysqli_fetch_array($query))
            {
                $nama = $data['u'];
                $lat = $data['latitude'];
                $lon = $data['longitude'];
                
                echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
            }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body onload="initialize()">
    <div id="map-canvas"></div>
  </body>
</html>