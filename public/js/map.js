function initialize() {
    var mapProp = {
        center:{lat: -0.1085432, lng: 34.7651712},
        zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var cityCircle = new google.maps.Circle({
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35,
        map: map,
        center: mapProp.center,
        radius: 200
    });
    /*google.maps.event.addListener(map, 'zoom_changed', function() {
        var z = map.getZoom();
        console.log(z);
    });*/
}
google.maps.event.addDomListener(window, 'load', initialize);