<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<<<<<<< Updated upstream
    <h1>apitest</h1>
=======

    <h1>API Lux villages</h1>

    <p>
        <input type="text" id="streetnumInput" placeholder="Street number:">
        <input type="text" id="streetInput" placeholder="Street:">
        <input type="text" id="postcodeInput" placeholder="Post code:">
        <input type="text" id="localityInput" placeholder="Locality:">
        <button type="button" id="searchBtn">Search</button>
    </p>
    <p>example:<br>54, Avenue Gaston Diderich 1420 Luxembourg</p>

    <div id="addresscontainer"></div>

    {{-- JS script for geoportail.lu (lat-lon finder by input address) --}}
    <script>
        const addressContainer = document.querySelector("#addresscontainer");

        addressContainer.innerHTML = "";
        addressContainer.style.display = "revert"


        // http://apiv3.geoportail.lu/geocode/search?num=54&street=Avenue%20Gaston%20Diderich&zip=&locality=Luxembourg&_dc=1386599465147&cb=stcCallback1001
        const searchAddress = searchBtn.addEventListener("click", () => {
            addressContainer.textcontent = "loading...";

            const streetnumValue = streetnumInput.value;
            const streetValue = streetInput.value;
            const postcodeValue = postcodeInput.value;
            const localityValue = localityInput.value;

            fetch("http://apiv3.geoportail.lu/geocode/search?num=" + streetnumValue + "&street=" + streetValue +
                "&zip=" + postcodeValue + "&locality=" + localityValue).then((response) => {
                return response.json();

            }).then((data) => {

                console.log(data);
                console.log(data.results[0].geomlonlat.coordinates[0]);
                console.log(data.results[0].geomlonlat.coordinates[1]);


                if (data.results[0].accuracy == 8) {
                    addressContainer.innerHTML = "Longitude " + data.results[0].geomlonlat.coordinates[1] +
                        "<br>Latitude " + data.results[0].geomlonlat.coordinates[0];
                } else {
                    addressContainer.innerHTML = "cannot find address, do you mean:" + data.results[0]
                        .address;
                }
            });
        });
    </script>

    <br>
    <hr>
    <h1>API map test (OSM)</h1>


    {{-- map --}}
    <div id="map" style="width: 300px; height: 420px"></div>

    {{-- JS script for OSM --}}
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
        let mapOptions = {
            center: [49.815273, 6.129583],
            zoom: 9
        }
        let map = new L.map('map', mapOptions);
        let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        map.addLayer(layer);
        let customIcon = {
            iconUrl: "https://cdn-icons-png.flaticon.com/128/1301/1301421.png",
            iconSize: [40, 40]
        }
        let myIcon = L.icon(customIcon);

        let iconOptions = {
            title: "Propery1",
            draggable: false,
            icon: myIcon
        }
        let marker = new L.Marker([49.822603, 6.067958], iconOptions);
        marker.addTo(map);
        // marker.bindPopup("atEvent")
        //     .openPopup();
        // let popup = L.popup().setLatLng([49.503431, 5.946355]).setContent(atEvent).openOn(map);

        let marker1 = new L.Marker([49.522603, 6.087958], iconOptions);
        marker1.addTo(map);

        let marker2 = new L.Marker([49.522603, 6.287958], iconOptions);
        marker2.addTo(map);




    </script>





>>>>>>> Stashed changes
</body>
</html>