<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/hall.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Roboto:400,500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <title>MaxiCinema</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"> </head>

<body>

       <?php require'db.php'; ?>
           <?php $descr = get_films_description($_GET['id']);?>
            <?php $date_screen = get_date_films_($_GET['id']);?>
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__logo"><a class="logo" href="index.php">MaxiCinema</a></div>
                    <nav class="nav">
                        <form name="search" method="POST" action="search.php">
                            <input class="search_film" type="search" name="querry" placeholder="Искать здесь..." required>
                            <button class="search_button" type="submit"></button>
                        </form>
                        <div><a class="anons" href="anons.php">Анонсы</a> </div>
                    </nav>
                </div>
            </div>
        </header>


            <div class="intro">
                <div class="about_">
                    <div class="about_info">
                        <div class="about_info_img"> <a><img src="<?php echo $descr["f_img_i"];?>" width="70%"; alt=""></a></div>
                        <div class="about_info_text">
                            <h1><?php echo $descr["f_name"]; ?></h1>
                            <a class="about_info_text_">
                                <?php echo $descr["f_premiere"]; ?>
                            </a>
                            <a class="about_info_text_">
                                <?php echo $descr["f_year"]; ?>
                            </a>
                            <a class="about_info_text_">
                                <?php echo $descr["f_country"]; ?>
                            </a>
                            <a class="about_info_text_">
                                <?php echo $descr["f_cast"]; ?>
                            </a>
                            <a class="about_info_text_">
                                <?php echo $descr["f_produser"]; ?>
                            </a>
                            <a>
                                <?php echo $descr["f_scenairo"]; ?>
                            </a>
                            <a class="about_info_text_">
                                <?php echo $descr["f_duration"]; ?>
                            </a>
                            <a class="about_info_text_">
                                <?php echo $descr["f_descr"];?>
                            </a>
                             </div>



                    </div>
                </div>
            </div>

            <div class="intro">
            <div class="about">
                <div class="about__item">

                    <div data-sort="week" class="schedule-holder add">

                      <div class="schedule-frame"> <span class="day-schedule"><?php echo $date_screen["d_screening"];?></span>
                            <ul class="schedule-list">
                                 <li>
                                    <a class="vkino-link"> <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_1"];?></button></form></span> <span class="buy">Купить</span> </a>
                                </li>
                                <li>
                                    <a class="vkino-link"> <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_2"];?></button></form></span> <span class="buy">Купить</span> </a>
                                </li>
                                <li>
                                    <a class="vkino-link"> <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_3"];?></button></form></span> <span class="buy">Купить</span> </a>
                                </li>
                                <li>
                                    <a class="vkino-link"> <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_4"];?></button></form></span> <span class="buy">Купить</span> </a>
                                </li>
                                <li>
                                    <a class="vkino-link"> <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_5"];?></button></form></span> <span class="buy">Купить</span> </a>
                                </li>
                                <li>
                                    <a class="vkino-link"> <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_6"];?></button></form></span> <span class="buy">Купить</span> </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="end">
           <a href="">
           .
           </a>

        </div>
