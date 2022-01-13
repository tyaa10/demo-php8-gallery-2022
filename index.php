<?php
    require_once 'functions/main.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo PHP Gallery</title>
    <link rel="stylesheet" href="frontend/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <header class="col-12"></header>
        </div>
        <div class="row">
            <nav class="col-12 navbar navbar-expand-lg navbar-light bg-light">
                <?php include_once 'pages/menu.php' ?>
            </nav>
        </div>
        <div class="row">
            <section class="col-12">
                <?php
                    $page = $_GET['page'] ?: 1;
                    switch ($page) {
                        case 1:
                            include_once 'pages/home.php';
                            break;
                        case 2:
                        case 'upload':
                            include_once 'pages/upload.php';
                            break;
                        case 3:
                            include_once 'pages/gallery.php';
                            break;
                        case 4:
                            include_once 'pages/registration.php';
                            break;
                    }
                ?>
            </section>
        </div>
    </div>
    <script src="frontend/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="frontend/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>