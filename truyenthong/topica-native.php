<html>
    <head>
        <?php
        require_once('./template/head.php');
        ?>
        <link href="css/topica-native.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <nav id="header" class="container">
            <?php
            require_once('./template/header.php');
            ?>    
        </nav>
        
        <div id="slide" class="container-fluid">
            <?php
            $img = "THUYEN VUOT DAI DUONG.png";
            require_once('./template/slide.php');
            ?> 
        </div>
        
        <div id="content" class="container-fluid">
            <?php
            $id = isset($_GET['id']) ? $_GET['id'] : FALSE;
            if ($id && file_exists('./about/' . $id . '.php')) {
                $required = './about/' . $id . '.php';
            } else {
                $required = './about/index.php';
            }
            require_once($required);
            ?>
        </div>
        
        <div id="truyen-thong" class="container">
            <?php require_once('./template/truyen-thong-2.php'); ?>
        </div>
        
        <div id="footer" class="container-fluid">
            <?php require_once('./template/footer.php'); ?>
        </div>
    </body>
</html>