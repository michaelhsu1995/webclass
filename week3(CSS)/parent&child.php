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
        .parent{
            position:relative;
            width: 500px;
            height: 500px;
            border: 30px solid deeppink;
        }

        .child{
            position: absolute;
            width: 200px;
            height: 200px;
            border: 2px solid rgb(28, 20, 255);
            top:20px;
            right:80px;


        }

        .child:nth-child(1){
            position: absolute;
            width: 100px;
            height: 150px;
            border: 3px solid #9df39f;
            left: 100px;
            bottom: 50px;
        }


    </style>
</head>



<body>

<h1> 框框裡面來有小框框</h1>
<div class="parent">
    <div class="child"></div>
    <div class="child"></div>

</div>

</body>
</html>
<?php
?>




<?php
?>






<?php
?>