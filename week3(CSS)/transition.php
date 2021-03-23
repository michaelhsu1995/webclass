<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <title>week2_boxborder</title>
    <style>

        .droplet {
            background: #cdb366;
            border-radius: 2% 50%;
            height: 100px;
            margin: 100px;
            transition: all 3s ease-in-out;
            width: 100px;
        }
        .droplet:hover {
            transform:rotate(1080deg);}

        .box {
            border-style: 1px solid #ff0000;
            width: 100px;
            height: 100px;
            background-color: #0000FF;
            transition: width 2s, height 2s, background-color
            2s, transform 2s;
        }
        .box:hover {
            background-color: #FFCCCC;
            width: 200px;
            height: 200px;
            transform: rotate(180deg);

        }
        div {
            transition-property: opacity, left, top, height;
            transition-duration: 3s, 5s, 3s, 5s;
        }


    </style>
</head>



<body>

<h1>Transition</h1>

<div class="droplet">
    <div class="droplet:hover">可以轉圈圈</div>
</div>

<div class="box">
    <div class="box:hover">可以轉圈圈</div>
</div>
</body>
</html>
<?php
?>




<?php
?>






<?php
?>


<?php

