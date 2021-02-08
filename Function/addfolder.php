<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card card-1">
        <div class="card-body text-center ">
            <button class="btn boximg" style="width: 100%; " data-bs-toggle="modal" data-bs-target="#folder1">
                <ion-icon name="folder-outline" size="large"></ion-icon><br>เพิ่มโฟรเดอร์
            </button>
            <!-- Modal -->
            <div class="modal fade" id="folder1" tabindex="-1" aria-labelledby="folder1Label" aria-hidden="true">
                <form action="../Function/makefolder.php" method="post" enctype="multipart/form-data">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="folder1Label">สร้างโฟลเดอร์ใหม่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="dir" placeholder=" namephoto" required>
                                    <label for="floatingInput">กรอกชื่อโฟลเดอร์</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                <button type="submit" class="btn btn-primary">สร้างโฟลเดอร์ใหม่</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>