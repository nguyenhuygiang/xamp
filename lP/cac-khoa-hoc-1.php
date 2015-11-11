<html>
    <head>
        <?php
        require_once ('./template/head.php');
        ?>
        <link href="css/cac-khoa-hoc1.css" rel="stylesheet" type="text/css"/>
    <body>
        <nav id="header" class="container">
            <?php
            require_once('./template/header.php');
            ?>    
        </nav>
        <div id="slide" class="container-fluid">
            <?php
            $img = "Short-Term-Thumbnail.jpg";
            $form = TRUE;
            require_once('./template/slide.php');
            ?> 
        </div>
        <div id='conten-cac-khoa-hoc' class="container-fluid">
            <div class="row">
                
            </div>
            <?php
            require_once ('./template/cac-khoa-hoc1.php');
            ?>
        </div>
        <div id="truyen-thong" class="container">
            <?php require_once('./template/truyen-thong.php'); ?>
        </div>

        <div id="bi-quyet" class="container">
            <?php require_once('./template/bi-quyet.php'); ?>
        </div>

        <div class="container text-right" style="margin-top: 30px;">
            <a href="#" style="text-decoration: none; color: #000; font-size: 18px;" id="go-topica-la-gi">
                <img src="img/icon-link.png" alt=""/>
                Tìm hiểu về chúng tôi
            </a>
        </div>

        <div id="footer" class="container-fluid">
            <?php require_once('./template/footer.php'); ?>
        </div>
    </body>
</head>
</html>

