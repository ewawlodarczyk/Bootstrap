<head>
    <link rel="stylesheet" href="magnific-popup.css">
    <style>
        img {max-width: 100px;}
    </style>
</head>

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
<br><br>
<h2>Galeria</h2>
<hr><br><br>


<div class="container">

    <div class="parent-container">

        <div class="col-xs-6 col-md-3 thumbnail">
            <a href="images/gallery1.jpg" >
                <img src="images/gallery1.jpg">
            </a>
        </div>

        <div class="col-xs-6 col-md-3 thumbnail">
            <a href="images/gallery2.jpg">
                <img src="images/gallery2.jpg">
            </a>
        </div>

        <div class="col-xs-6 col-md-3 thumbnail">
            <a href="images/gallery3.jpg" >
                <img src="images/gallery3.jpg">
            </a>
        </div>

        <div class="col-xs-6 col-md-3 thumbnail">
            <a href="images/gallery4.jpg">
                <img src="images/gallery4.jpg">
            </a>
        </div>

    </div>

</div>
<script src="jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('.parent-container').magnificPopup({
            gallery: {enabled: true},
            delegate: 'a',
            type: 'image'
        });
        /* 
         krok 1. znalazłem na stronie http://dimsemenov.com/plugins/magnific-popup/ galerię i pobrałem pliki z GITHUBa
         krok2. dodałem linki do min.js i css
         krok3. zgodnie z domumentacją ze strony http://dimsemenov.com/plugins/magnific-popup/documentation.html dodaję do każdego atrybutu href dla każdego tagu a to samo co jest w scr dla obrazka plus elemnt nadrzędny dostaje klasę .parent-container
         krok4. wklejam kod powyżej tego komentarza i już działa! :)
                 
         */

    });
</script>
<br/><br/>
