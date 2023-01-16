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

    <div class="row mt-3" style="background: aliceblue;margin-top: 100px !important;">
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
                    foreach ($enrollment as $row) { ?>
                        <tr>
                            <td><?php echo $row['ID'] ?></td>
                            <td><?php echo $row['TRIMESTER'] ?></td>
                            <td><?php echo $row['FULLNAMES'] ?></td>
                            <td><?php echo $row['GENDER'] ?></td>
                            <td><?php echo $row['IDNO'] ?></td>
                            <td><?php echo $row['PLACEOFBIRTH'] ?></td>
                            <td><?php echo $row['DOB'] ?></td>
                            <td><?php echo $row['RESIDENCE'] ?></td>
                            <td><?php echo $row['PROFESSION'] ?></td>
                            <td><?php echo $row['POBOX'] ?></td>
                            <td><?php echo $row['EMAIL'] ?></td>
                            <td><?php echo $row['TELEPHONE'] ?></td>
                            <td><?php echo $row['GUARDIAN'] ?></td>
                            <td><?php echo $row['COURSE'] ?></td>
                            <td><?php echo $row['INTAKE'] ?></td>
                            <td>
                                <a href="javascript:void(0)" onclick="getUserDetails('<?= $row['ID']; ?>')" title="Edit <?= $row['ID']; ?>" data-toggle="modal" data-target="#edit-user-modal">
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