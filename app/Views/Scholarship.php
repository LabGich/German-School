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
        <h2>Apply Scholarship</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container card p-3" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="/Applyscholarship" method="GET" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="admissionnum" id="admissionnum" placeholder="ID No/Passport/Birth Certificate" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="reasons" id="reasons" placeholder="Reasons for scholarship" required>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary mt-2 mb-3">Submit Application</button></div>
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