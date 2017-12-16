$(document).ready(function(){


    $('#loginUser').on('click', function(event){
        event.preventDefault();

        let password = $('#password').val();
        let email = $('#email').val();

        if(password !== null && email !== null){
            $.ajax({
                method: 'POST',
                url: 'ajax/loginUser.php',
                data: {
                    email : email,
                    password : password
                }
            }).done(function(response){
                console.log(response);
                if(response === 'OK'){

                localStorage.setItem('User', email);
                window.location.href = 'http://localhost/TLBS/App/tasks.php';

                }
            })

        }
    });
});