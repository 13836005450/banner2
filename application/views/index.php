<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>网站导航页</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <?php
        if($data[10]->url){
            ?>
            <div class="menu">
                <a href="<?php echo $data[10]->url?>" id="menu" target="_blank"><img class="menu-img" src="assets/images/<?php echo $data[10]->img?>" alt="menu"></a>
            </div>
            <?php
        }
    ?>
    <ul class="banners">
        <?php
        if($data[0]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[0]->url?>" id="banner1" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[0]->img?>" alt="banner1"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[1]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[1]->url?>" id="banner2" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[1]->img?>" alt="banner2"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[2]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[2]->url?>" id="banner3" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[2]->img?>" alt="banner3"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[3]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[3]->url?>" id="banner4" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[3]->img?>" alt="banner4"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[4]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[4]->url?>" id="banner5" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[4]->img?>" alt="banner5"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[5]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[5]->url?>" id="banner6" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[5]->img?>" alt="banner6"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[6]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[6]->url?>" id="banner7" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[6]->img?>" alt="banner7"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[7]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[7]->url?>" id="banner8" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[7]->img?>" alt="banner8"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[8]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[8]->url?>" id="banner9" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[8]->img?>" alt="banner9"></a>
            </li>
            <?php
        }
        ?>

        <?php
        if($data[9]->url){
            ?>
            <li class="banner">
                <a href="<?php echo $data[9]->url?>" id="banner10" target="_blank"><img class="banner-img" src="assets/images/<?php echo $data[9]->img?>" alt="banner10"></a>
            </li>
            <?php
        }
        ?>
    </ul>
    <div class="footer">
        <div class="traffic">联系方式：<span id="tel"><?php echo $data[11]->url?></span> &nbsp;|&nbsp;&nbsp;访问量：<span id="traffic"><?php echo $traffic->traffic?></span></div>
    </div>
</div>
</body>
</html>