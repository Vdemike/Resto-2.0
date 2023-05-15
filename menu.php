<?php 
include_once 'header.php'
?>
      <h1>Ghost Element</h1>

    <!-- Menu section -->
    <section id="menu">
        <div class="container">
            <div class="row">
                <div class="intro-text col-12 mb-4 mt-5 text-center text-white">
                    <h1 class="h1-font">Taste the <span class="text-warning">difference</span></h1>
                    <p>Discover our delicious menu here and don't hesitate to try our delicacies</p>
                </div>
            </div>
        </div>
      </section>
    
    <div class="container">
      <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link btn-color text-warning fw-normal h1-font active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All dishes</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link btn-color btn btn-secondary text-warning fw-normal h1-font" id="pills-pasta-tab" data-bs-toggle="pill" data-bs-target="#pills-pasta" type="button" role="tab" aria-controls="pills-pasta" aria-selected="false">Pasta</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link btn-color text-warning fw-normal h1-font" id="pills-pizza-tab" data-bs-toggle="pill" data-bs-target="#pills-pizza" type="button" role="tab" aria-controls="pills-pizza" aria-selected="false">Pizza</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link text-warning fw-normal h1-font btn-color" id="pills-meat-tab" data-bs-toggle="pill" data-bs-target="#pills-meat" type="button" role="tab" aria-controls="pills-meat" aria-selected="false">Meat dishes</button>
          </li>
      </ul>

      <style>
  .btn-color.active {
   background-color: rgb(50, 50, 50) !important;
}
</style>
<!-- All dishes -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
            <h1 class="text-warning mb-5 h1-font">All Dishes</h1>
            <div class="container-fluid">
              <div class="row g-4">
                <!-- Pastas all list -->
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/pasta espinaca.jpg"  class="card-img-top "  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Espinaca</h5>
                      <p class="small">Delicious pasta with tender lamb meat and a creamy mushroom sauce decorated with spinach leaves</p>
                      <h5 class="mt-1 mb-2">€25</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta al Raggu.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Al Raggu</h5>
                      <p class="small">Rich and flavorful meat-based sauce, served over pasta in a sauce of herbs, carrots, tomatoes and onions.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/My-Familys-Favorite-Pesto-Pasta-Bolognese-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Bolognese</h5>
                      <p class="small">Pasta Bolognese is a classic Italian dish made with ground beef, tomatoes and onions. This is a staple delicious dinner recipe that is such a crowd pleaser.</p>
                      <h5 class="mt-1 mb-2">€21</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta Carbonara.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Carbonara</h5>
                      <p class="small">Carbonara is an Italian pasta dish from Rome made with eggs, hard cheese, cured pork and black pepper.</p>
                      <h5 class="mt-1 mb-2">€18</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta mejillones.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Mejillones</h5>
                      <p class="small">Pasta with mussels and tomatoes is a traditional Italian seafood pasta recipe from the Campani region. Spaghetti is a classic pasta selection for this seafood pasta sauce.</p>
                      <h5 class="mt-1 mb-2">€35</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta Penne.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Penne Rigate</h5>
                      <p class="small">Although it is very simple, this classic tomato sauce reduces down to a very fresh concentrated tomato flavour, one of the best sauces ever invented.</p>
                      <h5 class="mt-1 mb-2">€20</h5>
                    </div>
                  </p>
                </div>
              </div>
              <!-- Pizzas All List -->
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pizza Verde.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Verde</h5>
                      <p class="small">This vegetarian pizza recipe will delight vegetarians and carnivores alike. It’s fresh and full of flavor, featuring cherry tomatoes, artichoke, bell pepper, olives, red onion and some baby spinach. You’ll find a base of rich tomato sauce and golden, bubbling mozzarella underneath, of course</p>
                      <h5 class="mt-1 mb-2">€25</h5>
                    </div>
                  </p>
                </div>
              </div>           
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pizza Meat Lovers.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Meat Lovers</h5>
                      <p class="small">Homemade thin crust pizza, topped off with cheese, bacon, ham, pepperoni, hot sausage and meatballs. A must for meat lovers!</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>           
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pizza Hawai.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Hawaii</h5>
                      <p class="small">Hawaiian pizza is a pizza originating in Canada, and is traditionally topped with pineapple, tomato sauce, cheese, and either ham or bacon.</p>
                      <h5 class="mt-1 mb-2">€20</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/foad-roshan-WwjseJMNfjk-unsplash.jpg" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Pepperoni</h5>
                      <p class="small">Pepperoni pizza is an American pizza variety which includes one of the country's most beloved toppings. Pepperoni, which denotes a large pepper in Italian, but nowadays it denotes a spicy salami, usually made with a mixture of beef, pork, and spices.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pizza Navidad.avif" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Napoletana</h5>
                      <p class="small">Neapolitan pizza (Italian: pizza napoletana), also known as Naples-style pizza, is a style of pizza made with tomatoes and mozzarella cheese.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Quattro-Formaggi-1200px-Inside-the-Rustic-Kitchen-2.jpg" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Cuattro Formaggi</h5>
                      <p class="small">Pizza quattro formaggi is a variety of pizza in Italian cuisine that is topped with a combination of four kinds of cheese, usually melted together, with tomato sauce. It is popular worldwide, including in Italy, and is one of the iconic items from our menus.</p>
                      <h5 class="mt-1 mb-2">€22</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/margarita.jpg" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pizza Margherita</h5>
                      <p class="small">Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt, and extra-virgin olive oil.</p>
                      <h5 class="mt-1 mb-2">€19</h5>
                    </div>
                  </p>
                </div>
              </div>
              <!-- Meat Dishes-->
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Porchetta-di-Ariccia.jpeg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Porchetta di Ariccia</h5>
                      <p class="small">This is a simple pork roast which has become a prized culinary symbol of the Lazio region thanks to its particularly flavorful stuffing made with fennel, rosemary, and garlic.</p>
                      <h5 class="mt-1 mb-2">€28</h5>
                    </div>
                  </p>
                </div>
              </div>           
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Arista.jpeg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Arista</h5>
                      <p class="small">Arista is one of the most loved Italian meats, originally from Tuscany, and consists of lean pork loin seasoned in finely chopped rosemary, extra-virgin olive oil, garlic, salt, and pepper, tied with twine and then roasted for a few hours.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>           
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Bistecca-alla-Fiorentina.jpeg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Bistecca alla Fiorentina</h5>
                      <p class="small">The great Florentine Steak. This is a T-bone steak from a young steer, typically Chianina cattle, a typical Tuscan breed from the hills around Florence.</p>
                      <h5 class="mt-1 mb-2">€35</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Peposo.jpeg.webp" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Peposo</h5>
                      <p class="small">A symbol of Florentine cucina povera, this humble Tuscan meat stew was in fact traditionally made with the leftover and unused parts of beef, slow-cooked in Chianti, with the addition of the typical soffritto (diced onions, celery, and carrots), garlic, fresh herbs and a large amount of crushed black peppercorns.</p>
                      <h5 class="mt-1 mb-2">€35</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Cotoletta-alla-Milanese.jpeg.webp" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Cotoletta alla Milanese</h5>
                      <p class="small">This signature dish from Milan is nothing more than breaded tender veal deep fried in butter.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Ossobuco.jpeg.webp" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Ossobuco</h5>
                      <p class="small">These cross-cut veal shanks braised in vegetables, broth, and white wine are a culinary specialty of the Lombardy region. Served on a bed of saffron risotto alla Milanese or creamy polenta.</p>
                      <h5 class="mt-1 mb-2">€32</h5>
                    </div>
                  </p>
                </div>
              </div>
