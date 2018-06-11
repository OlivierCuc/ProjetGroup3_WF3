var map, marker, bounds, currentPopup;
var lat = 47.7980034;
var lon = 3.585517;
// Variable qui contiendra l'instance de notre bibliothèque
var markerClusterer ;
// Variable qui contiendra le tableau de nos marqueurs
var markers = [];
var villes = {
	"Paris":{"lat": 48.852969,"lon": 2.349903},
	"Brest":{"lat": 48.383,"lon": -4.500},
	"Quimper":{"lat": 48.000,"lon": -4.100},
	"Bayonne":{"lat": 43.500,"lon": -1.467}
};
$(function(){

	CKEDITOR.replace( 'monTexte' );
    var geoSuccess = function(position) {
        lat = position.coords.latitude;
        lon = position.coords.longitude;
        initMap();
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(lat, lon),
            title: 'Votre position'
        });
    };
    var geoFail = function() {
        initMap();
    };
    navigator.geolocation.getCurrentPosition(geoSuccess,geoFail);	
});
function initMap() {
	// Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
	map = new google.maps.Map(document.getElementById("map"), {
		// Nous plaçons le centre de la carte avec les coordonnées ci-dessus
		center: new google.maps.LatLng(lat, lon),
		zoom: 11
	});
	// Création de l'instance du système de clusters
	markerClusterer = new MarkerClusterer(map, markers, {
		// Chemin d'accès à nos images
		// ATTENTION : le /m de fin correspond au 1er caractère du nom de nos fichiers
		imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
	});
	bounds = new google.maps.LatLngBounds();
	for(ville in villes){
		createMarker(ville, villes);
	}
	map.fitBounds(bounds);
    map.addListener('click', function(event) {
        placeMarkerAndCenter(event.latLng, map);
    });	
}
function createMarker(ville, villes) {
	var pos = {lat: parseFloat(villes[ville].lat), lng: parseFloat(villes[ville].lon)};
	var marker = new google.maps.Marker({
		position: pos,
		title: ville,
		map: map
	});
	// Nous créons la bulle d'information pour le marqueur qui vient d'être créé
	// Nous définissons son contenu (content) et ses dimensions maximales
	var popup = new google.maps.InfoWindow({
		content: ville,
		maxWidth: 300,
		maxHeight:100
	});
	markerClusterer.addMarker(marker);
	bounds.extend(pos);

	// Nous activons l'écouteur d'évènement "click" sur notre marqueur
	google.maps.event.addListener(marker, "click", function() {
		// Si une bulle est déjà ouverte
		if (currentPopup != null) {
			// On la ferme
			currentPopup.close();
			// On vide la variable
			currentPopup = null;
		}
		// On ouvre la bulle correspondant à notre marqueur
		popup.open(map, marker);
		// On enregistre cette bulle dans la variable currentPopup
		currentPopup = popup;
	});
	// Nous activons l'écouteur d'évènement "closeclick" sur notre bulle
	// pour surveiller le clic sur le bouton de fermeture
	google.maps.event.addListener(popup, "closeclick", function() {
		// On vide la variable
		currentPopup = null;
	});
}
function placeMarkerAndCenter(latLng, map) {
    if(marker){ //on vérifie si le marqueur existe
        marker.setPosition(latLng); //on change sa position
    }else{
        marker = new google.maps.Marker({ //on créé le marqueur
            position: latLng,
            draggable:true,
            animation: google.maps.Animation.DROP,
            map: map
        });
    }
    $("#lat").val(latLng.lat());
    $("#lon").val(latLng.lng());
    map.panTo(latLng);
    marker.addListener('dragend', function(e) { 
        placeMarkerAndCenter(marker.getPosition(), map);
    }); 
}
