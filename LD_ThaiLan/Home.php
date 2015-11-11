<?php require_once './template/active_menu.php' ?>
<html>
    <head>
        <?php require_once './template/head.php'; ?>
        <script src="js/bootstrap-filestyle.js" type="text/javascript"></script>
        <script src="js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <link href="css/slide.css" rel="stylesheet" type="text/css"/>
        <script src="js/slide_bao_chi.js" type="text/javascript"></script>
        <script src="js/slide.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div id="wrapper">
            <!--header-->
            <?php require_once './template/header.php'; ?>
            <!--slide-->
            <?php require_once './template/home-slide.php' ?>
            <!--text-breath-->
            <?php require_once './template/text-breath.php'; ?>
            <!--content-->
            <?php require_once './template/home-content.php'; ?>
            <!--extra info-->
            <?php require_once './template/extra-info.php'; ?>
            <!--footer-->
            <?php require_once './template/footer.php'; ?>
        </div>
        <script type="text/javascript">
            
        </script>
    </body>
</html>

