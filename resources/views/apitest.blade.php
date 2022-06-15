<!DOCTYPE html>
<html>

<head>
    <title>API map test</title>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
</head>

<style>
    #addresscontainer {
        background-color: rgb(230, 245, 230);
        color: #000;
        height: auto;
        width: auto;
        margin: 20px 10%;
        padding: 5px;
        border: 1px solid rgb(68, 68, 68);
        border-radius: 10px;
        box-shadow: 8px 0px 10px 5px rgba(68, 68, 68, 0.6);
        display: none;
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

    <h1>API map test (OSM)</h1>


    {{-- map --}}
    <div id="map" style="width: 300px; height: 420px"></div>

    {{-- JS script for OSM --}}
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
        // Creating map options
        var mapOptions = {
            center: [49.815273, 6.129583],
            zoom: 9
        }

        // Creating a maFp object
        var map = new L.map('map', mapOptions);

        // Creating a Layer object
        var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

        // Adding layer to the map
        map.addLayer(layer);
    </script>


    <br>
    <hr>
    <h1>API Lux villages</h1>

    <p>
        <input type="text" id="streetnumInput" placeholder="Street number:">
        <input type="text" id="streetInput" placeholder="Street:">
        <input type="text" id="postcodeInput" placeholder="Post code:">
        <input type="text" id="localityInput" placeholder="Locality:">
        <button type="button" id="searchBtn">Search</button>
    </p>

    <div id="addresscontainer"></div>


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
                
            }).then((data)=>{

                console.log(data);
                console.log(data.results[0].geomlonlat.coordinates[0]);
                console.log(data.results[0].geomlonlat.coordinates[1]);


                // addressContainer.innerHTML = data.results[0].name;
                addressContainer.innerHTML = "lat " + data.results[0].geomlonlat.coordinates[0] + "<br>lon " + data.results[0].geomlonlat.coordinates[1];


            });
        });
    </script>
</body>

</html>
