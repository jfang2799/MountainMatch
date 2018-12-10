let map;
let jumps = [];
let beginner = [];
let advanced = [];

// create map object, create pins
function initialize() {
    let mapOptions = {
        zoom: 15,
        center: {lat: 42.963079045379324, lng: -72.90895879268648} // mt. snow coordinates
    };
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);

    // only fetch data/set markers once map is initialzed
    drop_pins("jumps", jumps);
    drop_pins("beginner", beginner);
    drop_pins("advanced", advanced);
}

// create initial marker objects and tie them to map
function place_marker(element, label) {
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
    return marker;
}

// add pins to map
function add_pins(pins)
{
    for (let i = 0; i < pins.length; i++)
    {
        pins[i].setMap(map);
    }
}

// remove pins from map
function remove_pins(pins) {
    for (let i = 0; i < pins.length; i++)
    {
        pins[i].setMap(null);
    }
}

// associate/de-associate markers with the map
function update_pins() {
    let jumps_checkbox = document.getElementById("jumps");
    let beginner_checkbox = document.getElementById("beginner");
    let advanced_checkbox = document.getElementById("advanced");
    if (jumps_checkbox.checked)
    {
        add_pins(jumps);
    }
    else
    {
        remove_pins(jumps);
    }

    if (beginner_checkbox.checked)
    {
        add_pins(beginner);
    }
    else
    {
       remove_pins(beginner);
    }

    if (advanced_checkbox.checked)
    {
        add_pins(advanced);
    }
    else
    {
        remove_pins(advanced);
    }
}

// create markers for each feature in DB
function drop_pins(type, markers) {
    let oReq = new XMLHttpRequest();
    oReq.onload = function() {
        let data = JSON.parse(this.responseText);
        for(let i = 0; i < data.length; i++) {
            markers.push(place_marker(data[i], type[0].toUpperCase()));
        }
    };

    // grab JSON encoded data from database
    oReq.open("get", "./query_mountain_data.php?request="+type, true);
    oReq.send();
}

google.maps.event.addDomListener(window, 'load', initialize);