<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>网址更换</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/main2.css">
</head>
<body>
    <div class="container">
        <h2>网址更换系统</h2>
        <div class="website-setting">
            <form action="admin/updateUri" method="post" enctype="multipart/form-data">
                <p>
                    menu：&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="menu" type="text" name="menu" value="<?php echo $data[10]->url?>">
                    <input type="file" name="menu-img">
                </p>
                <p>
                    banner1：
                    <input type="text" id="banner1" name="banner1" value="<?php echo $data[0]->url?>">
                    <input type="file" name="banner1-img">
                </p>
                <p>
                    banner2：
                    <input type="text" id="banner2" name="banner2" value="<?php echo $data[1]->url?>">
                    <input type="file" name="banner2-img">
                </p>
                <p>
                    banner3：
                    <input type="text" id="banner3" name="banner3" value="<?php echo $data[2]->url?>">
                    <input type="file" name="banner3-img">
                </p>
                <p>
                    banner4：
                    <input type="text" id="banner4" name="banner4" value="<?php echo $data[3]->url?>">
                    <input type="file" name="banner4-img">
                </p>
                <p>
                    banner5：
                    <input type="text" id="banner5" name="banner5" value="<?php echo $data[4]->url?>">
                    <input type="file" name="banner5-img">
                </p>
                <p>
                    banner6：
                    <input type="text" id="banner6" name="banner6" value="<?php echo $data[5]->url?>">
                    <input type="file" name="banner6-img">
                </p>
                <p>
                    banner7：
                    <input type="text" id="banner7" name="banner7" value="<?php echo $data[6]->url?>">
                    <input type="file" name="banner7-img">
                </p>
                <p>
                    banner8：
                    <input type="text" id="banner8" name="banner8" value="<?php echo $data[7]->url?>">
                    <input type="file" name="banner8-img">
                </p>
                <p>
                    banner9：
                    <input type="text" id="banner9" name="banner9" value="<?php echo $data[8]->url?>">
                    <input type="file" name="banner9-img">
                </p>
                <p>
                    banner10：
                    <input type="text" id="banner10" name="banner10" value="<?php echo $data[9]->url?>">
                    <input type="file" name="banner10-img">
                </p>
       
                <p>电话：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="tel" name="tel" value="<?php echo $data[11]->url?>"></p>
                <input type="submit" value="提交">
            </form>
        </div>
        <div class="traffic">当前访问量 <span class="num"><?php echo $traffic->traffic;?></span> </div>
    </div>

</body>
</html>