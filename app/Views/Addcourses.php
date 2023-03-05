<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Foreign Language College Mombasa - Registration</title>
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
                <h2>Add Courses and Instructor</h2>
            </div>
        </div><!-- End Breadcrumbs -->
        <!-- ======= Login Section ======= -->
        
        <section id="about" class="about">
            <div class="container p-2  col-lg-6 col-sm-12" data-aos="fade-up" style="background: rgb(178 214 229);
    border-radius: 5px;
    margin-top: 15px;
    margin-bottom: 15px;">
                <p class="text-center mb-2" style="justify-content:center">Please Enter Instructor and their ID/Email</p>
                <div class="Card col-lg-12 col-sm-12 mt-5 mt-lg-0 text-center m-2">

                    <form action="/public/Savecourses" method="POST" role="form" class=" mt-3 m-3">

                        <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
                            <select name="instructorid" id="instructorid" class="form-control" required>
                            <option>Select Instructor</option>
                            <?php foreach($instructor as $instructor){
                                ?>
                            <option value='<?= $instructor['USERID'] ?>'><?= $instructor['EMAIL'] ?></option>
                            <?php } ?>                            
                        </select>                            
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 form-group mb-2">
                            <input type="text" name="course" class="form-control" id="course" placeholder="Course Assigned" required>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-primary mt-2 mb-3">Submit</button></div>
                    </form>

                </div>

            </div>
        </section><!-- End Login Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>

</body>

</html>