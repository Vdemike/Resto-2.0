<?php 
include_once 'header.php'
?>

    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="image-form overflow-hidden">
                    <img src="./images/Dine.avif">
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-warning fw-normal h1-font">Reservation</h5>
                    <h1 class="text-warning mb-4 h1-font">Book A Table Online</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <form action="" method="post">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select1">
                                      <option value="1">Solo</option>
                                      <option value="2">2 persons</option>
                                      <option value="3">3 persons</option>
                                      <option value="4">4 persons</option>
                                      <option value="5">5 persons</option>
                                      <option value="6">6 persons</option>
                                      <option value="7">7 persons</option>
                                      <option value="8">8 or more</option>
                                    </select>
                                    <label for="select1">No Of People</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php 
include_once 'footer.php'
?>