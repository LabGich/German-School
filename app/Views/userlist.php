<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foreign Language College Mombasa - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap5.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css'>
 <?php include 'css.php' ?>

</head>

<body class="login-img3-body col-12">
     <!-- ======= Header ======= -->
 <?php include 'header.php' ?>
  
    <div class="row mt-3" style="background: aliceblue;margin-top: 100px !important;">
        <div class=" col-12" style="margin-left:auto; margin-right:auto; padding:50px;">
            <table id="tabledata" class="table table-bordered table-hover" style="margin-left:auto; margin-right:auto; ">
                 <thead>
                    <tr>                       
                        <th>Full Name</th>
                        <th>Username</th>                        
                        <th>Phone Number</th>
                        <th>User Type</th>
                        <th>Date Submitted</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($users as $row){ ?>
                        <tr>                            
                            <td><?php echo $row['FIRSTNAME']." ".$row['LASTNAME'] ?></td>
                            <td><?php echo $row['EMAIL'] ?></td>
                            <td><?php echo $row['PHONENUM'] ?></td>
                            <td><?php echo $row['USERTYPE'] ?></td>
                            <td><?php echo $row['DATE'] ?></td>
                           <td>
                                <a href="/GetUser?ID=<?= $row['USERID']; ?>" title="Edit <?= $row['USERID']; ?>" data-toggle="modal" data-target="#edit-user-modal">
                                    <button type="button" class="btn btn-info btn-circle btn-xs">
                                        <i class="bx bxs-bullseye">View</i>
                                    </button>
                                </a>
                                <a href="javascript:void(0)" onclick="deleteuser('<?= $row['USERID']; ?>')" title="Edit <?= $row['USERID']; ?>" data-toggle="modal" data-target="#edit-user-modal">
                                    <button type="button" class="btn btn-info btn-circle btn-xs">
                                        <i class="bx bxs-trash">Delete</i>
                                    </button>
                                </a>

                            </td>
                        </tr>


                    <?php     }    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- edit user details modal -->
<div class="modal fade" id="edit-user-modal" style="display: none; width:80%; margin-left:auto; margin-right:auto;" aria-hidden="true">
    <div class="modal-dialog-center  modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal" id="modalClose" data-target="#edit-user-modal" aria-label="Close">
                    x
                </a>
            </div>
            <div class="modal-body">
                <div id="user-edit-content"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="modalClose2" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.edit user details modal -->
  <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>    
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>    
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>    
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>    
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>    
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>    
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script>
        function getUserDetails(ID) {

        $.ajax({
            method: "get",
            url: "/GetUser",
            data: {
                ID: ID,
            },
            success: function(response) {
                $('#edit-user-modal').removeClass('fade');
                $("#user-edit-content").html(response);
            },
        });
    }
       $(document).ready(function() {
        var table = $('#tabledata').DataTable( {
            responsive: true,
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );
        table.buttons().container()
            .appendTo( '#tabledata_wrapper .col-md-6:eq(0)' );
    } );
    </script>
</body>

</html>