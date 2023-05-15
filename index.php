<?php 
include_once 'header.php'
?>

  <!-- Caroussel -->

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item text-center bg-dark vh-100 active slide-1">
      <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <img src="./images/company-name.png" alt="name" class="w-100">
            <h2 class="display-1 text-white h1-font">Enjoy the finest cuisine</h2>
            <a class="btn btn-warning mt-4" href="./booking.php" role="button">Book a table</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item text-center bg-dark vh-100 slide-2">
    <div class="container h-100 d-flex align-items-center justify-content-center">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <img src="./images/company-name.png" alt="name" class="w-100">
          <h2 class="display-1 text-white h1-font">Discover our newest promos</h2>
          <a class="btn btn-warning mt-4" href="./menu.php" role="button">Our menu</a>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
<?php
include_once 'footer.php'
?>