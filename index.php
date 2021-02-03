 <!-- Check Sessionpersist
===================================================================================================-->
<?php
include 'auth/Sessionpersist.php';
?>
<!--END  Check Sessionpersist
===================================================================================================-->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags
===================================================================================================-->
    <title>The Na Thailand</title>
    <meta charset="utf-8">
    <META NAME="keywords" CONTENT="The Na Thailand">
    <META NAME="description" CONTENT="สินค้าดูแลสุขภาพและความงาม จากผู้เชี่ยวชาญ">

    <!-- END Required meta tags
===================================================================================================-->
<?php
    include 'components/head/head.php'
    ?>
</head>

<body>

    <!-- Navbar
 ===================================================================================================-->
    <?php
    include 'components/navbar/navbar.php'
    ?>
    <!--END  Navbar
===================================================================================================-->

    <!-- Header photo 
===================================================================================================-->

    <?php
    include 'components/header.php'
    ?>
    <!-- END Header photo
===================================================================================================-->

    <br>
    <!-- Page Content
===================================================================================================-->
    <div class="container">

        <div class="card border-0 shadow my-5">

            <div class="card-body p-5">

                <section class="py-5">
                    <div class="container">
                        <h5 class="display-4">-- ช่องทางการติดต่อ --</h5>
                        <p class="lead"> <a href="https://www.facebook.com/chititpat.Sripoot">faebook-pakping</a> <a href="https://www.facebook.com/jeerachon9/">facebook-G</a>
                            <a href="https://www.facebook.com/profile.php?id=100002182427958">facebook-big</a>
                        </p>
                    </div>
                </section>

                <!-- end crad body -->
            </div>
            <!-- end card shadow  -->
        </div>
        <!-- end container -->
    </div>
    <!--END Page Content
===================================================================================================-->


    <!-- Pagae content-photo-library
===================================================================================================-->
<?php
  include 'components/content/content.php'
  ?>
    <!--END  Pagae content-photo-library
===================================================================================================-->

    <!-- start footer 
===================================================================================================-->
<?php
  include 'components/footer.php'
  ?>
    <!--END start footer 
===================================================================================================-->
</body>

</html>