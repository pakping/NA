<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card card-1">
        <div class="card-body text-center ">
            <button class="btn boximg" style="width: 100%; " data-bs-toggle="modal" data-bs-target="#file1">
                <ion-icon name="document-outline" size="large"></ion-icon><br> เพิ่มไฟล์สินค้า
            </button>
            <!-- Modal -->
            <div class="modal fade" id="file1" tabindex="-1" aria-labelledby="file1Label" aria-hidden="true">
                <form action="../Function/upload.php" method="post" enctype="multipart/form-data">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="file1Label">สร้างไฟล์ใหม่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="newtitle" placeholder=" namephoto" required>
                                    <label for="floatingInput">ชื่อรูปภาพ</label>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" name="file_img" class="form-control" id="inputGroupFile02" name="file_img" multiple accept="image/*,video/*" required>
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                <button type="submit" class="btn btn-primary">เพิ่มไฟล์สินค้า</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
