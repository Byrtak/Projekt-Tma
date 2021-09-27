<?php $title = 'Tma neni'; ?>
<?php $currentPage = 'index'; ?>
<?php include('utilities/head.php'); ?>
<?php include('utilities/navbar.php'); ?>


<body>
    <main>

        <div class="container">
            <div class="box">
                <div class="gallery-img">
                    <img src="galerie/1.png" type="image/png" alt="Pohled z lesa">
                    <img src="galerie/2.png" type="image/png" alt="Od stromu z leva" id="selectedImage">
                   
                    
                </div>
    
                <div class="gallery-img">
                    <img src="galerie/4.gif" type="image/gif" alt="Pohled do dveří tmy" id="selectedImage">
                    <img src="galerie/5.jpg" type="image/jpg" alt="Domoobrana" id="selectedImage">
                    
                </div>
    
                <div class="gallery-img">
                    <img src="galerie/3.jpg" type="image/jpg" alt="Pohled do dveří tmy" id="selectedImage">
                    <img src="galerie/6.jpg" type="image/jpg" alt="Drůbež" id="selectedImage">
                    
                </div>
            </div>
          </div>
    </main>

<script src="js/galerie.js"></script>
</body>
