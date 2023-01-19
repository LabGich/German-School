<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foreign Language College Mombasa - Contact</title>
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
        <h2>Admit Student</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container card p-3" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="/Admitcontroller" method="GET" role="form">
              <p class="text-danger"><?= $insert?$insert:""?></p>
              <div class="row">                
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="admissionnum" id="admissionnum" placeholder="ENTER ADMISSION OF NEW STUDENT" required>
                  <input type="hidden" class="form-control" name="id" id="id" value="<?= $_GET['id'] ?>">
                </div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary mt-2 mb-3">Submit Admission</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>

</body>

</html>