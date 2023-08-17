var myCenter=new google.maps.LatLng(-20.3811288, -40.3141293);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"<b>Lírio dos Vales</b><br/>Avenida Muqui nº15. Itaparica, Vila Velha - ES.<br/>Telefone: 27 3722 3385"
  });

infowindow.open(map,marker);
marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);