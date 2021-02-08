<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The Na Thailand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../admin/admin-index.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/admin-library.php">จัดการรูปภาพ-วีดิโอ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/register.php">สร้างบัญชีใหม่</a>
        </li>
      </ul>
      <?php ?>
      <ul class="navbar-nav ml-auto">
        <form action="../auth/logout.php" method="post">
          <button class="btn" type="submit">ออกจากระบบ</button>
        </form>
      </ul>
    </div>
  </div>
</nav>