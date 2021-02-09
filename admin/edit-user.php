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
    <?php
    include '../components/head/head.php'
    ?>
    <link rel="stylesheet" href="../css/style-navbar.css">
</head>

<body>
    <?php
    include '../components/navbar/navbaradmin.php'
    ?>
    <div class="container">
        <div class="">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ลำดับที่</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../db/connect.php';
                    $resuld = mysqli_query($con, "SELECT * FROM user WHERE Access='officer'");
                    $a = 1;

                    while ($row = mysqli_fetch_array($resuld)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $a ?></th>
                            <td><?php echo $row['Username']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Access']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <!-- ปุ่มแก้ไข -->
                                    <form action="" method="post">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editcaseeditcase<?php $a ?>">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="editcaseeditcase<?php $a ?>" tabindex="-1" aria-labelledby="editcaseeditcase<?php $a ?>Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editcaseeditcase<?php $a ?>Label">แก้ไขรายละเอียดคุณ <?php echo $a . $row['Username']; ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Username</p>
                                                        <input type="text" class="form-control" id="floatingInputValue" placeholder="" value="<?php echo $row['Username']; ?>">
                                                        <br>
                                                        <p>Password</p>
                                                        <input type="text" class="form-control" id="floatingInputValue" placeholder="" value="<?php echo $row['Password']; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- ปุ่มลบ -->
                                    <!-- Button trigger modal -->
                                    <form action="" method="post">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ลบบัญชีผู้ใช้</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>โปรดยืนยันการลบ คุณ <?php echo $row['Username'] ?></p> 
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</body>

</html>