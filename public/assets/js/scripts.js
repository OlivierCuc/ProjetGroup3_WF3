
// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 48.852969;
var lon = 2.349903;
var macarte = null;
var posLat=0;
var posLon=0;


var markers = []; // Nous initialisons la liste des marqueurs
var markerClusters; // Servira à stocker les groupes de marqueurs
// Fonction d'initialisation de la carte



$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        slideSpeed:1000,
        singleItem:true,
        transitionStyle:"goDown",
        navigationText:["",""],
        autoPlay:false
    });

    $('#adresse_depart').on("keyup", chargeVilles);
	$('#adresse_arrivee').on("keyup", chargeVilles);
	$("#btnGeoDepart").on("mouseup",utilGeo);
	$("#btnGeoArrivee").on("mouseup",utilGeo);
	
	if(navigator.geolocation)
	{
		 navigator.geolocation.getCurrentPosition(maPosition);
	}

});

$(function()
{
	$(".selectform").toggle();
	$('#infosColi').hide(0);
	$('#infoRetour').hide(0);
	$('#infosSexe').hide(0);
	$(".btnmore").html("Afficher plus de filtres");
	$(".btnmore").on("click",affMasqPropPlus);
	$(".btnRadTypePassager").on("click",affMasqColiPlus);
	$(".btnRadTypeAller").on("click",affMasqRetourPlus);
	$(".btnRadUnisexe").on("click",affMasqUnisexePlus);
})

function affMasqPropPlus(event)
{
	event.preventDefault()
	$(".selectform").toggle(500);
	($(".btnmore").html()=="Afficher plus de filtres")?$(".btnmore").html("Afficher moins"):$(".btnmore").html("Afficher plus de filtres");
}

function affMasqColiPlus()
{
	($('#btnRadColi').is(':checked'))?$('#infosColi').show(500):$('#infosColi').hide(500);
}

function affMasqRetourPlus()
{
	($('#btnRadAllerRetour').is(':checked'))?$('#infoRetour').show(500):$('#infoRetour').hide(500);
}

function affMasqUnisexePlus()
{
	($('#btnRadUnisexeOui').is(':checked'))?$('#infosSexe').show(500):$('#infosSexe').hide(500);
}



function initMap()
{
	// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
	macarte = L.map('map').setView([lat, lon], 11);
	markerClusters = L.markerClusterGroup(); // Nous initialisons les groupes de marqueurs
	// Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
	L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
	    // Il est toujours bien de laisser le lien vers la source des données
	    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
	    minZoom: 1,
	    maxZoom: 20
	}).addTo(macarte);
	// // Nous parcourons la liste des villes
	// for (ville in donnees) {
	// 	var marker = L.marker([donnees[ville].lat, donnees[ville].lon]);
	// 	// Nous ajoutons la popup. A noter que son contenu (ici la variable ville) peut être du HTML
	// 	marker.bindPopup(donnees[ville].Nom);
	// 	markerClusters.addLayer(marker);
	// 	markers.push(marker); // Nous ajoutons le marqueur à la liste des marqueurs
	// }   
	// var group = new L.featureGroup(markers); // Nous créons le groupe des marqueurs pour adapter le zoom
	// macarte.fitBounds(group.getBounds().pad(0)); // Nous demandons à ce que tous les marqueurs soient visibles, et ajoutons un padding (pad(0.5)) pour que les marqueurs ne soient pas coupés
	// macarte.addLayer(markerClusters);
}



function maPosition(position) {
  posLat = position.coords.latitude;
  posLon = position.coords.longitude;
  console.log("posLat :"+posLat);
  console.log("posLon :"+posLon);
 
}
	
				

function chargeVilles()
{
	var cible = $(this);
	donnees=$(this).val().replace(/ /g, '+');
	cible.next('datalist').html("");

	console.log(donnees);

	$.ajax(
	{
		url:"https://nominatim.openstreetmap.org/search?q="+donnees+"&format=json&polygon=1&addressdetails=1"
	}).done(function(reponse)
	{
		console.log(reponse);
		cible.next('datalist').html("");
		for (var i = 0; i<reponse.length; i++) 
		{
			cible.next('datalist').append("<option value='"+reponse[i].display_name+"'></option>");
		}
		cible.focus();

	}).fail(function(error)
	{
		console.log(error);
	});
}

function utilGeo(event)
{
	event.preventDefault();
	var cible = $(this).parent().prev().find("input");
	console.log(cible);
	$.ajax(
	{
		url:" http://nominatim.openstreetmap.org/reverse?format=json&lat="+posLat+"&lon="+posLon+"&zoom=18&addressdetails=1"
	}).done(function(reponse)
	{
		cible.attr("value",reponse.display_name);
		chargeVilles();

	}).fail(function(error)
	{
		console.log(error);
	});
}