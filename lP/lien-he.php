<html>
    <head>
        <?php
        require_once ('./template/head.php');
        ?>
        <link href="css/conten-lien-he.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <nav class="container" id="header">
            <?php
            require_once ('./template/header.php');
            ?>
        </nav>
        <div class="container-fluid" id="slide">
            <?php
            $img='Short-Term-Thumbnail.jpg';
            $form = TRUE;
            require_once('./template/slide.php');
            ?>
        </div>
        <div class="container" id="content-lienhe">
            <?php
            require_once ('./template/content-lien-he.php');
            ?>
        </div>
        <div class="container" id="truyen-thong">
            <?php
            require_once ('./template/truyen-thong.php');
            ?>
        </div>
        <div class="container" id="bi-quyet">
            <?php
            require_once ('./template/bi-quyet.php');
            ?>
        </div>
        <div class="container text-right" style="margin-top: 30px;">
            <a href="#" style="text-decoration: none; color: #000; font-size: 18px;" id="go-topica-la-gi">
                <img src="img/icon-link.png" alt=""/>
                Tìm hiểu về chúng tôi
            </a>
        </div>
        <div class="container-fluid" id="footer">
            <?php
            require_once ('./template/footer.php');
            ?>
        </div>
    </body>
</html>