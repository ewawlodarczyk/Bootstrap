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
        <div>
        <input type="button" class="btn-lg" value="1" onclick="number('1')">
        <input type="button" class="btn-lg" value="2" onclick="number('2')">
        <input type="button" class="btn-lg" value="3" onclick="number('3')"><br>
        <input type="button" class="btn-lg" value="4" onclick="number('4')">
        <input type="button" class="btn-lg" value="5" onclick="number('5')">
        <input type="button" class="btn-lg" value="6" onclick="number('6')"><br>
        <input type="button" class="btn-lg" value="7" onclick="number('7')">
        <input type="button" class="btn-lg" value="8" onclick="number('8')">
        <input type="button" class="btn-lg" value="9" onclick="number('9')">
        </div>
                <button onclick="opcja('1')" class="btn btn-primary">+</button>
                <button onclick="opcja('2')" class="btn btn-danger">-</button>
                <button onclick="opcja('3')" class="btn btn-warning">*</button>
                <button onclick="opcja('4')" class="btn btn-info">/</button>

                <button class="btn" onclick="policz()">=</button>
                 <p style="width:200px; text-align: center; font-size: 1.5em;" id="wynik"></p>
                 <p style="width:200px; text-align: center; font-size: 1.5em;" id="nr1"></p>
                 <p style="width:200px; text-align: center; font-size: 1.5em;" id="nr2"></p>
                
    <script>
       
var DZIALANIE;
var NR1 = '';
var NR2 = '';
    function opcja(dzialanie) {//na onclicku przekazuje wartość, np 3
        DZIALANIE = dzialanie;//wpisuje 3 do globalnej zmiennej gdyż liczba jest lokalna i nie odczytam jej wartości później
    }
    function number(nr) {
        //document.getElementsByTagName("input").value = nr;
        if( DZIALANIE ) NR1 += nr;
        else NR2 += nr;
        document.getElementById('nr1').innerHTML = NR1;
        document.getElementById('nr2').innerHTML = NR2; 
    }
    

    function policz() {
              
        var wynik;// plusy wymuszają sumowanie i to, że to są liczby a nie teskty '1' czy '2', mogę być wszystkie działania: +,-,*,///
        //var a = parseInt (NR1); // '7887687687'

        if (DZIALANIE === '1') {
            wynik = +NR1 + +NR2;
        } //nawiasy mogą być, ale nie muszą. Kiedy jest jeden element, to nie ma konieczności
        if (DZIALANIE === '2')
            wynik = +NR1 - +NR2;
        if (DZIALANIE === '3') {
            wynik = +NR1 * +NR2;
        }
        if (DZIALANIE === '4') {
            wynik = +NR1 / +NR2;
        }

        document.getElementById('wynik').innerHTML = wynik;
       
      //console.log(NR1,NR2,DZIALANIE,wynik);
    }
        
   </script>
</body>
</html>