<!-- Add new item from database here -->
<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'login');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the comments from the database
$query = "SELECT * FROM upload";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
 echo  "<div class='card m-2 col-lg-3 px-0 col-md-5 col-sm-10'>";
  echo  "<img src=". $row['file'] . " class='card-img-top img-fluid'  alt='...'>";
  echo  "<div class='card-body'>";
  echo  "<p class='card-text'>";
  echo  "<div class='menu-item-content'>";
  echo  " <div>";
  echo  "          <span>Rated 4.5</span>";
  echo  "          <span>";
  echo  "          <i class='ri-star-fill'></i>";
  echo  "          <i class='ri-star-fill'></i>";
  echo  "          <i class='ri-star-fill'></i>";
  echo  "          <i class='ri-star-fill'></i>";
  echo  "          <i class='ri-star-half-fill'></i>";
  echo  "          </span>";
  echo  "       ";   
  echo  "        </div>";
  echo  "        <h5 class='mt-1 mb-2'>". $row['Name'] . "</h5>";
  echo  "        <p class='small'>". $row['Description'] . "</p>";
  echo  "        <h5 class='mt-1 mb-2'>€". $row['Price'] . "</h5>";
  echo  "      </div>";
  echo  "</p>";
  echo  "  </div>";
  echo  "</div>";
  }
};
      ?>
          </div>
          </div>
          </div>
        
          <!--Pasta -->

        <div class="tab-pane fade" id="pills-pasta" role="tabpanel">
            <h1 class="text-warning mb-5 h1-font">Pasta</h1>
            <div class="container-fluid">
              <div class="row g-4">
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/pasta espinaca.jpg"  class="card-img-top "  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Espinaca</h5>
                      <p class="small">Delicious pasta with tender lamb meat and a creamy mushroom sauce decorated with spinach leaves</p>
                      <h5 class="mt-1 mb-2">€25</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta al Raggu.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Al Raggu</h5>
                      <p class="small">Rich and flavorful meat-based sauce, served over pasta in a sauce of herbs, carrots, tomatoes and onions.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/My-Familys-Favorite-Pesto-Pasta-Bolognese-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Bolognese</h5>
                      <p class="small">Pasta Bolognese is a classic Italian dish made with ground beef, tomatoes and onions. This is a staple delicious dinner recipe that is such a crowd pleaser.</p>
                      <h5 class="mt-1 mb-2">€21</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta Carbonara.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Carbonara</h5>
                      <p class="small">Carbonara is an Italian pasta dish from Rome made with eggs, hard cheese, cured pork and black pepper.</p>
                      <h5 class="mt-1 mb-2">€18</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card  m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta mejillones.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Pasta Mejillones</h5>
                      <p class="small">Pasta with mussels and tomatoes is a traditional Italian seafood pasta recipe from the Campani region. Spaghetti is a classic pasta selection for this seafood pasta sauce.</p>
                      <h5 class="mt-1 mb-2">€35</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Pasta Penne.avif" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Penne Rigate</h5>
                      <p class="small">Although it is very simple, this classic tomato sauce reduces down to a very fresh concentrated tomato flavour, one of the best sauces ever invented.</p>
                      <h5 class="mt-1 mb-2">€20</h5>
                    </div>
                  </p>
                </div>
              </div>
              <?php
      
      // Connect to the database
      $conn = mysqli_connect('localhost', 'root', '', 'login');
      
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      
      // Retrieve the comments from the database
      $query = "SELECT * FROM upload";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) > 0) { 
while ($row = mysqli_fetch_assoc($result)) {
if ($row['Category'] === "Pasta") {
echo  "<div class='card m-2 col-lg-3 px-0 col-md-5 col-sm-10'>";
echo  "<img src=". $row['file'] . " class='card-img-top img-fluid'  alt='...'>";
echo  "<div class='card-body'>";
echo  "<p class='card-text'>";
echo  "<div class='menu-item-content'>";
echo  " <div>";
echo  "          <span>Rated 4.5</span>";
echo  "          <span>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-half-fill'></i>";
echo  "          </span>";
echo  "       ";   
echo  "        </div>";
echo  "        <h5 class='mt-1 mb-2'>". $row['Name'] . "</h5>";
echo  "        <p class='small'>". $row['Description'] . "</p>";
echo  "        <h5 class='mt-1 mb-2'>€". $row['Price'] . "</h5>";
echo  "      </div>";
echo  "</p>";
echo  "  </div>";
echo  "</div>";
}
}
}
mysqli_close($conn);
?>
          </div>
          </div>
        </div>
      
      <!-- Pizzas -->
      <div class="tab-pane fade" id="pills-pizza" role="tabpanel">
        <h1 class="text-warning mb-5 h1-font">Pizzas</h1>
        <div class="container-fluid">
          <div class="row g-4">
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/Pizza Verde.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Verde</h5>
                  <p class="small">This vegetarian pizza recipe will delight vegetarians and carnivores alike. It’s fresh and full of flavor, featuring cherry tomatoes, artichoke, bell pepper, olives, red onion and some baby spinach. You’ll find a base of rich tomato sauce and golden, bubbling mozzarella underneath, of course</p>
                  <h5 class="mt-1 mb-2">€25</h5>
                </div>
              </p>
            </div>
          </div>           
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/Pizza Meat Lovers.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Meat Lovers</h5>
                  <p class="small">Homemade thin crust pizza, topped off with cheese, bacon, ham, pepperoni, hot sausage and meatballs. A must for meat lovers!</p>
                  <h5 class="mt-1 mb-2">€26</h5>
                </div>
              </p>
            </div>
          </div>           
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/Pizza Hawai.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Hawaii</h5>
                  <p class="small">Hawaiian pizza is a pizza originating in Canada, and is traditionally topped with pineapple, tomato sauce, cheese, and either ham or bacon.</p>
                  <h5 class="mt-1 mb-2">€20</h5>
                </div>
              </p>
            </div>
          </div>
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/foad-roshan-WwjseJMNfjk-unsplash.jpg" class="card-img-top img-fluid"  alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Pepperoni</h5>
                  <p class="small">Pepperoni pizza is an American pizza variety which includes one of the country's most beloved toppings. Pepperoni, which denotes a large pepper in Italian, but nowadays it denotes a spicy salami, usually made with a mixture of beef, pork, and spices.</p>
                  <h5 class="mt-1 mb-2">€26</h5>
                </div>
              </p>
            </div>
          </div>
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/Pizza Navidad.avif" class="card-img-top img-fluid"  alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Napoletana</h5>
                  <p class="small">Neapolitan pizza (Italian: pizza napoletana), also known as Naples-style pizza, is a style of pizza made with tomatoes and mozzarella cheese.</p>
                  <h5 class="mt-1 mb-2">€26</h5>
                </div>
              </p>
            </div>
          </div>
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/Quattro-Formaggi-1200px-Inside-the-Rustic-Kitchen-2.jpg" class="card-img-top img-fluid"  alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Cuattro Formaggi</h5>
                  <p class="small">Pizza quattro formaggi is a variety of pizza in Italian cuisine that is topped with a combination of four kinds of cheese, usually melted together, with tomato sauce. It is popular worldwide, including in Italy, and is one of the iconic items from our menus.</p>
                  <h5 class="mt-1 mb-2">€22</h5>
                </div>
              </p>
            </div>
          </div>
          <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
            <img src="./images/margarita.jpg" class="card-img-top img-fluid"  alt="...">
            <div class="card-body">
              <p class="card-text">
                <div class="menu-item-content">
                  <div>
                    <span>Rated 4.5</span>
                    <span>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </span>
                    
                  </div>
                  <h5 class="mt-1 mb-2">Pizza Margherita</h5>
                  <p class="small">Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt, and extra-virgin olive oil.</p>
                  <h5 class="mt-1 mb-2">€19</h5>
                </div>
              </p>
            </div>
          </div>
          <?php
      
      // Connect to the database
      $conn = mysqli_connect('localhost', 'root', '', 'login');
      
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      
      // Retrieve the comments from the database
      $query = "SELECT * FROM upload";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) > 0) { 
while ($row = mysqli_fetch_assoc($result)) {
if ($row['Category'] === "Pizza") {
echo  "<div class='card m-2 col-lg-3 px-0 col-md-5 col-sm-10'>";
echo  "<img src=". $row['file'] . " class='card-img-top img-fluid'  alt='...'>";
echo  "<div class='card-body'>";
echo  "<p class='card-text'>";
echo  "<div class='menu-item-content'>";
echo  " <div>";
echo  "          <span>Rated 4.5</span>";
echo  "          <span>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-fill'></i>";
echo  "          <i class='ri-star-half-fill'></i>";
echo  "          </span>";
echo  "       ";   
echo  "        </div>";
echo  "        <h5 class='mt-1 mb-2'>". $row['Name'] . "</h5>";
echo  "        <p class='small'>". $row['Description'] . "</p>";
echo  "        <h5 class='mt-1 mb-2'>€". $row['Price'] . "</h5>";
echo  "      </div>";
echo  "</p>";
echo  "  </div>";
echo  "</div>";
}
}
}
mysqli_close($conn);
?>
      </div>
      </div>
      </div>

        <!-- Meat Dishes -->
        
        <div class="tab-pane fade" id="pills-meat" role="tabpanel">
          <h1 class="text-warning mb-5 h1-font">Meat Dishes</h1>
          <div class="container-fluid">
            <div class="row g-4">
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Porchetta-di-Ariccia.jpeg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Porchetta di Ariccia</h5>
                      <p class="small">This is a simple pork roast which has become a prized culinary symbol of the Lazio region thanks to its particularly flavorful stuffing made with fennel, rosemary, and garlic.</p>
                      <h5 class="mt-1 mb-2">€28</h5>
                    </div>
                  </p>
                </div>
              </div>           
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Arista.jpeg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Arista</h5>
                      <p class="small">Arista is one of the most loved Italian meats, originally from Tuscany, and consists of lean pork loin seasoned in finely chopped rosemary, extra-virgin olive oil, garlic, salt, and pepper, tied with twine and then roasted for a few hours.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>           
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Bistecca-alla-Fiorentina.jpeg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Bistecca alla Fiorentina</h5>
                      <p class="small">The great Florentine Steak. This is a T-bone steak from a young steer, typically Chianina cattle, a typical Tuscan breed from the hills around Florence.</p>
                      <h5 class="mt-1 mb-2">€35</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Peposo.jpeg.webp" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Peposo</h5>
                      <p class="small">A symbol of Florentine cucina povera, this humble Tuscan meat stew was in fact traditionally made with the leftover and unused parts of beef, slow-cooked in Chianti, with the addition of the typical soffritto (diced onions, celery, and carrots), garlic, fresh herbs and a large amount of crushed black peppercorns.</p>
                      <h5 class="mt-1 mb-2">€35</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Cotoletta-alla-Milanese.jpeg.webp" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Cotoletta alla Milanese</h5>
                      <p class="small">This signature dish from Milan is nothing more than breaded tender veal deep fried in butter.</p>
                      <h5 class="mt-1 mb-2">€26</h5>
                    </div>
                  </p>
                </div>
              </div>
              <div class="card m-2 col-lg-3 px-0 col-md-5 col-sm-10">
                <img src="./images/Ossobuco.jpeg.webp" class="card-img-top img-fluid"  alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <div class="menu-item-content">
                      <div>
                        <span>Rated 4.5</span>
                        <span>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        </span>
                        
                      </div>
                      <h5 class="mt-1 mb-2">Ossobuco</h5>
                      <p class="small">These cross-cut veal shanks braised in vegetables, broth, and white wine are a culinary specialty of the Lombardy region. Served on a bed of saffron risotto alla Milanese or creamy polenta.</p>
                      <h5 class="mt-1 mb-2">€32</h5>
                    </div>
                  </p>
                </div>
              </div>
              <?php
      
              // Connect to the database
              $conn = mysqli_connect('localhost', 'root', '', 'login');
              
              // Check connection
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              
              // Retrieve the comments from the database
              $query = "SELECT * FROM upload";
              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) { 
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['Category'] === "Meat") {
      echo  "<div class='card m-2 col-lg-3 px-0 col-md-5 col-sm-10'>";
      echo  "<img src=". $row['file'] . " class='card-img-top img-fluid'  alt='...'>";
      echo  "<div class='card-body'>";
      echo  "<p class='card-text'>";
      echo  "<div class='menu-item-content'>";
      echo  " <div>";
      echo  "          <span>Rated 4.5</span>";
      echo  "          <span>";
      echo  "          <i class='ri-star-fill'></i>";
      echo  "          <i class='ri-star-fill'></i>";
      echo  "          <i class='ri-star-fill'></i>";
      echo  "          <i class='ri-star-fill'></i>";
      echo  "          <i class='ri-star-half-fill'></i>";
      echo  "          </span>";
      echo  "       ";   
      echo  "        </div>";
      echo  "        <h5 class='mt-1 mb-2'>". $row['Name'] . "</h5>";
      echo  "        <p class='small'>". $row['Description'] . "</p>";
      echo  "        <h5 class='mt-1 mb-2'>€". $row['Price'] . "</h5>";
      echo  "      </div>";
      echo  "</p>";
      echo  "  </div>";
      echo  "</div>";
    }
  }
}
mysqli_close($conn);
?>
        </div>
        </div>
        </div>
    
        
      </div>
    </div>
      <!-- Footer Start -->
      <?php
include_once 'footer.php'
?>