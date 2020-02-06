<?php $film_info=get_films();
foreach ($film_info as $film_info): ?>

    <?php $date_screen = get_date_films($film_info["d_id"])?>



        <div class="intro">
            <div class="about">
                <div class="about__item">
                    <div class="about__img"> <a  href="film_info.php?id=<?php echo $film_info["f_id"];?>"> <img src="<?php echo $film_info["f_img"];?>" alt=""> </a></div>
                    <div data-sort="week" class="schedule-holder add">
                        <div class="film-info">
                            <div class="title-heading">
                                <a  class="film-name" href="film_info.php?id=<?php echo $film_info["f_id"];?>">
                                    <?php echo $film_info["f_name"];?>
                                </a>
                                <div class="btn-play btn-watch-trailer" data-target="#play-trailer" data-video_src="" > <a  class="btn-play-circle"><span>►</span></a>    <a target="_blank"     href="<?php echo $film_info["f_trailer"];?>" ><span>Смотреть трейлер
                                </span> </a></div>
                            </div> <span class="sub-title"><?php echo $film_info["f_category"];?></span> </div>
                      <div class="schedule-frame"> <span class="day-schedule"><?php echo $date_screen["d_screening"];?></span>
                            <ul class="schedule-list">
                                <li>
                                    <a class="vkino-link" > <span class="price"><form action="by_tickets.php"><button type="submit" class="button"><?php echo $date_screen["d_time_1"];?></button></form></span> <span class="buy">Купить</span> </a>
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
                            <div class="limit-age-position">
                                <div class="limit-age"><span><?php echo $film_info["f_age_limit"];?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

          <div class="end">
           <a href="">
           .
           </a>

        </div>
