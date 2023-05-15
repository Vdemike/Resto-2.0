<?php 
include_once 'header.php'
?>

  <!-- Login form -->
<div class="container-xxl py-5 px-0 text-center wow fadeInUp " data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-3 d-flex"></div>
            <div class="col-md-6 bg-dark d-flex mt-5">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-warning fw-normal h1-font">Log In</h5>
                    <h1 class="text-warning mb-4 h1-font">Enter your credentials</h1>
                    <form action="Loginscript.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="userUid" id="username" placeholder="Username/Email">
                                    <label for="username">Your Username or Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="userPwd" id="pwd" placeholder="Password">
                                    <label for="pwd">Your Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Login</button>
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