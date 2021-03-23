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
        #stage{ margin: 1em auto;
            perspective: 1200px;
        }
        #spinner{
            animation-name: spinner;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 6s;
        }
        @keyframes spinner {
            from {
                transform: rotateY(0deg);
            }
            to {
                transform: rotateY(-360deg);
            }
        }
        #spinner:hover {
            animation-play-state: paused;
        }

    </style>
</head>



<body>
<div id="stage" style="background: rgba(0,0,0,0.5);">
    <p id="spinner" style="background: rgba(109,
186, 62, 0.5); text-align: center; color: #fff;">Stop, I'm
        getting dizzy!</p>
</div>


</body>
</html>
<?php
?>




<?php
?>






<?php
?>
