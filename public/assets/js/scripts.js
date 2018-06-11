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
        autoPlay:true
    });
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