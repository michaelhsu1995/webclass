<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>week2 class practice(CSS)</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .container {
            width: 200px;
            height: 400px;
            margin: 40px auto;
            background-color: rgb(184, 142, 59);
            border: 10px solid #d9ff00;
            position: relative;
            perspective: 1200px;
            transform-style: preserve3d;
        }
        .box {
            background-color: rgba(198, 198, 76, 0.7);
            width: 200px;
            height: 400px;
            transform-origin: 0px 0px 0px;
            transition: transform 2s;
            margin-bottom: 10px;
            position: relative;

        }
        .box:nth-child(1):hover {
            transform: rotate3D(0, 1, 0, 90deg)

        }

      /*  .box:nth-child(2):hover {
            transform: rotate3D(0, 1, 0, 90deg)
        }
*/
    </style>
</head>
<body>
<center>
<h1>做一點變化，既然是Door就要有開門的感覺呀！（本來想要打開門看到字，應該是要寫框固定）有機會再寫</h1></center>
<div class="container">我要高分
    <div class="box">芝麻開門</div>

</body>
</html>


<?php
