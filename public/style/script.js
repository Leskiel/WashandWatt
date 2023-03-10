function initMap() {
  // création de l'objet carte
  var map = new google.maps.Map(document.getElementById("map"), {
    // position de départ de la carte (Toulouse)
    center: {
      lat: 43.6047,
      lng: 1.4442,
    },
    zoom: 12, // niveau de zoom
  });

  // ajout d'un marqueur sur la carte
  var marker = new google.maps.Marker({
    position: {
      lat: 43.6047,
      lng: 1.4442,
    },
    map: map,
    title: "Toulouse", // info-bulle du marqueur
  });
}
