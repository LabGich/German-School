<?php 
$this->session 	= \Config\Services::session();
?>
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

    <title>Foreign Language College Mombasa - Admin Profile</title>
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
                <h2>Admin Dashboard</h2>
            </div>
        </div><!-- End Breadcrumbs -->
        <br />

        <!-- Student Profile View Secton -->
        </div>
        <div class="container d-flex align-items-center">
            <a href="/public/GetUser?ID=<?= $this->session->get('ID') ?>" class="get-started-btn">Update Details</a>
            <a href="#" class="get-started-btn">Notifications<span class="bi bi-bell"></span></a>
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
                                                    <div class="col-lg-4">
                                                        <div class="card shadow-sm">
                                                            <div class="card-header bg-transparent text-center">
                                                                
                                                                <img class="profile_img img-fluid" src="/public/assets/img/<?php 
                                                                // var_dump($this->session->get());
                                                                echo $this->session->get('profileimg')?>" alt="student dp">
                                                                <h3><?= $this->session->get('firstname')." ".$this->session->get('lastname') ?></h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="mb-0"><strong class="pr-1">Name:</strong><?= $this->session->get('username'); ?></p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card shadow-sm">
                                                            <div class="card-header bg-transparent border-0">
                                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Admin Information</h3>
                                                            </div>                                                            
                                                            <div class="card-body pt-0">
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th width="30%">Date Added</th>
                                                                        <td width="2%">:</td>
                                                                        <td><?= $this->session->get('date') ?></td>
                                                                    </tr>    
                                                                    <tr>
                                                                        <th width="30%">User Role</th>
                                                                        <td width="2%">:</td>
                                                                        <td><?= $this->session->get('usertype'); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th width="30%">Telephone</th>
                                                                        <td width="2%">:</td>
                                                                        <td><?= $this->session->get('phone'); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th width="30%">E-mail</th>
                                                                        <td width="2%">:</td>
                                                                        <td><?= $this->session->get('email'); ?></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div><br />
                                                        
                                                        
                                                        <div class="row m-2">
                                                            <div class="m-2 col-lg-3 col-sm-6">
                                                                <a href="/public/userlist" class="btn btn-primary">User List</a>
                                                                </div>
                                                                <div class="m-2 col-lg-3 col-sm-6">
                                                                <a href="/public/Enrollmentlist" class="btn btn-primary">Enrollment List</a>
                                                                </div>
                                                                <div class="m-2 col-lg-3 col-sm-6">
                                                                <a href="/public/Scholarshiplist" class="btn btn-primary">Scholarship List</a>
                                                                </div>
                                                                <div class="m-2 col-lg-3 col-sm-6">
                                                                <a href="#" class="btn btn-primary">Class Attendance</a>                                                                                        
                                                                </div>
                                                                <div class="m-2 col-lg-3 col-sm-6">
                                                                <a href="/public/Addinstructor" class="btn btn-primary">Add Instructor</a>
                                                                </div>
                                                                <div class="m-2 col-lg-6 col-sm-6">
                                                                <button class="btn btn-primary" id="btn-download" download="/public/assets/img/admission.png"><i class="bx bx-download"></i> Download Admission Form Here</button>
                                                                </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </Sectionstudentp1>
                                    
                                    <!-- partial -->

                                </div>
                            </div>
                        </div>
                    </section>

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