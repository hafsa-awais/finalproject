// Adding a Map
let mapOptions = {
    center: [49.815273, 6.129583],
    zoom: 10
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

// const searchAddress = searchBtn.addEventListener("click", () => {
//     const streetnumValue = streetnumInput.value;
//     const streetValue = streetInput.value;
//     const postcodeValue = postcodeInput.value;
//     const localityValue = localityInput.value;
//     fetch("http://apiv3.geoportail.lu/geocode/search?num=" + streetnumValue + "&street=" + streetValue +
//         "&zip=" + postcodeValue + "&locality=" + localityValue).then((response) => {
//         return response.json();
//     }).then((data) => {
//         console.log(data);
//         let Latitude = data.results[0].geomlonlat.coordinates[0]
//         let Longitude = data.results[0].geomlonlat.coordinates[1]

//         console.log(Latitude, Longitude)

//         let iconOptions1 = {
//             title: "Venus",
//             draggable: false,
//             icon: myIcon
//         }
// // Show marker on the map
//         let marker1 = new L.Marker([Longitude, Latitude], iconOptions1);
//         marker1.addTo(map)
//     });
// })
