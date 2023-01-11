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

<body class="login-img3-body col-12">
    <!-- ======= Header ======= -->
    <?php include 'header.php' ?>

    <div class="row" style="background: aliceblue;">
        <div class=" col-12" style="margin-left:auto; margin-right:auto; padding:50px;">
            <table id="enrollment-table" class="table table-bordered table-hover" style="margin-left:auto; margin-right:auto; ">
                <thead>
                    <tr>
                        <th>Admission Number</th>
                        <th>Trimester</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>ID No</th>
                        <th>Place of Birth</th>
                        <th>DoB</th>
                        <th>Residence</th>
                        <th>Profession</th>
                        <th>P.O Box</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Guardian</th>
                        <th>Course</th>
                        <th>Intake</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($users as $row) { ?>
                        <tr>
                            <td><?php echo $row['admissionnum'] ?></td>
                            <td><?php echo $row['trimester'] ?></td>
                            <td><?php echo $row['fullname'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['idno'] ?></td>
                            <td><?php echo $row['placeofbirth'] ?></td>
                            <td><?php echo $row['dob'] ?></td>
                            <td><?php echo $row['residence'] ?></td>
                            <td><?php echo $row['profession'] ?></td>
                            <td><?php echo $row['pobox'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['telephone'] ?></td>
                            <td><?php echo $row['guardian'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['intake'] ?></td>
                            <td>
                                <a href="javascript:void(0)" onclick="getUserDetails('<?= $row['admissionnum']; ?>')" title="Edit <?= $row['admissionnum']; ?>" data-toggle="modal" data-target="#edit-user-modal">
                                    <button type="button" class="btn btn-info btn-circle btn-xs">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>

                            </td>
                        </tr>


                    <?php     }    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php' ?>

</body>

</html>