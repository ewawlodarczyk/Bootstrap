<div class="page-header">
    <h2>Wydarzenia</h2><br>
</div>

<!--
<ul class="list-group">
    <li class="list-group-item">Kurs z IV Dziamgonem Kongtrulem Rinpocze: <strong>13-15 października</strong></li>
    <li class="list-group-item">Kurs z Wojtkiem Tracewskim: <strong>13-15 listopada</strong></li>
    <li class="list-group-item">Kurs z Sherab Rinpocze: <strong>13-15 grudnia</strong></li>
    <li class="list-group-item">Kurs z Lamą Ole Nydahl: <strong>28-31 grudnia</strong></li>

</ul>-->
<div class="table-responsive ">
    <table class="table table-bordered table-hover" id="wydarzenia">

        <tr>
            <th>13-15 października</th>
            <td>Kurs z IV Dziamgonem Kongtrulem Rinpocze</td>
            
        </tr>
        <tr>
            <th>13-15 listopada</th>
            <td>Kurs z Wojtkiem Tracewskim</td>
           
        </tr>
        <tr>
            <th>13-15 grudnia</th>
            <td>Kurs z Sherabem Gjaltsenem Rinpocze</td>
           
        </tr>
        <tr>
            <th>28-31 grudnia</th>
            <td>Kurs z Lamą Ole Nydahlem</td>
            
        </tr>

    </table>
</div>
<br/><br/>
<div>
    <table>

        <tr>

            <td>
                <input class="form-control" id="argument1"/>
            </td>
            <td>

                <button onclick="opcja(1)" class="btn btn-primary">+</button>
                <button onclick="opcja(2)" class="btn btn-danger">-</button>
                <button onclick="opcja(3)" class="btn btn-warning">*</button>
                <button onclick="opcja(4)" class="btn btn-info">/</button>

            </td>
            <td>
                <input class="form-control" id="argument2"/>
            </td>
            <td>
                <button class="btn btn-block" onclick="policz()">Policz</button>
            </td>
            <td>
                <p style="width:200px; text-align: center; font-size: 1.5em;" id="wynik"></p>
            </td>

        </tr>


    </table>
    
        <hr/>
        <h1 id="h1" class="text-center">Ewa Włodarczyk</h1>
        
        <button onclick="klasaCzerwony(true)" class="btn btn-success">dodaj klasę czerwony</button>
        <button onclick="klasaCzerwony(false)" class="btn btn-danger ">usuń klasę czerwony</button>
        <button onclick="ukryjPokaz()" class="btn btn-primary"> UKRYJ / POKAŻ </button>
</div>
<script>
    
    function ukryjPokaz () {

        if ( document.getElementById('h1').style.display == 'block') { //jeśli jest none to ustaw block
            document.getElementById('h1').style.display = 'none';
            
   }
        else {
           document.getElementById('h1').style.display = 'block'; 
        }
        
        
    }
    
//    function klasaCzerwony ( stan ){
//        if(stan)
//            document.getElementById('h1').classList.add("czerwony");
//        else
//            document.getElementById('h1').classList.remove("czerwony"); 
//    }
     function klasaCzerwony ( stan ){
        if(stan) {
            document.getElementById('h1').classList.remove("text-lowercase");
            document.getElementById('h1').classList.add("text-uppercase");
        }
           
        else {
            document.getElementById('h1').classList.remove("text-uppercase"); 
            document.getElementById('h1').classList.add("text-lowercase"); 
        }
    }
    //można wyłączyć 'document.getElementById('h1').classList' i zrobić var cl = document.getElementById('h1').classList;
    // a potem skrócić zapisy: cl.remove("text-lowercase"), cl.add("text-uppercase") itd
    var LICZBA;

    function opcja(liczba) {//na onclicku przekazuje wartość, np 3
        LICZBA = liczba;//wpisuje 3 do globalnej zmiennej gdyż liczba jest lokalna i nie odczytam jej wartości później
    }

    function policz() {
        var arg1 = document.getElementById('argument1').value;
        var arg2 = document.getElementById('argument2').value;
        var wynik;// plusy wymuszają sumowanie i to, że to są liczby a nie teskty '1' czy '2', mogę być wszystkie działania: +,-,*,///

        if (LICZBA === 1) {
            wynik = +arg1 + +arg2;
        } //nawiasy mogą być, ale nie muszą. Kiedy jest jeden element, to nie ma konieczności
        if (LICZBA === 2)
            wynik = +arg1 - +arg2;
        if (LICZBA === 3) {
            wynik = +arg1 * +arg2;
        }
        if (LICZBA === 4) {
            wynik = +arg1 / +arg2;
        }

        document.getElementById('wynik').innerHTML = wynik;
    }
</script>  
