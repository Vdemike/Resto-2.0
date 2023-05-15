<?php 
include_once 'header.php'
?>

      <h1>Ghost Element</h1>

<!-- Contact section -->

<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
  <div class="row g-0">

      <div class="col-md-6 bg-dark d-flex align-items-center h-75">
          <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
              <h5 class="section-title ff-secondary text-start text-warning fw-normal h1-font">Contact Us</h5>
              <h1 class="text-warning mb-4 h1-font">How can we help you?</h1>
              <form action="contactdata.php" method="post">
                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-floating">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                              <label for="name">Your Name</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating">
                              <input type="text" class="form-control" name="uid" id="name" placeholder="Your Name">
                              <label for="name">
                                Your username
                              </label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-floating">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                              <label for="email">Your Email</label>
                          </div>
                      </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating mt-3 mb-3">
                              <select class="form-select" name="cat" id="select1">
                                <option value="1">Food types & allergies</option>
                                <option value="2">Reservations</option>
                                <option value="3">Cancellations</option>
                                <option value="4">Complaints</option>
                                <option value="5">Locations</option>
                                <option value="6">Careers</option>
                                <option value="7">Others..</option>
                              </select>
                              <label for="select1">What is your question about?</label>
                            </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating mb-3">
                              <textarea class="form-control" name="question" placeholder="Enter your message here" id="message" style="height: 100px"></textarea>
                              <label for="message">How can we help you?</label>
                          </div>
                      </div>
                      <div class="col-12">
                        <?php
                      if (isset($_SESSION['userUid'])) {
                        echo "<button class='btn btn-warning w-100 py-3' type='submit'>Send Message</button>";
                        }
                        else {
                            echo "<div class='btn btn-secondary w-100 py-3'>Log in first</div>";
                        }
                        ?>
                      </div>
                      </form>
                    </div>
          </div>
      <div class="col-md-6">
        <h1 class="bg-dark text-warning mb-0 px-2 pt-4 pb-4 col-md-11 h1-font">Where to find us?</h1>
            <div class="image-form overflow-hidden h-75">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.9088710289157!2d4.3504552155609755!3d50.85137176627627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3b5a2604c6d%3A0x859043b253883d43!2sPlace%20de%20Brouck%C3%A8re!5e0!3m2!1sfr!2sbe!4v1671834576562!5m2!1sfr!2sbe" width="600" height="1200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> 
      </div>
  </div>
</div>


      <!-- Footer Start -->
      <?php
include_once 'footer.php'
?>