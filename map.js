function updateMap() {
    fetch("coronadata.json")
        .then(response => response.json())
        .then(rsp => {
            console.log(rsp.areas)
            rsp.areas.forEach(element => {
                lat = element.lat;
                long= element.long;

                //Mark on the map
                new mapboxgl.Marker({
                        draggable: false
                    })
                    .setLngLat([long, lat])
                    .addTo(map);

            });
        })
}
updateMap();
