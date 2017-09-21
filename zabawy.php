<!DOCTYPE html>
<html>
    <head>

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>

        <div class="well text-center">

            <div id="lama" style="display: none">

                <h1>Lama Ole Nydahl</h1>
                <p id="resizable" style="font-size: 16px">
                    Lama Ole Nydahl jest jednym z niewielu wysoko wykwalifikowanych lamów i nauczycieli medytacji w tradycji buddyzmu szkoły Karma Kagyu na Zachodzie. <br/>
                    Wraz z żoną Hannah zostali w 1969 roku pierwszymi zachodnimi uczniami największego mistrza medytacji swoich czasów XVI Karmapy.<br/>

                    Po trzech latach studiowania buddyjskiej filozofii, nauki medytacji oraz po otrzymaniu przekazu wyjątkowej dla Diamentowej Drogi praktyki świadomego umierania (tyb. Poła), Ole Nydahl na prośbę XVI Karmapy rozpoczął nauczanie buddyzmu w Europie.<br/>

                    Od tego czasu Lama Ole Nydahl, podróżując z naukami po całym świecie, przekazuje błogosławieństwo linii, dając wykłady niemal każdego dnia w innym mieście. Jego głębokie doświadczenie, wiedza i świeży, dynamiczny styl nauczania, inspirują tysiące ludzi przychodzących na jego wykłady i uczestniczących w prowadzonych przez niego kursach medytacyjnych.<br/>

                    Przekazywane przez Lamę Ole Nydahla i Hannah Nydahl nauki Buddy tak głęboko zainspirowały ludzi, że spotykają się, by wspólnie studiować oraz medytować w około 600 ośrodkach w 44 krajach na świecie.<br/>

                    Lama Ole Nydahl jest autorem wielu książek, m.in.: „O naturze rzeczy”, „Budda i miłość”, „Buddowie dachu świata”, „Dosiadając tygrysa”, „Wielka Pieczęć”. <br/>
                </p>
            </div>

            <br>
            <p>
                <button onclick="duzeLitery(true)" class="btn btn-success">DUŻE LITERY</button>
                <button onclick="duzeLitery(false)" class="btn btn-danger">małe litery</button>
            </p>

            <p>
                <button onclick="ukryjPokaz()" class="btn btn-primary">Ukryj/ Pokaż</button>
            </p>

            <p>
                <button onclick="resize(1)"class="btn btn-primary">Powiększ</button> 
                <button onclick="resize(-1)" class="btn btn-warning">Pomniejsz</button> 
                <button onclick="resize(0)" class="btn btn-info">Domyślny</button> 

            </p>




        </div>

        <script>

            function resize(arg) {
                  
            
            //1. pobierz fontSize z style i wpisz do zmiennej
            var a = document.getElementById("resizable").style; //16px
            //2. wykonaj parseInt aby z 16px wydobyć wartość 16
            var b = parseInt ( a.fontSize ); //16
            //3. dodaj lub odejmij 1 do 16 i będzie 17 lub 15
            if (arg == 1)  b++//b = b+1;
                
            if (arg == -1) b--//b = b-1;
                
            if (arg == 0)  b = 16;
                
            //4. dodaj "px" do 15 lub 17
            b = b + "px";
            //5. ustaw 15px lub 17 px jako nową wartość dla fontSize
            
            a.fontSize = b;
            }

            
            
            function ukryjPokaz() {

                var d = document.getElementById('lama').style;

                console.log(d.display);

                if (d.display == 'block') { // jeśli jest none to ustaw block

                    d.display = 'none';

                } else { // jesli jest block to ustaw none

                    d.display = 'block';

                }

            }

            function duzeLitery(stan) {

                var cl = document.getElementById('lama').classList;

                if (stan) {
                    cl.remove("text-lowercase");
                    cl.add("text-uppercase");
                } else {
                    cl.remove("text-uppercase");
                    cl.add('text-lowercase');
                }
            }

        </script>

    </body>
</html>
