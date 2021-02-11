<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">&ensp;
  <img src="https://www.thenathailand.com/wp-content/uploads/2020/11/Nathailand-120x64-1.png" alt="" width="80" height="40">
    <a class="navbar-brand" href="#">
    &emsp;&ensp;The Na Thailand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="home.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="link-primary" href="library.php">สินค้าของเรา</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">เกี่ยวกับเรา</a>
        </li>
      </ul>
      <?php
      if (isset($_SESSION['Username'])){
      ?>
      <ul class="navbar-nav ml-auto">
        <form action="../auth/logout.php" method="post">
          <button class="btn" type="submit">ออกจากระบบ</button>
        </form>
      </ul>
<?php  } else {?>
      <ul class="navbar-nav ml-auto">
        <a href="../app/login.php"><button class="btn">เข้าสู่ระบบ</button></a>
      </ul>
      <?php } ?>
    </div>
  </div>
</nav>
