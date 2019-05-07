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
    <div class="menu">
        <a href="#" id="menu" target="_blank"><img class="menu-img" src="assets/images/menu.jpg" alt=""></a>
    </div>
    <ul class="banners">
        <li class="banner">
            <a href="#" id="banner1" target="_blank"><img class="banner-img" src="assets/images/banner1.jpg" alt=""></a>
        </li>
        <li class="banner">
            <a href="#" id="banner2" target="_blank"><img class="banner-img" src="assets/images/banner2.jpg" alt=""></a>
        </li>
        <li class="banner">
            <a href="#" id="banner3" target="_blank"><img class="banner-img" src="assets/images/banner3.jpg" alt=""></a>
        </li>
        <li class="banner">
            <a href="#" id="banner4" target="_blank"><img class="banner-img" src="assets/images/banner4.jpg" alt=""></a>
        </li>
    </ul>
    <div class="footer">
        <div class="traffic">联系方式：<span id="tel"></span> &nbsp;|&nbsp;&nbsp;访问量：<span id="traffic"></span></div>
    </div>
</div>
</body>
</html>