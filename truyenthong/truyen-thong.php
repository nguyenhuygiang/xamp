<html>
    <head>
        <?php
        require_once('./template/head.php');
        ?>
        <link href="css/truyen-thong.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <nav id="header" class="container">
            <?php
            require_once('./template/header.php');
            ?>    
        </nav>

        <div id="slide" class="container-fluid">
            <?php
            $img = "Thuyền vượt đại dương.png";
            require_once('./template/slide.php');
            ?> 
        </div>

        <div id="content" class="container-fluid">
            <?php
            $id = isset($_GET['id']) ? $_GET['id'] : FALSE;
            if ($id && file_exists('./about/truyen-thong/' . $id . '.php')) {
                $required = './about/truyen-thong/' . $id . '.php';
            } else {
                $required = './about/truyen-thong/index.php';
            }
            require_once($required);
            ?>
        </div>

        
        <div class="container text-right" style="margin-top: 30px;">
            <a href="lien-he.php" style="text-decoration: none; color: #000; font-size: 18px;" id="go-topica-la-gi" class="see-more">
                <img src="img/icon-link.png" alt="" style="    margin-bottom: 4px;"/>
                Tìm hiểu về chúng tôi
            </a>
        </div>

        <div id="footer" class="container-fluid">
            <?php require_once('./template/footer.php'); ?>
        </div>
    </body>
</html>