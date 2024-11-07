<?php 
if (isset($_POST['bgcolor'])) {
    $color = $_POST['bgcolor'];
    setcookie('bgcolor', $color, time() + 2 * 60); 
}
if(isset($_POST['fontsize'])){
    $fontsize = $_POST['fontsize'];
    setcookie('fontsize',$fontsize,time() + 2 * 60);
}
header("location:index.php");

?>