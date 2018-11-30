let map;

function initialize() {
    let mapOptions = {
        zoom: 15,
        center: {lat: 42.728413, lng: 73.691817} // mt. snow coordinates
    };
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

    // only fetch data/set markers once map is initialzed
    get_data("jumps");
    get_data("advanced");
    get_data("trails");
}

function place_marker(element) {
    console.log(element);
    let marker = new google.maps.Marker({
        // The below line is equivalent to writing:
        // position: new google.maps.LatLng(-34.397, 150.644)
        label: "🤔",
        position: {lat: parseFloat(element.latitude),
            lng: parseFloat(element.longitude)},
        map: map
    });

    console.log(marker);

    let infowindow = new google.maps.InfoWindow({
        content: '<p>'+element.type+'</p>'
    });


    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}

function get_data(request_type) {
    let oReq = new XMLHttpRequest();
    oReq.onload = function() {
        data = JSON.parse(this.responseText);
        for(i = 0; i < data.length; i++) {
            place_marker(data[i]);
        }
    };

    // grab JSON encoded data from database
    oReq.open("get", "./query_mountain_data.php?request="+request_type, true);
    oReq.send();
}

google.maps.event.addDomListener(window, 'load', initialize);