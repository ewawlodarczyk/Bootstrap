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

        <h1 id="text" class="text-center" >Ewa Włodarczyk</h1>

        <p class="text-center">
            <button id="left"  onclick="display('l')" class="btn "><span class="glyphicon glyphicon-arrow-left"></span>Left</button>
            <button id="center" onclick="display('c')" class="btn"></span> Center </button>
            <button id="right" onclick="display('r')" class="btn"><span class="glyphicon glyphicon-arrow-right"></span>Right</button>
    </p> 


    <script>

        function display(arg) {

            var cl = document.getElementById("text").classList;
            
            var left = document.getElementById("left").style;
            var center = document.getElementById("center").style;
            var right = document.getElementById("right").style;

            if (arg === 'l') {
                cl.remove("text-center");
                cl.remove("text-right");
                cl.add("text-left");
                left.visibility  = 'hidden';
            } else left.visibility  = 'visible';

            if (arg === 'c') {
                cl.remove("text-right");
                cl.remove("text-left");
                cl.add("text-center")
                center.visibility  = 'hidden';
            } else center.visibility  = 'visible';

            if (arg === 'r') {
                cl.remove("text-center");
                cl.remove("text-left");
                cl.add("text-right");
                right.visibility  = 'hidden';
            } else right.visibility  = 'visible';


        }           
   </script>
</body>
</html>
