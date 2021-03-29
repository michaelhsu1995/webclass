<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bar</title>

</head>
<body>
<ul class="container">
    <li class="item">home</li>
    <li class="item">potofolio</li>
    <li class="item">contact</li>
    <li class="item">about</li>

</ul>
<button id="submit">請按我！！！</button>
<div id="info" style="background-color: #0e5077">HELLO</div>
<script>
    var menu=['home','potofolio','contact ','about'];
    var s = `<div> <h6> ${menu[1]} </h6> </div>`;
    var info = document.getElementById("info");
    info.innerHTML=s;

    var me = document.querySelector("#submit");
    me.addEventListener('click',(e)=>{
        alert("hello world");
        alert("您好！！");
        var person= {
            age: 25,
            name: 'michael',
            gender: "male",
            fullname: function () {
                return this.name + "test";

            }
        }
        for(key in person){
            alert(key+"."+person[key]);
        }

    });
    console.log(me);

</script>

</body>
</html>



<?php
?>
