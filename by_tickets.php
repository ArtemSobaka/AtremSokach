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
                        <form name="search" method="POST" action="search.php">
                            <input class="search_film" type="search" name="search" placeholder="Искать здесь..." required>
                            <button class="search_button" name="search_btn" type="submit"></button>
                        </form>
                        <div><a class="anons" href="anons.php">Анонсы</a> </div>
                    </nav>
                </div>
            </div>
        </header>
        <div class="intro">
            <div class="about_">
                <div class="about_info">
                    <div class="about_info_img"> </div>
                    <h2>Бронирование билетов</h2>
                    <div class="wrapper" style="left:250px; position:relative;">
                        <h4 style="left:250px; position:relative;">Экран</h4>
                        <div class="rows-captions-left">
                            <div style="position: relative; top: 0px;">
                                <div class="row-caption" style="left: 90px; top: 0px; line-height: 15px; height: 15px; position: absolute;">1</div>
                                <div class="row-caption" style="left: 90px; top: 20px; line-height: 15px; height: 15px; position: absolute;">2</div>
                                <div class="row-caption" style="left: 90px; top: 39.6px; line-height: 15px; height: 15px; position: absolute;">3</div>
                                <div class="row-caption" style="left: 90px; top: 59.6px; line-height: 15px; height: 15px; position: absolute;">4</div>
                                <div class="row-caption" style="left: 90px; top: 79px; line-height: 15px; height: 15px; position: absolute;">5</div>
                                <div class="row-caption" style="left: 90px; top: 99px; line-height: 15px; height: 15px; position: absolute;">6</div>
                                <div class="row-caption" style="left: 90px; top: 119px; line-height: 15px; height: 15px; position: absolute;">7</div>
                                <div class="row-caption" style="left: 90px; top: 138.6px; line-height: 15px; height: 15px; position: absolute;">8</div>
                                <div class="row-caption" style="left: 90px; top: 158.6px; line-height: 15px; height: 15px; position: absolute;">9</div>
                                <div class="row-caption" style="left: 90px; top: 178px; line-height: 15px; height: 15px; position: absolute;">10</div>
                                <div class="row-caption" style="left: 90px; top: 198px; line-height: 15px; height: 15px; position: absolute;">11</div>
                            </div>
                        </div>
                        <div id="hall-scheme-container" style="height: 226.72px; overflow: hidden;">
                            <div style="position: relative; width: 340px; height: 218px; left: 140px; top: 0px;">
                                <div class="places" style="left: 0px; top: 0px;  font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 0px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 20px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 39.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 59.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 79px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 99px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 119px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 138.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 158.6px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 178px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                                <div class="places" style="left: 0px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">1</div>
                                <div class="places" style="left: 20px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">2</div>
                                <div class="places" style="left: 40px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">3</div>
                                <div class="places" style="left: 60px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">4</div>
                                <div class="places" style="left: 80px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">5</div>
                                <div class="places" style="left: 100px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">6</div>
                                <div class="places" style="left: 120px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">7</div>
                                <div class="places" style="left: 140px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">8</div>
                                <div class="places" style="left: 160px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">9</div>
                                <div class="places" style="left: 180.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">10</div>
                                <div class="places" style="left: 200.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">11</div>
                                <div class="places" style="left: 220.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">12</div>
                                <div class="places" style="left: 240.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">13</div>
                                <div class="places" style="left: 260.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">14</div>
                                <div class="places" style="left: 280.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">15</div>
                                <div class="places" style="left: 300.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">16</div>
                                <div class="places" style="left: 320.6px; top: 198px; font-size: 11px; position: absolute; width: 15px; height: 15px; line-height: 15px;">17</div>
                            </div>
                        </div>
                    </div>
                    <div class="form_buy">
                        <?php


                            $films_names = $_POST['films_names'];
                            $date = $_POST['date'];
                            $time = $_POST['time'];
                            $number = $_POST['number'];
                            $place = $_POST['place'];
                            $text.= "Фильм: $films_names \n";
                            $text.= "Дата: $date \n";
                            $text.= "Время: $time \n";
                            $text.= "Ряд: $number \n";
                            $text.= "Место: $place \n";


                                     $file = fopen ("ticket.txt", "w");
                                    fwrite ($file,$text);
                                    fclose ($file);


                            ?>
                            <form method="post">
                                <fieldset class="form_tickets">
                                    <p>
                                        <label for="name">Фильм: </label>
                                        <select name="films_names">
                                            <?php $film_info=get_films();
                                    foreach ($film_info as $film_info): ?>
                                                <option value=" <?php echo $film_info["f_name"];?>">
                                                    <?php echo $film_info["f_name"];?>
                                                </option>
                                                <?php endforeach; ?>
                                        </select>
                                    </p>
                                    <p>
                                        <label for="date">Дата: </label>
                                        <input name="date" type="date" id="date" required min="2020-01-24" max="2020-02-13"> </p>
                                    <p>
                                        <label for="time">Время: </label>
                                        <input name="time" type="time" id="time" min="10:00" max="22:00" required> </p>
                                </fieldset>
                                <fieldset class="form_tickets">
                                    <p>
                                        <label for="number">Место: </label>
                                        <input name="place" type="number" id="number" min="1" max="17" required> </p>
                                    <p>
                                        <label for="number">Ряд: </label>
                                        <input name="number" type="number" id="number" min="1" max="11" required> </p>
                                </fieldset>
                                <a href="">
                                    <button class="search_input">Забронировать</button>
                                </a>
                            </form>
                            <a href="ticket.txt" download>
                                <button class="search_input">Загрузить</button>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="end"> <a href="">
           .
           </a> </div>
