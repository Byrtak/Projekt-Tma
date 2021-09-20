<?php $title = 'Tma neni'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<body>
<main>
    <div class="mapbox">
    <article class=flexrow>
        <div class="fbox">
            <p>
                Jak se ke mně dostaneš? Jak mě najdeš? Kudy ke mně vede cesta? Ideálně vlakem nebo autem. Vlaková zastávka je ode mne 10 minut chůze lesem. <br>
                Vystoupíš z vlaku, rozhlídneš se a uvidíš zděnou budovu s přístřeškem na odkládání kol. Za touto budovou vede cesta podél lesa. Po cca 600 metrech zabočíš doleva k domu, který je již viditelný. <br>
                Pokud Ti v textu chybí nějaká důležitá informace nebo si budeš přát rezervovat termín, napiš na tento email:
            </p>
        </div>
        <div id="fobr">
        <img class="obrazek" style="width:90%" src="img/logo3.png" alt="">
        </div>          
    </article> 
    <div class="mapa">
        <div id="mapa" style="width:800px; height:400px;"></div>
    </div>
    </div>  
    
        
                    
    
    <script type="text/javascript" src="js/map.js"></script>
</main>
</body>
