<?php 
include_once 'header.php'
?>

<div class="container-xxl py-5 px-0 ">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="image-form overflow-hidden">
                    <img src="./images/Dine.avif">
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h5 class="section-title ff-secondary text-start text-warning fw-normal h1-font">Sign Up</h5>
                    <h1 class="text-warning mb-4 h1-font">Create your account</h1>
                    <form action="./database.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="uid" id="username" placeholder="Username">
                                    <label for="username">Your Username</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
                                    <label for="pwd">Your Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="pwdrepeat" id="pwdrepeat" placeholder="Repeat your Password">
                                    <label for="pwdrepeat">Repeat Your Password</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select" id="select1" name="selection">
                                      <option value="1">Friends and family</option>
                                      <option value="2">News</option>
                                      <option value="3">Internet</option>
                                      <option value="4">Social media (Facebook, Instagram,..)</option>
                                      <option value="5">By coincidence</option>
                                      <option value="6">Others..</option>
                                    </select>
                                    <label for="select1">How did you found out about us?</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Register Now</button>
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