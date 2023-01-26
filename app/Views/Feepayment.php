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
                <h2>Fee Payment</h2>
                <p class="text-danger"><?= $insert ? $insert : "" ?></p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- Fee Payment Section -->
        <div class="container card p-3 mt-3 mb-3" data-aos="fade-up">
            <p><b><?= ($insert?$insert:"") ?> </b></p>
            <h5><b></b>Your Application to Foreign Language Mombasa has been successfully submitted.
                Please follow the instructions below to make your fee payments.
                Your admission number will be assigned after 50% completion of the fee payment</b></h5>
              
        </div>
           
        <div class="container card p-3 mt-3 mb-3">
            <div class="row">


                <div class="col-12 mt-4">
                    <div class="card p-3 mt-3 mb-3">
                        <p class="mb-0 fw-bold h4">Payment Methods</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                    <span class="fw-bold">M-Pesa</span>
                                    <span class="fab fa-cc-paypal">
                                    </span>
                                </a>
                            </p>
                            <div class="collapse p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="h4 mb-0">Follow the steps below to make payment using M-PESA or use the link at the bottom</p>
                                        <p class="mb-0"><span class="fw-bold">
                                                <ol>
                                                    <li>Go to M-Pesa</li>
                                                    <li>In M-Pesa go to Lipa na M-Pesa</li>
                                                    <li>In Lipa na M-PESA choose Pay Bill</li>
                                                    <li>Use our Pay Bill No: 4082661</li>
                                                    <li>Enter Account No as your Admission number/ID No</li>
                                                    <li>Enter Amount (respective fee balance)</li>
                                                    <li>Wait for the confirmation message: Pay FOREIGN LANGUAGE COLLEGE MOMBASA...</li>
                                                </ol>
                                            </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                    <span class="fw-bold">PesaPal</span>
                                    <span class="fab fa-cc-paypal">
                                    </span>
                                </a>
                            </p>
                            <div class="collapse p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="h4 mb-0"><a href="/linktopay">Click to pay</a></p>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                
            </div>
        </div>
        <!-- End Fee Payment Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>
    <script>
        function downloadImage(imageUrl) {
          var link = document.createElement('a');
          link.download = 'admission.jpg';
          link.href = imageUrl;
          link.click();
        }
        var button = document.getElementById('btn-download');
        button.addEventListener('click', function(e) {
          downloadImage('https://www.foreignlanguagemombasa.co.ke/public/assets/img/admission.png');
        });
      </script>
</body>

</html>