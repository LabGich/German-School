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
            <table id="users-table" class="table table-bordered table-hover" style="margin-left:auto; margin-right:auto; ">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Phone Number</th>
                        <th>User Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($users as $row){ ?>
                        <tr>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><?php echo $row['lastname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['location'] ?></td>
                            <td><?php echo $row['phonenum'] ?></td>
                            <td><?php echo $row['usertype'] ?></td>
                           <td>
                                <a href="javascript:void(0)" onclick="getUserDetails('<?= $row['ID']; ?>')" title="Edit <?= $row['ID']; ?>" data-toggle="modal" data-target="#edit-user-modal">
                                    <button type="button" class="btn btn-info btn-circle btn-xs">
                                        <i class="bx bxs-bullseye">View</i>
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
            var table = $('#users-table').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
</body>

</html>