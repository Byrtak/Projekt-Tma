<?php $title = 'Tma neni - Kolem světnice'; ?>
<?php $currentPage = 'KolemSvetnice'; ?>
<?php include('utilities/head.php'); ?>
<?php include('utilities/navbar.php'); ?>


<body>
    <main>

        <div class="container">
            <div class="box">
                <div class="gallery-img">
                    <img src="galerie/1.jpg" type="image/jpg" alt="Pohled z lesa">
                    <img src="galerie/2.jpg" type="image/jpg" alt="Od stromu z leva" id="selectedImage">
                   
                    
                </div>
    
                <div class="gallery-img">
                    <img src="galerie/4.jpg" type="image/gif" alt="Pohled do dveří tmy" id="selectedImage">
                    <img src="galerie/5.jpg" type="image/jpg" alt="Domoobrana" id="selectedImage">
                    
                </div>
    
                <div class="gallery-img">
                    <img src="galerie/3.jpg" type="image/jpg" alt="Pohled do dveří tmy" id="selectedImage">
                    <img src="galerie/6.jpg" type="image/jpg" alt="Drůbež" id="selectedImage">
                    
                </div>
            </div>
          </div>
    </main>
<?php include('utilities/footer.php'); ?>
<script src="js/galerie.js"></script>
</body>
