<?php $title = 'Tma neni'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<body>
<main>
    <article class=flexrow>
        <div class="fbox">
            <p>
                Jak se ke mně dostaneš? Jak mě najdeš? Kudy ke mně vede cesta? Ideálně vlakem nebo autem. Vlaková zastávka je ode mne 10 minut chůze lesem. <br>
                Vystoupíš z vlaku, rozhlídneš se a uvidíš zděnou budovu s přístřeškem na odkládání kol. Za touto budovou vede cesta podél lesa. Po cca 600 metrech zabočíš doleva k domu, který je již viditelný. <br>
                Pokud Ti v textu chybí nějaká důležitá informace nebo si budeš přát rezervovat termín, napiš na tento email:
            </p>
        </div>
        <div id="fobr">
            <!-- <img class="obrazek" style="width:60%" src="img/logo.png" alt=""> -->
            <div id="mapa" style="width:600px; height:400px;"></div>
            <script type="text/javascript">
		var stred = SMap.Coords.fromWGS84(15.77046, 50.12500);
		var mapa = new SMap(JAK.gel("mapa"), stred, 14);
		mapa.addDefaultLayer(SMap.DEF_BASE).enable();
		mapa.addDefaultControls();	     
        
        
        var layer = new SMap.Layer.Marker();
mapa.addLayer(layer);
layer.enable();

var card = new SMap.Card();
card.getHeader().innerHTML = "<strong>Tady jsem</strong>";
card.getBody().innerHTML = "Ahoj, já jsem <em>světnice</em>!";

var options = { 
    title: "Tma není"
};
var marker = new SMap.Marker(stred, "myMarker", options);
marker.decorate(SMap.Marker.Feature.Card, card);
layer.addMarker(marker);
	</script>
        </div>          
    </article>       
</main>
</body>
