<?php
include '../php/config.php';
session_start();

if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){
    $number = $_POST['number'];
    $selected_option = $_POST['option'];
    
    $next = $number + 1;

    $query = "SELECT * FROM vt1options WHERE q_no = $number AND is_correct = 1";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $correct_option = $row['id'];


    $query1 = "SELECT * FROM vt1questions";
    $result1 = mysqli_query($con, $query1);
    $total = mysqli_num_rows($result1);

    if($correct_option == $selected_option){
        $_SESSION['score']++;
    }

    if($number == $total){
        header("Location: result.php");
        exit();
    }else{
        header("Location: vt1.php?n=".$next);
        exit();
    }
}



?>