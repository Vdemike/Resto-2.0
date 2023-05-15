<?php 
include_once 'header.php';
$conn = mysqli_connect('localhost', 'root', '', 'login');
if(!isset($_SESSION['userUid'])){
  header('Location: index.php?not=loggedin');
  exit();
}
if (isset($_SESSION['userUid'])) {
  if (isset($_SESSION['role']) && $_SESSION['role'] !== "admin") {
      header('Location: index.php?not=admin');
      exit();
  } 
  }
?>
<div>Ghost Element</div>
<div>Ghost Element</div>
<div>Ghost Element</div>
<div>. </div>

<div class="container">
      <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link btn-color active" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages" aria-selected="true">
          <h6 class="section-title ff-secondary text-start text-warning fw-normal h1-font">Messages</h6>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link btn-color btn" id="pills-menu-tab" data-bs-toggle="pill" data-bs-target="#pills-menu" type="button" role="tab" aria-controls="pills-menu" aria-selected="false">
          <h6 class="section-title ff-secondary text-start text-warning fw-normal h1-font">Add menu item</h6>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link btn-color" id="pills-delete-tab" data-bs-toggle="pill" data-bs-target="#pills-delete" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false">
          <h6 class="section-title ff-secondary text-start text-warning fw-normal h1-font">Delete User</h6>
          </button>
      </ul>
<div class="tab-content" id="pills-tabContent">
<style>
  .btn-color.active {
   background-color: rgb(50, 50, 50) !important;
}
</style>
<!-- Message section start -->
<div class="tab-pane fade show active" id="pills-messages" role="tabpanel">
<div class="container bg-none align-items-center h-75">
<div class="p-4 wow fadeInUp" data-wow-delay="0.2s">
<div class="container-title">           
      <h1 class="text-warning mb-5 h1-font">What do your customers ask?</h1>
</div>

<div class="row g-4">
<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'login');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the comments from the database
$query = "SELECT * FROM contact";
$result = mysqli_query($conn, $query);

// Get the id of the card to delete
$questionID = "";
if (isset($_GET['questionID'])) {
  $questionID = $_GET['questionID'];
}

// Delete the card from the database if the id is set
if (!empty($questionID)) {
  $query = "DELETE FROM contact WHERE questionID = $questionID";
  mysqli_query($conn, $query);
}

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card m-2 col-lg-5 col-md-5 col-sm-10' id='card" . $row['questionID'] . "'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>" . $row["userName"] ."</h5>";
    echo "<h6 class='card-subtitle mb-2 text-muted'>" . $row["userCat"] . "</h6>";
    echo "<p class='card-text'>" . $row["userQuestion"] . "</p>";
    echo "<h7 class='card-subtitle mb-2 text-muted'> Posted on: " . date("Y-m-d H:i", strtotime($row["date"])) . "</h7> <br>";
    echo "<a href='admin.php?questionID=" . $row['questionID'] . "' class='btn btn-danger'>Delete</a>";
    echo "<a href='mailto:". $row['userEmail'] . "' class='btn btn-warning m-1'>Reply</a></p>";
    echo "</div>";
    echo "</div>";

  }
} else {
  echo "<h7 class='text-white'> No comments found </h7>";
}

// Close the connection
mysqli_close($conn);
      ?>
      
    </div>
  </div>
  </div>
</div>

<!-- Message section end -->
<!-- Import menu items start -->
<div class="tab-pane fade" id="pills-menu" role="tabpanel">
<div class="container bg-none align-items-center h-75">
<div class="p-4 wow fadeInUp" data-wow-delay="0.2s">
<div class="container-title">           
      <h1 class="text-warning mb-4 h1-font">Add menu items here</h1>
</div>

<form action="upload.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-5">
                            
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Name of the dish">
                                    <label for="nameDish">Name of the Dish</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="Price" id="Price" placeholder="Price">
                                    <label for="Price">Price</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-floating">
                                    <select class="form-select" id="Category" name="Category">
                                      <option value="1">Pasta</option>
                                      <option value="2">Pizza</option>
                                      <option value="3">Meat</option>
                                    </select>
                                    <label for="Category">Category</label>
                                  </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Description of the Dish" name="Description" id="Description" style="height: 100px"></textarea>
                                    <label for="message">Description of the Dish</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="file" name = "file" placeholder="Picture of the dish">
                                    <label for="file">Add a Picture of the Dish</label>
                                  </div>
                            </div>
                            <div class="col-md-7">
                                <button class="btn btn-warning w-100 py-3" type="submit">Add Dish to Menu</button>
                            </div>
                        </div>
                        </form>


</div>
  </div>
</div>
<!-- Import menu items end -->
<!-- delete user start -->
<div class="tab-pane fade" id="pills-delete" role="tabpanel">
<div class="col-md-12 bg-none align-items-center h-75">
<div class="p-4 wow fadeInUp" data-wow-delay="0.2s">
<div class="container-title">           
      <h1 class="text-warning mb-4 h1-font">Delete User</h1>
</div>
<div class="row g-4">
<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'login');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the comments from the database
$query = "SELECT * FROM login";
$result = mysqli_query($conn, $query);

// Get the id of the card to delete
$userId = "";
if (isset($_GET['userId'])) {
  $userId = $_GET['userId'];
}

// Delete the card from the database if the id is set
if (!empty($userId)) {
  $query = "DELETE FROM login WHERE userId = $userId";
  mysqli_query($conn, $query);
}

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['role'] !== "admin") {
    echo "<div class='card m-2 col-lg-5 col-md-5 col-sm-10' id='card" . $row['userId'] . "'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>" . $row["userName"] ."</h5>";
    echo "<h6 class='card-subtitle mb-2 text-muted'>" . $row["userEmail"] . "</h6>";
    echo "<p class='card-text'>Username: " . $row["userUid"] . "</p>";
    echo "<a href='admin.php?userId=" . $row['userId'] . "' class='btn btn-danger'>Delete</a>";
    echo "</div>";
    echo "</div>";

  }
}} else {
  echo "<h7 class='text-white'> No users found </h7>";
}

// Close the connection
mysqli_close($conn);
      ?>
      
    </div>
  </div>
  </div>
</div>


</div>
  </div>
</div>
<!-- delete user end -->
</div>
</div>

<?php
include_once 'footer.php';
?>