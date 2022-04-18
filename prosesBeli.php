<?php
    if(isset($_POST["gula"]) && isset($_POST ["minyak"])){
        setcookie("jumlahgula", $_POST["gula"]);
        setcookie("jumlahminyal", $_POST["minyak"]);
        header("location:keranjang.php");
    }
?>