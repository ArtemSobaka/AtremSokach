<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Roboto:400,500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <title>MaxiCinema</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"> </head>

<body>
 <?php require'db.php'; ?>


                <header class="header">
                    <div class="container">
                        <div class="header__inner">
                            <div class="header__logo"><a class="logo" href="index.php">MaxiCinema</a></div>
                            <nav class="nav">
                                <form name="search" method="POST" action="search.php?id=<?php echo $film["f_id"];?>">
                                    <input class="search_film" type="search" name="querry" placeholder="Искать здесь..." required>
                                    <button class="search_button" type="submit"></button>
                                </form>
                                <div><a class="anons" href="anons.php">Анонсы</a> </div>
                            </nav>
                        </div>
                    </div>
                </header>

