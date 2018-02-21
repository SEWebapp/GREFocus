<?php

require('config.php');

$query = mysqli_query($con, "SELECT * FROM vocab");

$i = 0;

while($row = mysqli_fetch_array($query)){

    $response[$i]['id'] = $row['id'];
    $response[$i]['word'] = $row['word'];
    $response[$i]['synonym'] = $row['synonym'];
    $response[$i]['antonym'] = $row['antonym'];
    $response[$i]['sentence'] = $row['sentence'];

    $data['vocab'][$i] = $response[$i];
    $i = $i + 1; 

}

$fp = fopen('vocab_json_data.json', 'w');
fwrite($fp, json_encode($data['vocab']));
fclose($fp);

@header('Location:/GREFocus/vocab.html');





?>
