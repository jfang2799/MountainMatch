let map;

function initialize() {
    let mapOptions = {
        zoom: 15,
        center: {lat: 42.963079045379324, lng: -72.90895879268648} // mt. snow coordinates
    };
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

    // only fetch data/set markers once map is initialzed
    get_data("jumps");
    get_data("beginner");
    get_data("advanced");
    //get_data("trails");
}

function place_marker(element, label) {
    //console.log(element);
    let marker = new google.maps.Marker({
        label: label,
        position: {lat: parseFloat(element.latitude),
            lng: parseFloat(element.longitude)},
        map: map
    });
    let message = '<h3>'+element.type+'</h3>';
    // display jump size (if applicable)
    if (element.size) {
        message += '<p>'+element.size+'ft</p>';
    }
    // check if element has a lip
    if (element.lip == '1') {
        message += '<p> This feature has a lip</p>';
    }

    let infowindow = new google.maps.InfoWindow({
        content: message
    });


    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}

function get_data(request_type) {
    let oReq = new XMLHttpRequest();
    oReq.onload = function() {
        let data = JSON.parse(this.responseText);
        console.log(data);
        for(let i = 0; i < data.length; i++) {
            place_marker(data[i], request_type[0].toUpperCase());
        }
    };

    // grab JSON encoded data from database
    oReq.open("get", "./query_mountain_data.php?request="+request_type, true);
    oReq.send();
}

google.maps.event.addDomListener(window, 'load', initialize);