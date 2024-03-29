<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bar</title>
    <style>

 .navigation{
     display: flex;
     flex-flow: row wrap;
     justify-content: flex-end;
     list-style: none;
     margin: 0;
     background: #3ce6fc;
 }
 .navigation a {
     text-decoration: none;
     display: block;
     padding: 1em;
     color: white;
 }
 .navigation a:hover {
     background: #1565C0;
 }
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

<ul class="navigation">
    <li><a href="#home">首頁</a></li>
    <li><a href="#about">關於我</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">泰陽眼鏡股份有限公司</a>
        <div class="dropdown-content">
            <a href="#">醫療口罩</a>
            <a href="#">N95口罩</a>
            <a href="#">3D口罩</a>

        </div>

    </li>




</ul>


</body>
</html>






<?php
?>