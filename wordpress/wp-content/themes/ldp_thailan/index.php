<html>
    <head>
        <meta charset="utf-8" />
        <title><?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="<?php echo bloginfo('template_directory') . '/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo bloginfo('template_directory') . '/css/styles.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo bloginfo('template_directory') . '/css/slide.css'?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo bloginfo('template_directory') . '/js/jquery-1.11.3.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo bloginfo('template_directory') . '/js/bootstrap.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo bloginfo('template_directory') . '/js/slide.js'?>" type="text/javascript"></script>
    </head>
    <body>
        <!--header-->
        <div id="header" class="container-fluid bg-red">
            <div class="row ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 mr-30">
                            <a href="<?php bloginfo('home'); ?>"><img src="<?php echo bloginfo('template_directory') . '/img/LOGO.png'?>" alt="" class="full-width"/></a>
                        </div>
                        <div class="col-md-7 col-md-offset-2 mr-30">
                            <ul class="row">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">WHY US</a></li>
                                <li><a href="#">OUR TERM</a></li>
                                <li><a href="#">LEARN METHOD</a></li>
                                <li><a href="#">PACKAGE</a></li>
                                <li><a href="#">REGISTER</a></li>
                                <li><a href="#">ABOUT US</a></li>
                               <!--  <?php wp_list_categories('title_li=') ?> -->
                            </ul>
                        </div>
                        <div class="row">
                            <p class="synbol">
                                <img src="<?php echo bloginfo('template_directory') . '/img/uk-language.png '?>" alt="" class="width-20" style="margin-right: 5px;"/>
                                <img src="<?php echo bloginfo('template_directory') . '/img/thailand_flag_16.png'?>" alt="" class="width-20"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slide-->
        <div class="container-fluid height" id="slide">
            <div class="row ">
                <div class="<slide-image'?>"><img src="<?php echo bloginfo('template_directory') . '/img/Slide1.png'?>" class=" full-width height"></div>
                <div class="<slide-image'?>"><img src="<?php echo bloginfo('template_directory') . '/img/Slide2.png'?>" alt="" class="full-width height"/></div>
                <div class="<slide-image'?>"><img src="<?php echo bloginfo('template_directory') . '/img/slide3.png'?>" alt="" class="full-width height"/></div>
            </div>
            <div class="row">
                <div class="slide-pager">
                    <ul class="pager-container"></ul>
                    <div class="slide-control-prev"></div>
                    <div class="slide-control-next"></div>
                </div>
            </div>
            <!--form-->
            <div id="form" class="col-md-3">
                <form class="form-horizontal" role="form">
                    <div class="text-center" style="color: white">
                        <h3>REGISTER</h3>
                        <p>*for receive instructions</p>
                    </div>
                    <div class="form-group">
                        <div class="full-width mr-top-15">
                            <input type="text" class="form-control" id="email" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="full-width mr-top-15"> 
                            <input type="text" class="form-control" id="pwd" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="full-width mr-top-15"> 
                            <input type="text" class="form-control" id="pwd" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group "> 
                        <div class="full-width mr-top-15">
                            <button type="submit" class="btn-form btn-default-form">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--tiep theo-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center margin-20">
                    <h3 class="color-red size-super-lg bold">TOPICA NATIVE</h3>
                    <p class="size-supper-normal">With a notebook connected to the Internet, you can
                        study English whenever and wherever possible.</p>
                </div>
            </div>
        </div>
        <!--content-->
        <div class="container text-justify">
            <div class="row">
                <div class="col-md-4" >
                    <img src="<?php echo bloginfo('template_directory') . '/img/Picture.png'?>" alt="" class="full-width"/>
                    <p class="mr-20">
                        <a href="#"class="color-red italic">Practice English online everytime, everywhere  without worries about traffic jam <img src="<?php echo bloginfo('template_directory') . '/img/link.png'?>" alt="" class="link"/></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo bloginfo('template_directory') . '/img/Picture1.png'?>" alt=""class="full-width"/>
                    <p class="mr-20">
                        <a href="#"class="color-red italic">Pratice English up to 16 hours per day as much as you want <img src="<?php echo bloginfo('template_directory') . '/img/link.png'?>" alt="" class="link"/></a>                        
                    </p>
                </div>
                <div class="col-md-4"><img src="<?php echo bloginfo('template_directory') . '/img/Picture2.png'?>" alt="" class="full-width"/>
                    <p class="mr-20">
                        <a href="#"class="color-red italic">Each leaner has an individual learning plan, join in classes right after registration <img src="<?php echo bloginfo('template_directory') . '/img/link.png'?>" alt="" class="link"/></a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo bloginfo('template_directory') . '/img/Picture3.png'?>" alt="" class="full-width"/>
                    <p class="mr-20">
                        <a href="#"class="color-red italic">Each learner has their own advisor<br/> <img src="<?php echo bloginfo('template_directory') . '/img/link.png'?>" alt="" class="link"/></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo bloginfo('template_directory') . '/img/Picture4.png'?>" alt="" class="full-width"/>
                    <p class="mr-20">
                        <a href="#"class="color-red italic">Learn English with more than 200 teachers  from Europe, Australia, USA with different accents <img src="<?php echo bloginfo('template_directory') . '/img/link.png'?>" alt="" class="link"/></a>                      
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo bloginfo('template_directory') . '/img/Picture5.png'?>" alt="" class="full-width"/>
                    <p class="mr-20">
                        <a href="#"class="color-red italic">Evaluation System of English by computer<br/> <img src="<?php echo bloginfo('template_directory') . '/img/link.png'?>" alt=""  class="link"/></a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!--tiep theo-->
        <div class="container margin-45">
            <div class="row">
                <img src="<?php echo bloginfo('template_directory') . '/img/Extra Info.png'?>" alt="" class="full-width"/>
            </div>
        </div>
        <!--footer-->
        <div id="footer" class="container-fluid">
            <div class="row bg-red">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 margin-20">
                            <p class="bold">Contact us</p>
                            <p><img src="<?php echo bloginfo('template_directory') . '/img/new48.png'?>" alt="" class="width-20"/> Hotline:0999 100 045</p> 
                            <p><img src="<?php echo bloginfo('template_directory') . '/img/telephone34.png'?>" alt="" class="width-20"/> Email:native@topica.asia</p> 
                            <p>? FAQ</p>
                        </div>
                        <div class="col-md-5 col-md-offset-1 margin-20 ">
                            <p class="bold"> Address</p>
                            <p>Office 21 - Elite Office Co., Ltd. / 2 Ploenchit Center,</p>  
                            <p> G Floor, Sukhumvit Road, Klongtoey, Bangkok </p>
                        </div>
                        <div class="col-md-2 col-md-offset-1 margin-20 ">
                            <p class="bold">
                                Follow us<br/>
                            </p>
                            <p><a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/facebook29.png'?>" alt="" class="width-20"/></a>
                                <a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/Line_logo.png'?>" alt="" class="width-20"/></a></p>
                            <div class="text-right"><button type="button" class="btn btn-default btn-md">R E G I S T E R</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  bg-red border-while">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 margin-20">
                            <img src="<?php echo bloginfo('template_directory') . '/img/LOGO.png'?>" alt="" class="full-width"/>
                        </div>
                        <div class="col-md-5 col-md-offset-4 margin-20">
                            <p class="mr-top-20 text-right"> © Copyright 2014 Topica Native. All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
