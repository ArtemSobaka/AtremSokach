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
                       <form name="search" method="POST" action="search.php"><input class="search_film"   type="search" name="querry" placeholder="Искать здесь..." required>
                            <button class="search_button" type="submit"></button> </form></nav>
                </div>
            </div>
        </header>
        <?php $films_anons=get_films_anons();
    foreach ($films_anons as $films_anons): ?>
            <section class="anons_alls">
                <div class="anons_item">
                    <div><img class="anons_img" src="<?php echo $films_anons["a_img"];?>" alt="">
                        <div class="anons_info">
                            <a class="anons_name">
                                <?php echo $films_anons["a_name"];?>
                            </a>
                            <a class="anons_date">
                                <?php echo $films_anons["a_date"];?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>
            <script>scr="by_tickets.js" </script>
