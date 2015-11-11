<html>
    <head>
        <?php
        require_once('./template/head.php');
        ?>
        <link href="css/home.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <nav id="header" class="container">
            <?php
            require_once('./template/header.php');
            ?>    
        </nav>
        
        <div id="slide" class="container-fluid">
            <?php
            $img = ["Banner Luyện Nói.png", 'Tăng 300 điểm nói.png', 'Tiếng Anh Khủng.png', 'uy tin quoc te.jpg'];
            $form = TRUE;
            require_once('./template/slide.php');
            ?> 
        </div>
        
        <div id="content" class="container">
            <?php require_once('./template/content-home.php'); ?>
        </div>
        
        <div id="after-content" class="container-fluid">
            <?php require_once('./template/after-content-home.php'); ?>
        </div>
        
        <div id="truyen-thong" class="container">
            <?php require_once('./template/truyen-thong.php'); ?>
        </div>
        
        <div id="bi-quyet" class="container">
            <?php require_once('./template/bi-quyet.php'); ?>
        </div>
        
        <div class="container text-right" style="margin-top: 30px;">
            <a href="lien-he.php" style="text-decoration: none; color: #000; font-size: 18px;" id="go-topica-la-gi" class="see-more">
                <img src="img/icon-link.png" alt=""/>
                Tìm hiểu về chúng tôi
            </a>
        </div>
        
        <div id="footer" class="container-fluid">
            <?php require_once('./template/footer.php'); ?>
        </div>
    </body>
</html>