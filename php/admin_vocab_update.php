<?php

if(isset($_POST['submit'])){
    require('config.php');

    $word = mysqli_real_escape_string($con , $_POST['word']);
    $synonym = mysqli_real_escape_string($con , $_POST['synonym']);
    $antonym = mysqli_real_escape_string($con , $_POST['antonym']);
    $sentence = mysqli_real_escape_string($con , $_POST['sentence']);

    //Check If Empty
    if( empty($word) || empty($synonym) || empty($antonym) || empty($sentence)){

        header("Location: admin_vocab.php?error=empty");
        exit();
    } else {
           

                    //Insert the user into db
                    $sql = "INSERT INTO vocab ( word, synonym, antonym, sentence) VALUES ('$word','$synonym', '$antonym', '$sentence');";
                    mysqli_query($con, $sql);
                    exit();
                    
                }

            
        }

    else {
    header("Location: admin_vocab.php");
    exit();
}


?>