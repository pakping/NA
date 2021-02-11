<?php
$content = "admin";
require "../auth/Sessionpersist.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>จัดการบัญชี</title>
    <meta charset="utf-8">
    <META NAME="robots" CONTENT="noindex,onfollow">
    <link rel="icon" href="../img/logo.png" type="image/gif" sizes="16x16">
    <?php
    include '../components/head/head.php'
    ?>
    <link rel="stylesheet" href="../css/style-navbar.css">
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />

</head>

<body>
    <?php
    include '../components/navbar/navbaradmin.php'
    ?>
    <div class="container">
        <div >
            <br>
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">ลำดับที่</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../db/connect.php';
                    $resuld = mysqli_query($con, "SELECT * FROM user WHERE Access='user'");
                    $a = 1;

                    while ($row = mysqli_fetch_array($resuld)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $a ?></th>
                            <td><?php echo $row['Username']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <!-- ปุ่มลบ -->
                                    <form action="../function/deluser.php" method="post">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <input type="hidden" name='user' value="<?php echo $row['Username']; ?>">
                                    </form>


                                </div>
                            </td>
                        </tr>
                    <?php
                        $a += 1;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    <div class="visually-hidden">
        <?php
        include('../components/footer.php');
        ?>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
</body>

</html>