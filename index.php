<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!--ten link do jquery trzeba znaleźć np tutaj: http://code.jquery.com/ i trzeba go wkleić-->


 <link rel="stylesheet" href="style.css">   
 
    </head>       

    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php"> 
                    <span style="color:#d20025">Stupa House</span> </a>

            </div>
            <?php
            $site = isset($_GET['site']) ? $_GET['site'] : 'home';

            // za pomocą isset sprawdzam czy parametr site istnieje, $_GET pobiera wartość paramentru site, parametr site występuje w adresie strony i za jego pomocą zmieniam content strony
            // zapis powyższy oznacza, że jeśli site istnieje to wpisz go do zmiennej $site, a jeśli nie to do zmiennej $site wpisz słowo: home
            // poniżej komenda echo oznacza wyświetl wynik
            // w menu otwieram kod php aby sprawzić czy zmienna $site ustawiona wyżej jest równa home, lub c lub java lub js lub php lub css lub html i jeśli tak to za pomocą echo wyświetlam w kodzie html klasę active a jeśli nie to nie wyświetlam nic (pusty znak)
            ?>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                <ul class="nav navbar-nav ">


                    <li class="<?php echo $site == 'home' ? 'active' : ''; ?>">
                        <a href="index.php">
                            <span class="glyphicon glyphicon-home"></span> Home
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="<?php echo $site == 'buddyzm' ? 'active' : ''; ?>">
                        <a href="index.php?site=buddyzm">Buddyzm</a>
                    </li>
                    <li class="<?php echo $site == 'medytacja' ? 'active' : ''; ?>">
                        <a href="index.php?site=medytacja">Medytacja</a>
                    </li>
                    <li class="<?php echo $site == 'osrodek' ? 'active' : ''; ?>">
                        <a href="index.php?site=osrodek">Ośrodek</a>
                    </li>
                    <li class="<?php echo $site == 'wydarzenia' ? 'active' : ''; ?>">
                        <a href="index.php?site=wydarzenia">Wydarzenia</a>
                    </li>
                    <li class="<?php echo $site == 'wyklady' ? 'active' : ''; ?>">
                        <a href="index.php?site=wyklady">Wykłady</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inne ośrodki <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a target="_blank" href="http://www.wesola.buddyzm.pl/">Warszawa Wesoła</a></li>
                            <li><a target="_blank" href="https://www.kuchary.pl/">Kuchary</a></li>
                            <li><a target="_blank" href="http://nagodzice.buddyzm.pl/">Nagodzice</a></li>
                            <li><a target="_blank" href="http://www.bartolty.buddyzm.pl/buddyzm.html">Bartołty Wielkie</a></li>

                        </ul>
                    </li>
                    <li class="<?php echo $site == 'kontakt' ? 'active' : ''; ?>">
                        <a href="index.php?site=kontakt">
                            <span class="glyphicon glyphicon-envelope"></span> Kontakt</a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->

    </nav> 

    <?php
// jakiś warunek pokazujący kod poniżej lub nie

    if ($site == 'home') {
        ?>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/budda9.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Buddyzm Diamentowej Drogi</h3><br>
                        <p>Celem praktyki buddyjskiej jest osiągnięcie całkowitego urzeczywistnienia potencjału umysłu i doświadczenie trwałego szczęścia – oświecenia.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/header3.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Buddyzm Diamentowej Drogi</h3><br>
                        <p>Celem praktyki buddyjskiej jest osiągnięcie całkowitego urzeczywistnienia potencjału umysłu i doświadczenie trwałego szczęścia – oświecenia.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/budda7.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Buddyzm Diamentowej Drogi</h3><br>
                        <p>Celem praktyki buddyjskiej jest osiągnięcie całkowitego urzeczywistnienia potencjału umysłu i doświadczenie trwałego szczęścia – oświecenia.</p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php
    }
    ?>
    <div class="container">
        <div class="jumbotron text-justify">
            <div>

                <button onclick="resize(1)" class="btn btn-sm ">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <button onclick="resize(0)" class="btn btn-sm ">
                    <span>Normal</span>
                </button>
                <button onclick="resize(-1)" class="btn btn-sm ">
                    <span class="glyphicon glyphicon-minus"></span>
                </button>


            </div>
            <?php
            include $site . ".php"
            ?>

        </div>

    </div>
    <div class="container-fluid ew-footer text-center">
        <p>&copy; copywright by EW 2017</p>

        <time id="time"></time>        



    </div>
    <div class="fixed">
        Serwis wykorzystuje pliki cookies. Jeżeli nie blokujesz plików, to zgadzasz się na ich użycie oraz zapisywanie w pamięci urządzenia.
        <button class="btn" onclick="hideCookies()">Close</button>
    </div>
   
<script src="script.js"></script>
</body>
</html>
