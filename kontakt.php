<?php $title = 'Tma neni'; ?>
<?php $currentPage = 'index'; ?>
<?php include('utilities/head.php'); ?>
<?php include('utilities/navbar.php'); ?>


<body>
<main>
    <div class="mapbox">
    <article class=flexrow>
        <div class="fbox">
            <p type="text">
                Jak se ke mně dostaneš? Jak mě najdeš? Kudy ke mně vede cesta? Ideálně vlakem nebo autem. Vlaková zastávka je ode mne 10 minut chůze lesem. <br>
                Vystoupíš z vlaku, rozhlídneš se a uvidíš zděnou budovu s přístřeškem na odkládání kol. Za touto budovou vede cesta podél lesa. Po cca 600 metrech zabočíš doleva k domu, který je již viditelný. <br>
                Pokud Ti v textu chybí nějaká důležitá informace nebo si budeš přát rezervovat termín, napiš na tento email: <a style="animation: animace 2s ease-in;
                text-decoration: none; 
                color: white" type="email" href="mailto:someone@yoursite.com">tmaneni@seznam.cz</a> 
            </p>
        </div>
        <div id="fobr">
        <img class="obrazek" type="image/png" style="width:90%" src="img/logo3.png" alt="Logo Tmy">
        </div>          
    </article> 
    <div class="mapa">
        <div id="mapa" style="width:800px; height:400px;"></div>
        Adressa: Dvořáková 134  Čeperka 533 45
    </div>
    </div>  

    <script type="text/javascript" src="js/map.js"></script>
</main>
</body>
