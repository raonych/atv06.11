<?php 
if (isset($_POST['bgcolor'])) {
    $color = $_POST['bgcolor'];
    setcookie('bgcolor', $color, time() + 2 * 60); 
}

header("location:index.php");

?>