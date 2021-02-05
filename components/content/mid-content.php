<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo $img['path']; ?>" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <p><?php echo $img['Tag']; ?></p>
            </h4>
            <form action='item.php' method="POST">
                <input type='hidden' name='directory' value=" <?php echo $img["Tag"] ?>" />
                <button type="submit" class="btn btn-outline-primary btn-auto btn-block">More</button>
            </form>
        </div>
    </div>
</div>