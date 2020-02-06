<?php
$dbhost="localhost";
$dbname="db_films";
$username="mysql";
$password="mysql";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);

function get_films(){
    global $db;
    $film_info = $db->query("SELECT * FROM film_info");
    return $film_info;
}


function get_date_films($id){
    global $db;
    $date_films = $db->query("SELECT * FROM date_films WHERE d_id=$id");
    foreach ($date_films as $date_screen) {
    return $date_screen;
       }
    }


function get_films_description($id){
    global $db;
    $film_info = $db -> query("SELECT * FROM film_info WHERE f_id=$id");
    return $film_info;
    }

function get_films_anons(){
    global $db;
    $films_anons = $db->query("SELECT * FROM anons_films");
    return $films_anons;
    }

function get_date_films_($id){
    global $db;
    $date_films = $db->query("SELECT * FROM date_films WHERE d_id=$id");
    foreach ($date_films as $date_screen) {
    return $date_screen;
       }
    }

function get_date_films_search($id){
    global $db;
    $date_films = $db->query("SELECT * FROM date_films WHERE d_id=$id");
    return $date_films;
       }



















