$(document).ready(function(){

    let validation = false;

    $('#email').on('keyup',function(){

        let email = $('#email').val();

        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
        {
            $('#emailError').html('<p class="darkred-txt">You must enter a valid email</p>');
        }else{
            $('#emailError').html('<p class="green-txt">Your email seems valid</p>');

            let request = $.ajax({
                url: "ajax/emailExist.php",
                method: "POST",
                data: { email : email },
            });
            request.done(function(response){
                console.log(response);
                if(response.length > 0){
                    $('#emailError').html('<p class="red-txt">Your email already exists</p>');
                }else{
                    validation = true;
                }
            })
        }

    });

    $('#password').on('keyup',function(event){
        let password = $('#password').val();

        if(password.length < 7){
            $('#passwordError').html('<p class="darkred-txt">Your password contains at least 7 characters</p>');
        }else if(password.length > 32){
            $('#passwordError').html('<p class="darkred-txt">Your password contains a maximum of 32 characters</p>');
        }else{
            $('#passwordError').html('<p class="green-txt">Your password seems valid</p>');
            validation = true;
        }
    });

    $('#passwordConfirm').on('keyup',function(event){
        let password = $('#password').val();
        let passwordConfirm = $('#passwordConfirm').val();

        if(passwordConfirm !== password){
            $('#passwordConfirmError').html('<p class="darkred-txt">Your password entries are not identical</p>');
        }else{
            $('#passwordConfirmError').html('<p class="green-txt">Your passwords seems identical</p>');
            validation = true
        }
    });

    $('#registerUser').on('click', function(event){
        event.preventDefault();

        let password = $('#password').val();
        let email = $('#email').val();

        if(validation && password !== null && email !== null){
            $.ajax({
                method: 'POST',
                url: 'ajax/registerNewUser.php',
                data: {
                    email : email,
                    password : password,
                },
                complete:function(){
                        localStorage.setItem('User', email);
                        window.location.href = 'http://localhost/TLBS/tasks.php';
                }
            })
        }
    });

});

