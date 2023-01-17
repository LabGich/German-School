<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Foreign Language College Mombasa - Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css'>
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
                        <th>Action</th>
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
                                        <i class="bx bxs-cart-add">Admit</i>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#enrollment-table').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
</body>

</html>