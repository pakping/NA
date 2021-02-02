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

    <!-- mobile specific metas
===================================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--END mobile specific metas
===================================================================================================-->

    <!-- Bootstrap CSS
===================================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- END Bootstrap CSS
 ===================================================================================================-->


    <!-- CSS STYLE ME
===================================================================================================-->
    <link rel="stylesheet" href="css/style.css">
    <!--END  CSS STYLE ME
===================================================================================================-->

</head>

<body>

    <!-- Navbar
 ===================================================================================================-->
    <?php
    include('components/navbar.php');
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
    include 'components/content.php'
    ?>
    <!--END  Pagae content-photo-library
===================================================================================================-->

    <!-- start footer 
===================================================================================================-->
    <?php
    include('./components/footer.php')
    ?>
    <!--END start footer 
===================================================================================================-->
</body>

</html>