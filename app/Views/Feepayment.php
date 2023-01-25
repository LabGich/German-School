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
            <h5><b></b>Your Application to Foreign Language Mombasa has been successfully submitted.
                Please follow the instructions below to make your fee payments.
                Your admission number will be assigned after 50% completion of the fee payment</b></h5>
                 <br/>
                <br/>
              <button class="btn btn-primary" id="btn-download" download="/public/assets/img/admission.png"><i class="bx bx-download"></i> Download Admission Form Here</button>
              <br/>
              <br/>
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
                                                 <b>Option 2</b><br />
                                                Enter correct details below to Pay
                                                <div class="form-group row mt-3">
                                                    <label for="phonenumber" class="col-lg-2 col-sm-2 col-form-label">M-PESA No</label>
                                                    <div class="col-sm-4 col-lg-4">
                                                        <input type="tel" name="phonenumber" class="form-control" id="phonenumber" placeholder="07********" required>
                                                    </div>
                                                    <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="amount" class="form-control" id="amount">
                                                    </div>
                                                </div>
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
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                                product</span></p>
                                        <p class="mb-0"><span class="fw-bold">Price:</span><span class="c-green">:$452.90</span></p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                            nihil neque
                                            quisquam aut
                                            repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                            quis,
                                            iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                    <span class="fw-bold">Credit Card</span>
                                    <span class="">
                                        <span class="fab fa-cc-amex"></span>
                                        <span class="fab fa-cc-mastercard"></span>
                                        <span class="fab fa-cc-discover"></span>
                                    </span>
                                </a>
                            </p>
                            <div class="collapse show p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-5 mb-lg-0 mb-3">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                                product</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bold">Price:</span>
                                            <span class="c-green">:$452.90</span>
                                        </p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                            nihil neque
                                            quisquam aut
                                            repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                            quis,
                                            iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                    <div class="col-lg-7">
                                        <form action="" class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder="Card Number">
                                                        <label for="" class="form__label"></label>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder="Month/Year">
                                                        <label for="" class="form__label"></label>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form__div">
                                                        <input type="password" class="form-control" placeholder="CVV Code">
                                                        <label for="" class="form__label"></label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder="Name on the Card">
                                                        <label for="" class="form__label"></label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn btn-primary w-100">Sumbit</div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3 mb-3">
                    <div class="btn btn-primary payment w-100">
                        Make Payment
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