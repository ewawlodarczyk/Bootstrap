
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

                $('#name').closest('.form-group').addClass('has-error');

                $('#name').siblings('.alert-danger').slideDown();

                nameOK = false;

            } else {

                $('#name').closest('.form-group').removeClass('has-error');

                $('#name').siblings('.alert-danger').slideUp();

                nameOK = true;

            }

            // PHONE

            if (phone == '' || validatePhone(phone) === false) {

                $('#phone').closest('.form-group').addClass('has-error');

                $('#phone').siblings('.alert-danger').slideDown();

                phoneOK = false;

            } else {

                $('#phone').closest('.form-group').removeClass('has-error');

                $('#phone').siblings('.alert-danger').slideUp();

                phoneOK = true;

            }

            // EMAIL

            if (email == '' || validateEmail(email) === false) {

                $('#email').closest('.form-group').addClass('has-error');

                $('#email').siblings('.alert-danger').slideDown();

                emailOK = false;

            } else {

                $('#email').closest('.form-group').removeClass('has-error');

                $('#email').siblings('.alert-danger').slideUp();

                emailOK = true;

            }

            // AGE

            if (age == '' || age > 99 || age < 18) {

                $('#age').closest('.form-group').addClass('has-error');

                $('#age').siblings('.alert-danger').slideDown();

                ageOK = false;

            } else {

                $('#age').closest('.form-group').removeClass('has-error');

                $('#age').siblings('.alert-danger').slideUp();

                ageOK = true;

            }

            // MALE

            if (male == "Proszę wybrać") {

                $('#male').closest('.form-group').addClass('has-error');

                $('#male').siblings('.alert-danger').slideDown();

                maleOK = false;

            } else {

                $('#male').closest('.form-group').removeClass('has-error');

                $('#male').siblings('.alert-danger').slideUp();

                maleOK = true;

            }
            // MESSAGE

            if (message == '') {

                $('#message').closest('.form-group').addClass('has-error');

                $('#message').siblings('.alert-danger').slideDown();

                messageOK = false;

            } else {

                $('#message').closest('.form-group').removeClass('has-error');

                $('#message').siblings('.alert-danger').slideUp();

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
 


