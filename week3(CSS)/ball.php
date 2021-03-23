<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <title>week2_ball</title>
    <style>
        .parent{
            position:relative;
            width: 260px;
            height: 260px;
            border: 10px solid #529b92;
        }
        .child{
            position: absolute;
            width: 0.5px;
            height: 255px;
            border: 2px solid rgb(255, 20, 40);
            right: 1px;
        }
  div {
        text-align: center;
        }
container {
    text-align:center;

margin: 100px;
}
.circle0, .circle1, .circle2, .circle3, .circle4, .circle5 {
border-radius: 50%;
height: 30px;
width: 30px;
margin: 10px;
}
.container:hover .circle0,
.container:hover .circle1,
.container:hover .circle2,
.container:hover .circle3,
.container:hover .circle4,
.container:hover .circle5 {
transform: translateX(200px);
}
.circle0 {
background: PaleTurquoise;
transition: all 1.5s linear;
}
.circle1 {
background: salmon;
transition: all 1.5s ease;
}
.circle2 {
background: lightskyblue;
transition: all 2.3s linear;
}
.circle3 {
background: rgb(238, 250, 135);
transition: all 2.0s ease-in;
}
.circle4 {
background: rgb(166, 135, 250);
transition: all 2.5s ease-in;
}
.circle5 {
background: rgb(148, 250, 135);
transition: all 3.0s ease-in;
}
.circle6 {
background: rgb(250, 135, 135);
transition: all 3.5s ease-in;
}


    </style>
</head>



<body>

<h1>ball賽跑(本來想弄個終點線，不過有點麻煩)，我的作法是寫一個匡，垂直線設定在邊界最右邊，效果就會有終點線的感覺</h1>
<div class="parent">
    <div class="child">終點線</div>

<table>
    <tr>
 <div class="container">
     <div class="circle0" style='border-right:2px solid #d00a0a'>1</div>

     <div class="circle1">2</div>
        <div class="circle2">3</div>
        <div class="circle3">4</div>
        <div class="circle4">5</div>
        <div class="circle5">6</div>
        </div>

        <!--<td style='border-right:10px solid #000000'>aa</td>
        <td>bb</td>!-->
    </tr>
</table>

</div>

</body>
</html>



<?php
?>

