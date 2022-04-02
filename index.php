<?php 

declare(strict_types=1);

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Style -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <title>Register Here</title>
</head>

<body>
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <h2 class="mb-5">
                Live seminar. <br />
                save your spot.
              </h2>

              <form class="border-right pr-5 mb-5" method="post" id="contactForm">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First name" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Last name" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" />
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="telegram" id="tgusername"
                      placeholder="Telegram username" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="phone" id="tgusername"
                      placeholder="Phone number" />
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="gender" for="gender">Gender</label> 
                    <select name="gender" id="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="gender" for="education">Education Level</label> 
                    <select name="education" id="education">
                      <option value="High School">High School</option>
                      <option value="Undergraduate">Undergraduate</option>
                      <option value="Graduate">Graduate</option>
                      <option value="Post Graduate">Post Graduate</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>

                
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="save my spot" name="submit-data" class="btn btn-primary rounded-0 py-2 px-4" />
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning"></div>
              <div id="form-message-success">
                Your saved your spot, you will recive an email, thank you!
              </div>
            </div>
            <div class="col-lg-4 ml-auto">
              <h3 class="mb-4">CSEC live seminar.</h3>
              <img class="seminarImg" src="assets/images/Debugging seminar.png" alt="">
             
              <p class="seminarTitle"><span class="bold"> Title </span> <span class="value">: The subtle art of not loosing your mind while Debugging</span></p>
              <p class="seminarTitle"><span class="bold"> Time </span> <span class="value">: 11:00 am Ethiopian Local Time</span></p>
              <p class="seminarTitle"><span class="bold"> Presenter </span> <span class="value">: Elias Amha (Echo)</span></p>
              <p class="seminarTitle"><span class="bold"> Host </span> <span class="value">: Fikremariam Getu</span></p>


              <p class="seminarDescription">
                Come join us at this week CSEC_ASTU live seminar and see an intuitive approach into myths about debugging, common pitfalls and a new framework for exploring solutions to hard to solve errors. 
              </p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>