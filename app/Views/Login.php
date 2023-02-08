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

<body style="background:lightgray;">

  <!-- ======= Header ======= -->
  <main id="main">

    <!-- ======= Login Section ======= -->
    <section id="about" class="about">
      <div class="container p-2  col-lg-4 col-sm-6" data-aos="fade-up" style="background: white;
    border-radius: 5px;
    margin-top: 15px;
    margin-bottom: 15px;">
        <div style="display: flex;
                  align-items: center;
                  justify-content: center;">
          <img src="/public/assets/logo.png" alt="" class="img-fluid" style="width:150px;">
        </div>
        <p class="text-center mb-2" style="justify-content:center">Please Enter Registration Number and Password </p>
        <div class="Card col-lg-12 col-sm-12 mt-5 mt-lg-0 text-center m-2">
          <p class="text-danger"><?= $error ? $error : "" ?></p>
          <form action="<?php echo ('/public/loginfunc'); ?>" method="post" role="form" class="mt-3 m-3">

            <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
              <input type="text" name="admissionnumber" class="form-control" id="admissionnumber" placeholder="Your Admission Number" required>
            </div>
            <div class="form-group mt-3  col-lg-12 col-sm-12 mb-2">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <div><button class="btn btn-success  mt-3 p-2  col-lg-6 col-sm-12" type="submit">Login</button></div>
          </form>

        </div>

      </div>
    </section><!-- End Login Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>

</body>

</html>