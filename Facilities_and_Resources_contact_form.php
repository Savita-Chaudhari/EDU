<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>EduQR</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/icons8-qr-code-scan-68.png" rel="icon">
  <link href="img/icons8-qr-code-scan-68.png" rel="icons8-qr-code-scan-68">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Qr-code-based-feedback-system
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <?php
  include 'form_header.php';
  ?>

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>
              Facilities and Resources</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <form class="was-validated" method="post">

        <?php
        include 'name_email.php';
        ?>


          <div class="mb-3">
            <label for="resources_feedback" class="form-label">Were there any resources that you felt were lacking or
              could be improved?</label>
            <textarea class="form-control is-invalid" id="resources_feedback" name="resources_feedback" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="labs_feedback" class="form-label">Were the computer labs equipped with the necessary
              software and hardware?</label>
            <textarea class="form-control is-invalid" id="labs_feedback" name="labs_feedback" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="facility_issues" class="form-label">Were there any specific issues or challenges you
              encountered with the facilities?</label>
            <textarea class="form-control is-invalid" id="facility_issues" name="facility_issues" required></textarea>

          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="cleanliness_rating"> How would you rate the overall cleanliness of
              the facilities?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="very_clean" name="cleanliness_rating" value="Very Clean" required>
              <label class="form-check-label" for="very_clean">Very Clean

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="clean" name="cleanliness_rating" value="Clean" required>
              <label class="form-check-label" for="clean">
                Clean

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="average" name="cleanliness_rating" value="Average" required>
              <label class="form-check-label" for="average">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="below_average" name="cleanliness_rating" value="Below Average" required>
              <label class="form-check-label" for="below_average">
                Below Average


            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="poor" name="cleanliness_rating" value="Poor" required>
              <label class="form-check-label" for="poor">
                Poor</label>
              </label>
            </div>
          </div><br>





          <div class="form-check mb-3">
            <label class="form-check-label" for="library_rating">How would you rate the library facilities for
              research and study?</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="excellent_library" name="library_rating" value="Excellent" required>
              <label class="form-check-label" for="excellent_library"> Excellent

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="good_library" name="library_rating" value="Good" required>
              <label class="form-check-label" for="good_library">
                Good

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="average_library" name="library_rating" value="Average" required>
              <label class="form-check-label" for="average_library">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="below_average_library" name="library_rating" value="Below Average" required>
              <label class="form-check-label" for="below_average_library">
                Below Average

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="poor_library" name="library_rating" value="Poor" required>
              <label class="form-check-label" for="poor_library">
                Poor
            </div>
          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="overall_cleanliness_rating"> How would you rate the overall cleanliness of
              the facilities?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="very_clean_overall" name="overall_cleanliness_rating" value="Very Clean" required>
              <label class="form-check-label" for="very_clean_overall">Very Clean

            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="clean_overall" name="overall_cleanliness_rating" value="Clean" required>
              <label class="form-check-label" for="clean_overall">
                Clean

              </label>
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="average_overall" name="overall_cleanliness_rating" value="Average" required>
              <label class="form-check-label" for="average_overall">
                Average

              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="below_average_overall" name="overall_cleanliness_rating" value="Below Average" required>
              <label class="form-check-label" for="below_average_overall">
                Below Average


            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="poor_overall" name="overall_cleanliness_rating" value="Poor" required>
              <label class="form-check-label" for="poor_overall">
                Poor</label>
              </label>
            </div>
          </div><br>
          <div class="mb-3">
            <label for="facility_improvement" class="form-label">What changes would you suggest to improve the
              facilities?</label>
            <textarea class="form-control is-invalid" id="facility_improvement" name="facility_improvement" required></textarea>

          </div><br>
          <div class="mb-3">
            <label for="equipment_recommendation" class="form-label">Are there any specific resources or equipment you would
              recommend adding or upgrading? </label>
            <textarea class="form-control is-invalid" id="equipment_recommendation" name="equipment_recommendation" required></textarea>

          </div><br>
          <div class="form-check mb-3">
            <label class="form-check-label" for="feeling_safe">Did you feel safe and secure on campus/in the
              facilities?
            </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="feeling_safe_yes" name="feeling_safe" value="Yes" required>
              <label class="form-check-label" for="feeling_safe_yes">
                Yes
              </label>
            </div>
            <div class="form-check mb-3">
              <input type="radio" class="form-check-input" id="feeling_safe_no" name="feeling_safe" value="No" required>
              <label class="form-check-label" for="feeling_safe_no">
                No
              </label>
            </div>

          </div><br>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms" required>
            <label class="form-check-label" for="agree_terms">I agree to the terms and conditions.</label>

          </div><br>
          <div class="mb-3">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- End About area -->
 <!-- Start Footer bottom Area -->
 <footer>
    
  <div class="footer-area-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="copyright text-center">
            <p>
              &copy; Copyright <strong>EduQR</strong>.
            </p>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- Start Footer bottom Area -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>



</body>

</html>
<?php
if(isset($_POST['submit'])){
 // Retrieve form data
 $resources_feedback = $_POST['resources_feedback'];
 $labs_feedback = $_POST['labs_feedback'];
 $facility_issues = $_POST['facility_issues'];
 $cleanliness_rating = $_POST['cleanliness_rating'];
 $library_rating = $_POST['library_rating'];
 $overall_cleanliness_rating = $_POST['overall_cleanliness_rating'];
 $facility_improvement = $_POST['facility_improvement'];
 $equipment_recommendation = $_POST['equipment_recommendation'];
 $feeling_safe = $_POST['feeling_safe'];
 $agree_terms = isset($_POST['agree_terms']) ? 1 : 0; // Convert checkbox value to 1 or 0


 // Retrieve the r_id from the session or wherever it's stored
 $q1 = "SELECT r_id FROM signup WHERE email='$email'";
 $ans2 = mysqli_query($con,$q1);
 $fetchrecord = mysqli_fetch_array($ans2);
 $rid = $fetchrecord['r_id'];

 // Insert data into the database
 $query = "INSERT INTO facility_feedback (`r_id`, `lacking_resources`, `computer_labs_equipment`, `facility_issues`, `cleanliness_rating`, `library_facility_rating`, `overall_cleanliness_rating`, `suggested_changes`, `recommended_resources`, `safety_feeling`, `agreed_to_terms_and_conditions`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

 $statement = mysqli_prepare($con, $query);
 mysqli_stmt_bind_param($statement, "isssssssssi", $rid, $resources_feedback, $labs_feedback, $facility_issues, $cleanliness_rating, $library_rating, $overall_cleanliness_rating, $facility_improvement, $equipment_recommendation, $feeling_safe, $agree_terms);

 if (mysqli_stmt_execute($statement)) {
  echo '<script>alert("Feedback submitted successfully.");</script>';
} else {
  echo '<script>alert("Error inserting feedback: ' . mysqli_error($con) . '");</script>';
}

 mysqli_stmt_close($statement);
}

?>
