<?php 
if(isset($_COOKIE['bgcolor'])){
    $bgcolor = $_COOKIE['bgcolor'];
}else{
    $bgcolor = "black";
    $color = "white";
}

if(isset($_COOKIE['fontsize'])){
    $fontsize = $_COOKIE['fontsize'];
}else{
    $fontsize = "18px";
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock in Rio</title>
</head>
<style>
    body{
        background-color:<?php echo $bgcolor?>;
        font-size: <?php echo $fontsize ?>;
        color: <?php echo $color?>;
    }
</style>
<body>
    <header>
        <h1>ROCK IN RIO</h1>
    </header>
</body>
</html>