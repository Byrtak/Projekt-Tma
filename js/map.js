var stred = SMap.Coords.fromWGS84(15.77046, 50.12500);
		var mapa = new SMap(JAK.gel("mapa"), stred, 14);
		mapa.addDefaultLayer(SMap.DEF_BASE).enable();
		mapa.addDefaultControls();	     
        
        
        var layer = new SMap.Layer.Marker();
mapa.addLayer(layer);
layer.enable();

var card = new SMap.Card();
card.getHeader().innerHTML = "<strong>Tady jsem</strong>";
card.getBody().innerHTML = "Ahoj, já jsem Tma, která není!<br> <br> Dvořáková 134 <br> Čeperka 533 45";

var options = { 
    title: "Tma není"
};
var marker = new SMap.Marker(stred, "myMarker", options);
marker.decorate(SMap.Marker.Feature.Card, card);
layer.addMarker(marker);