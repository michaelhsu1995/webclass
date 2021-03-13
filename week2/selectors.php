<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <title>week2_selectors</title>
<style>
    div {
        text-align: center;
    }
    .header,
    .footer {
        width: 300px;
        height: 60px;
        background-color: rgb(97, 33, 3);
    }
    .article {
        width: 300px;
        height: 400px;
        background-color: rgb(141, 211, 60);
    }
    .nav {
        width: 300px;
        height: 40px;
        background-color: rgb(39, 111, 111);
    }
    .left,.right {
        display: inline-block;
        width: 145px;
        height: 200px;
        background-color: #7f90ff;
    }
    .bottom {
        width: 300px;
        height: 200px;
        background-color: rgb(182, 134, 138);
    }


</style>
</head>
<body>
<div class="header"> top</div>
<div class="nav">feild</div>
<div class="article">This is a Test!
    <div class="top">
        <div class="left">
            left
        </div>
        <div class="right">right</div>
    </div>
    <div class="bottom">
        click
    </div><!--裡面就可以有多種變化，可以寫個select連結database!-->
</div>
<div class="footer">
    <font size="5">    footer Test  <!--做一點變化把字體變大!-->

    </font>
</div>

</body>
</html>


<?php

?>

