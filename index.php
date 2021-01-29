<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.79.0">
    <title>THE NA TH</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="./css/styme.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <?php
    include './components/navbar.php'
    ?>
    <main>
        <?php
        include './components/slide.php'
        ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <?php
                include './components/content.php'
                ?>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <?php
            include './components/footer.php'
            ?>
    </main>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>