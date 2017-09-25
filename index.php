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


        <style>
            /* Extra Small Devices, Phones */ 
            @media only screen and (min-width : 480px) {
                .carousel-caption p { font-size: 1em; }
                .carousel-caption h3 { font-size: 2em; text-shadow: 0px 0px 25px black;}
            }
            /* Small Devices, Tablets */
            @media only screen and (min-width : 768px) {
                .carousel-caption p { font-size: 1.5em;}
                .carousel-caption h3 { font-size: 3em; text-shadow: 0px 0px 25px black;}
            }

            /* Medium Devices, Desktops */
            @media only screen and (min-width : 992px) {
                .carousel-caption p { font-size: 1.5em;}
                .carousel-caption h3 { font-size: 5em; text-shadow: 0px 0px 25px black;}
            }

            .navbar {margin-bottom: 0px; border-radius: 0px; color: pink;}


            .carousel-caption * { text-shadow: 0px 0px 100px black;}



            body { 
                font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
                background-image: url("images/tlo2.jpg");
                padding-top: 50px; }

            div.jumbotron { margin-top: 20px; background-color: white; }
            .jumbotron img { max-width: 300px;}
            .jumbotron img.pull-left { margin-right: 20px;}
            .jumbotron img.pull-right { margin-left: 20px;}
            .list-group { font-size: 1.5em;}
            .table-hover> tbody> tr:hover {background-color: #d20025!important;}
            table#wydarzenia { font-size: 1.5em;
                               border: 2px solid black!important;}
            button {background-color:#d20025;
                    font-size: 1.3em!important;}
            .czerwony { color:#d20025!important;
            }
            div.fixed {
                color: black;
                position: fixed;
                bottom: 0;
                right: 0;
                /*width: 300px;*/
                border: 3px double black;
                background-color: #EEEEEE;
                padding: 10px;
                font-size: 0.9em;
                opacity: 0.8;
                display: none;
                /* ustawiam domyślnie na none display by cookies pojawił się tylko gdy nie ma wpisu do localStorage */
            }
            textarea {resize: vertical;}
            .alert { display: none; width: 100%; }
            
        </style>
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
    <script>

//     function closeXXX(){
//        
//      $('div.fixed').hide();
//     
//    };

        function eywa() {
            document.getElementById('time').innerHTML = new Date();

        } //deklaracja funkcji

        setInterval(eywa, 1000); //wywołanie funkcji w pętli co sekundę
//    setInterval ( eywa, 2000 ); //wywołanie funkcji co 2 sekundy

        function hideCookies() {

            localStorage.setItem('clicked', true); // ustawiam localStorage czyli cookies zaakceptowany
            $('.fixed').hide(); // ukrywam element

        }

        if (!localStorage.getItem('clicked'))
            $('.fixed').show(); // jesli cookies zaakceptowany to nie pokaże, zaś jeśli nie ustawione to pokaże

        function resize(arg) {

            // 1. pobierz font-size i wpisz do zmiennej

            var fs1 = $('.jumbotron p').css('font-size');

            // 2. wykonaj parseInt aby z 16px wydobyć wartość 16

            var fs2 = parseInt(fs1);

            // 3. Dodaj lub odejmij 1 od 16 i będzie 17 lub 15

            if (arg === 1)
                fs2++; // powieksz ( b = b+1 )

            else if (arg === -1)
                fs2--; // zmiejsz ( b = b-1 )

            else if (arg === 0)
                fs2 = 21; // default

            // 4. Dodaj "px" do 15 lub 17

            fs2 = fs2 + "px";

            // 5. Ustaw 15px lub 17px jako nową wartość dla style.fontSize

            $('.jumbotron p').css('font-size', fs2);

        }
        
        //WALIDACJA FORMULARZA
        
        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validatePhone(phone) {
            var re = /^[1-9]{1}[0-9]{8}$/;
            return re.test(phone);
        }

        function check() {

            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var age = $('#age').val();
            var male = $('#male').val();
            var message = $('#message').val();

            var nameOK = false,
                    phoneOK = false,
                    emailOK = false,
                    ageOK = false,
                    maleOK = false,
                    messageOK = false;


            // NAME

            if (name === '') {

                $('#divName').addClass('has-error');

                $('#divName .alert-danger').slideDown();

                nameOK = false;

            } else {

                $('#divName').removeClass('has-error');

                $('#divName .alert-danger').slideUp();

                nameOK = true;

            }

            // PHONE

            if (phone == '' || validatePhone(phone) === false) {

                $('#divPhone').addClass('has-error');

                $('#divPhone .alert-danger').slideDown();

                phoneOK = false;

            } else {

                $('#divPhone').removeClass('has-error');

                $('#divPhone .alert-danger').slideUp();

                phoneOK = true;

            }

            // EMAIL

            if (email == '' || validateEmail(email) === false) {

                $('#divEmail').addClass('has-error');

                $('#divEmail .alert-danger').slideDown();

                emailOK = false;

            } else {

                $('#divEmail').removeClass('has-error');

                $('#divEmail .alert-danger').slideUp();

                emailOK = true;

            }

            // AGE

            if (age == '' || age > 99 || age < 18) {

                $('#divAge').addClass('has-error');

                $('#divAge .alert-danger').slideDown();

                ageOK = false;

            } else {

                $('#divAge').removeClass('has-error');

                $('#divAge .alert-danger').slideUp();

                ageOK = true;

            }

            // MALE

            if (male == "Proszę wybrać") {

                $('#divMale').addClass('has-error');

                $('#divMale .alert-danger').slideDown();

                maleOK = false;

            } else {

                $('#divMale').removeClass('has-error');

                $('#divMale .alert-danger').slideUp();

                maleOK = true;

            }
            // MESSAGE

            if (message == '') {

                $('#divMessage').addClass('has-error');

                $('#divMessage .alert-danger').slideDown();

                messageOK = false;

            } else {

                $('#divMessage').removeClass('has-error');

                $('#divMessage .alert-danger').slideUp();

                messageOK = true;

            }

            if (nameOK && phoneOK && emailOK && messageOK && ageOK && maleOK) {
                // czy moge wyslac, jesli tak to ukryj form i pokaz alert-success

                $('.alert-success').slideDown(1000);
                $('form').slideUp();

                setTimeout(function () {
                    $('#name').val(''); //wyczyszczenie inputów po przesłaniu formularza
                    $('#phone').val('');
                    $('#email').val('');
                    $('#age').val('');
                    $('#male').val('');
                    $('#message').val('');

                    $('.alert-success').slideUp(1000);
                    $('form').slideDown(1000);

                }, 5000);

            } else {

                $('.alert-success').slideUp(1000);
                $('form').slideDown(1000);

            }

        }



        // 1 != 2 - sprawdzenie czy jedynka NIE RÓWNA SIĘ 2 != jest tożsame co "różne" w matematyce np.  if ( name != '')

        //$('#name').val ('ewa') - tu wpisuje parametr w pole input
        //$('#name').val ('') - tu odczytuje parametr z pola input
        //alert ('ewa') można dodać alert, żeby sprawdzić czy funkcja działa, np gdy nazwa funckji jest zastrzeżona. Gdy np zrobimy nazwę close, to alert się nie wyświetli
    </script>

</body>

</html>


</script>
<br/>
</body>
</html>
