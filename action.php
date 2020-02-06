<?php


$fims_names = $_POST['films_names'];
$date = $_POST['date'];
$time = $_POST['time'];
$number = $_POST['number'];
$place = $_POST['place'];
$text .= "Фильм: $film_names \n";
$text .= "Дата: $date \n";
$text .= "Время: $time \n";
$text .= "Ряд: $number \n";
$text .= "Место: $place \n";
$file = fopen ("ticket.txt", "a+");
fwrite ($file,$text);
fclose ($file);
 echo 'Билет успешно забронирован!';

?>
