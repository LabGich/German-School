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
                                <a href="javascript:void(0)" onclick="getUserDetails('<?= $row['username']; ?>')" title="Edit <?= $row['username']; ?>" data-toggle="modal" data-target="#edit-user-modal">
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