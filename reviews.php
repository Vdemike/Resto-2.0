<?php 
include_once 'header.php'
?>
<h1>Ghost Element</h1>
<!-- Comment section start -->
<div class="container col-6 bg-none align-items-center vh-50 vw-100">
<div class="p-4 wow fadeInUp" data-wow-delay="0.2s">
<div class="container-title"> 
      <h1 class="text-warning mb-4 mt-3 h1-font">Read what our Customers say</h1>          
</div>

<div class="row g-4">
<div class="col-lg-6 col-md-6 col-sm-10 comments">  
<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'login');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the comments from the database
$query = "SELECT * FROM comment";
$result = mysqli_query($conn, $query);

// Retrieve the comments from the database
$query = "SELECT * FROM comment ORDER BY commentID DESC";
$result = mysqli_query($conn, $query);

// Get the id of the card to delete
$commentID = "";
if (isset($_GET['commentID'])) {
  $commentID = $_GET['commentID'];
}

// Delete the card from the database if the id is set
if (!empty($commentID)) {
  $query = "DELETE FROM comment WHERE commentID = $commentID";
  mysqli_query($conn, $query);
}

if (mysqli_num_rows($result) > 0) {
    echo "<div class='flex'>";
    while ($row = mysqli_fetch_assoc($result)) {
      $starCount = (int)str_replace(" Stars", "", $row['userStars']);
      $stars = str_repeat("<i class='ri-star-fill'></i>", $starCount);
  
      echo "<div class='card container-fluid mb-2 col-lg-10 px-0 col-md-5 col-sm-10'>";
      if($row['file']) {
        echo "<div class='image-container'>";
        echo "<img src=". $row['file'] . " class='card-img-top img-fluid'  alt='...'>";
      echo "</div>";
    }
      echo "<div class='card-body'>";
      echo "<h2 class='card-title'>" . $row["userSubtitle"] ."</h2>";
      echo "<div><span>$stars</span></div>";
      echo "<h6 class='card-subtitle mb-2 text-muted'> Posted by "  . $row["userID"] . "</h6>";
      echo "<p class='card-text'>" . $row["userComment"] . "</p>";
      if (isset($_SESSION['userUid']) && $_SESSION['userUid'] == $row['userID']) {
        echo "<a href='reviews.php?commentID=" . $row['commentID'] . "' class='btn btn-danger'>Delete</a>";
      }
      echo "</div>";
      echo "</div>";
    }
    echo "</div>";
  } else {
    echo "<p class='text-white'>No comments found. Be the first to let us know!</p>";
  }
  

// Close the connection
mysqli_close($conn);
      ?>
      

    <style> 
.image-container {
max-height: 17rem;
overflow: hidden;
overflow-x: hidden;
object-fit: contain;
border-bottom: 1px solid lightgray ;

}
.card-title {
    font-style: italic;
    font-weight: 300;
}
.comments {
  max-height: 75vh;
  overflow-y: scroll;
  overflow-x: hidden;
  
}
.comments::-webkit-scrollbar {
  width: 0;
}

.comments::-moz-scrollbar {
  width: 0;
}
</style>
  


</div>
<!-- Comment section end -->
<!-- Enter the comment here -->


<div class="col-lg-6 col-md-6 col-sm-10">
<div class="container-title"> 
      <h1 class="text-warning mb-5 h1-font">Join the Discussion!</h1>
</div>
<form action="comment.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                        <div class="col-md-10">
                          <div class="form-floating">
                              <input type="text" class="form-control" name="userSubtitle" id="userSubtitle" placeholder="Title of your Post">
                              <label for="userSubtitle">
                                Your Title
                              </label>
                          </div>
                      </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <select class="form-select" id="userStars" name="userStars">
                                      <option value="0 stars">0 Stars</option>
                                      <option value="1 stars">1 Stars</option>
                                      <option value="2 stars">2 Stars</option>
                                      <option value="3 stars">3 Stars</option>
                                      <option value="4 stars">4 Stars</option>
                                      <option value="5 stars">5 Stars</option>

                                    </select>
                                    <label for="userStars">How much do you rate us?</label>
                                  </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Enter Your Comment" name="userComment" id="userComment" style="height: 100px"></textarea>
                                    <label for="userComment">Let us know what you think!</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="file" name = "file" placeholder="Show us!">
                                    <label for="file">Add Picture</label>
                                  </div>
                            </div>
                            <div class="col-md-10">
                        
                        <?php
                      if (isset($_SESSION['userUid'])) {
                        echo "<button class='btn btn-warning w-100 py-3 mb-5' type='submit'>Send Message</button>";
                        }
                        else {
                            echo "<div class='btn btn-secondary w-100 py-3 mb-5'>Log in first</div>";
                        }
                        ?>
                      </div>
                        </div>
                        </form>
</div>
</div>
</div>
</div>
<?php
include_once 'footer.php'
?>