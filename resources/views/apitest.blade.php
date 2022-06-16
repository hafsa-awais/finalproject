<!DOCTYPE html>
<html>

<head>
    <title>API map test</title>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
</head>

<style>
    #addresscontainer {
        display: block;
    }

    #btncontainer {
        display: inline-block;
        text-align: center;
        background-color: #fff;
        color: #0000ff;
        height: auto;
        width: auto;
        margin: 20px 10%;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 8px 0px 10px 5px rgba(68, 68, 68, 0.6);
        position: relative;
        text-align: left;
        font-weight: 700;
    }
</style>

<body>
    <p>
        <input type="text" id="streetnumInput" placeholder="Street number:">
        <input type="text" id="streetInput" placeholder="Street:">
        <input type="text" id="postcodeInput" placeholder="Post code:">
        <input type="text" id="localityInput" placeholder="Locality:">
        <button type="button" id="searchBtn">Search</button>
    </p>

    <p>54, Avenue Gaston Diderich 1420 Luxembourg</p>
    <div id="addresscontainer"></div>
    <div id="map" style="width: 300px; height: 420px"></div>





    <script>
// Adding a Map
        let mapOptions = {
            center: [49.815273, 6.129583],
            zoom: 9
        }
        let map = new L.map('map', mapOptions);
        let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        map.addLayer(layer);
        let customIcon = {
            iconUrl: "https://cdn-icons-png.flaticon.com/128/1301/1301421.png",
            iconSize: [30, 30]
        }
        let myIcon = L.icon(customIcon);

// Find markers on click
        const searchAddress = searchBtn.addEventListener("click", () => {
            const streetnumValue = streetnumInput.value;
            const streetValue = streetInput.value;
            const postcodeValue = postcodeInput.value;
            const localityValue = localityInput.value;
            fetch("http://apiv3.geoportail.lu/geocode/search?num=" + streetnumValue + "&street=" + streetValue +
                "&zip=" + postcodeValue + "&locality=" + localityValue).then((response) => {
                return response.json();
            }).then((data) => {
                console.log(data);
                let Latitude = data.results[0].geomlonlat.coordinates[0]
                let Longitude = data.results[0].geomlonlat.coordinates[1]

                console.log(Latitude, Longitude)

                let iconOptions = {
                    title: "Venus",
                    draggable: false,
                    icon: myIcon
                }
// Show marker on the map
                let marker = new L.Marker([Longitude, Latitude], iconOptions);
                marker.addTo(map)
            });
        })
    </script>
</body>

</html>