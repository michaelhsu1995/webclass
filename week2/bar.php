<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <title>week2_circle</title>
    <style>

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: #00ffa6;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>


<body>
<h1>我在看上課講義覺得截圖很眼熟，結果是w3school.com，懷念
    Horizontal Navigation Bar
</h1>

<ul>
    <li><a href="#home">首頁</a></li>
    <li><a href="#news">彰師大超猛</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">點看看啊</a>
        <div class="dropdown-content">
            <a href="#">資管碩一</a>
            <a href="#">資管碩二</a>
            <a href="#">論文寫起來</a>
        </div>
    </li>
</ul>

<h3>系統測試，雖然我平常不會這樣寫</h3>
<p>這方法不賴</p>


</body>
</html>
<?php
?>






<?php


?>