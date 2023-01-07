<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foreign Language College Mombasa - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include 'css.php' ?>

</head>

<body>

  <!-- ======= Header ======= -->
 <?php include 'header.php' ?>
  
  <main id="main">
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Registration</h2>        
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Login Section ======= -->
    <section id="about" class="about">
      <div class="container p-2  col-lg-6 col-sm-12" data-aos="fade-up" style="background: rgb(184 209 191);
    border-radius: 5px;
    margin-top: 15px;
    margin-bottom: 15px;">
<p class="text-center mb-2" style="justify-content:center">Please Enter Correct Information Below</p>
      <div class="Card col-lg-12 col-sm-12 mt-5 mt-lg-0 text-center m-2">

<form action="/Logincontroller" method="post" role="form" class="php-email-form mt-3 m-3">
  
    <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
      <input type="text" name="admissionnumber" class="form-control" id="admissionnumber" placeholder="Your Admission Number" required>
    </div>  
    <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
      <input type="text" name="course" class="form-control" id="course" placeholder="Your Course" required>
    </div>  
    <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
      <input type="date" name="admissiondate" class="form-control" id="admissiondate" placeholder="Your Admission Date" required>
    </div>  
    <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
      <input type="text" name="yearofstudy" class="form-control" id="yearofstudy" placeholder="Year of Study" required>
    </div>  
  <div class="form-group mt-3  col-lg-12 col-sm-12 mb-2">
    <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
  </div>  
  <div><button class="btn btn-success  mt-3 p-2  col-lg-6 col-sm-12" type="submit">Submit</button></div>
</form>

</div>

      </div>
    </section><!-- End Login Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>

</body>

</html>