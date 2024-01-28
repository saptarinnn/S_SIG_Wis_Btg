<div class="card card-body mt-n1">
    <section class="my-3 py-1">
    <div class="container">
        <div class="section text-center">
        <h2 class="text-info text-gradient">Peta</h2>
        </div>

        <!--   MAPS   -->
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        <div id="map" style="width: 925px; height: 350px;"></div>
        <script>

        const map = L.map('map').setView([0.1324, 117.4854], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const marker = L.marker([0.1324, 117.4854]).addTo(map)
            .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

        function onMapClick(e) {
            popup
            .setLatLng(e.latlng)
            .setContent(`You clicked the map at ${e.latlng.toString()}`)
            .openOn(map);
        }
    </script>
<!--  END MAPS   -->