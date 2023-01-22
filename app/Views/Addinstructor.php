<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Student Profile View -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />

    <link rel="stylesheet" href="css/style.css">
    <!-- End Student Profile View -->

    <title>Foreign Language College Mombasa - Add Instructor</title>
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
                <h2>Add Instructor</h2>
            </div>
        </div><!-- End Breadcrumbs -->
        <br />

        <!-- Student Profile View Secton -->
        </div>        
        </div>
        </div>

        <div class="ScriptTop">
            <div class="rt-container">
                <div class="col-rt-4" id="float-right">

                    <header class="ScriptHeader">
                        <div class="rt-container">
                            <div class="col-rt-12">
                                <div class="rt-heading">
                                    <!-- <h2>Student Dashboard</h2> -->
                                </div>
                            </div>
                        </div>
                    </header>

                    <section>
                        <div class="rt-container">
                            <div class="col-rt-12">
                                <div class="Scriptcontent">

                                    <!-- Student Profile -->
                                    <Sectionstudentp1>
                                        <div class="student-profile py-4">
                                            <div class="container">
                                                <div class="row">                                                    
                                                    <div class="col-lg-8">
                                                        <div class="card shadow-sm">
                                                            <div class="card-header bg-transparent border-0">
                                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Instructor Information</h3>
                                                            </div>                                                            
                                                            <div class="card-body pt-0">
                                                               <form action="/Saveinstructor" method="POST" role="form">
                                                                <p class="text-danger"><?= $insert?$insert:""?></p>
                                                                <p>Instructors Can Login With Email and Password idno at the staff login Portal</p>
                                                                <div class="row">                
                                                                    <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                                                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="ENTER FIRSTNAME " required>                                                                    
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                                                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="ENTER LASTNAME " required>                                                                    
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                                                                    <input type="text" class="form-control" name="emailaddress" id="emailaddress" placeholder="ENTER EMAIL " required>                                                                    
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                                                                    <input type="text" class="form-control" name="course" id="course" placeholder="ENTER COURSE ASSIGNED" required>                                                                    
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                                                                    <input type="text" class="form-control" name="idno" id="idno" placeholder="ENTER ID NUMBER" required>                                                                    
                                                                    </div>                                                                    
                                                                    <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                                                                    <input type="text" class="form-control" name="telephoneno" id="telephoneno" placeholder="ENTER ID NUMBER" required>                                                                    
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="text-center"><button type="submit" class="btn btn-primary mt-2 mb-3">Submit</button></div>
                                                                </form>
                                                            </div>
                                                        </div><br />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </Sectionstudentp1>

                                    <Sectionstudentp2>
                                        <div class="container d-flex align-items-center">
                                            <a href="/userlist" class="get-started-btn">Userlist</a>
                                            <a href="/Enrollmentlist" class="get-started-btn">Enrollment List</a>
                                            <a href="/Scholarshiplist" class="get-started-btn">Scholarship List</a>
                                            <a href="#" class="get-started-btn">Class Attendance</a>                                                                                        
                                            <a href="/Addinstructor" class="get-started-btn">Add Instructor</a>
                                        </div>
                                    </Sectionstudentp2>
                                    <!-- partial -->

                                </div>
                            </div>
                        </div>
                    </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>

</body>

</html>