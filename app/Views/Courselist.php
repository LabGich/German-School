<?php 
use Config\Database;
use CodeIgniter\Database\BaseConnection;
?>
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

                        <th>Id</th>
                        <th>Instructor Email</th>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($courses as $row) { ?>
                        <tr>

                            <td><?php echo $row['ID'] ?></td>
                            <?php 
                            $USERID = $row['USERID'];
                            $db = Database::connect();
                            $query = $db->query("SELECT * FROM flcUSERS where USERID = '$USERID'");
                            // $query = $db->query("SELECT * FROM flcusers ");
                            $result = $query->getResultArray();
                            foreach ($result as $EMAIL){
                                $email = $EMAIL['EMAIL'];
                            }
                            ?>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $row['COURSE'] ?></td>
                        </tr>


                    <?php     }    ?>
                </tbody>
            </table>
        </div>
    </div>
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
        function deleteenrollment(ID) {

            $.ajax({
                method: "get",
                url: "/public/DeleteEnrollment",
                data: {
                    ID: ID,
                },
                success: function(response) {
                    window.location.reload();
                },
            });
        }
        $(document).ready(function() {
            var table = $('#tabledata').DataTable({
                responsive: true,
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });
            table.buttons().container()
                .appendTo('#tabledata_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>