$(document).ready(function() {
    //let userId = "<?php echo $userId; ?>";

     let url = window.location.href;
     
    let urlParams = new URLSearchParams(window.location.search);

    let userId = urlParams.get('id');
    console.log(userId)
    if (userId) {
        $.ajax({
            url: 'info_usuario.php',
            type: 'GET',
            data: { id: userId },
            dataType: 'json',
            success: function(response) {
                let user = response.users[0];
                let pass = user.password;

               
                $('#username').val(user.nombre);
                $('#email').val(user.email);
                // $('#password').val(user.password);
                // $('#confirm-password').val(user.password);
                if (user.genero) {
                    $('input[name="gender"][value="' + user.genero + '"]').prop('checked', true);
                }
            },
            error: function() {
                alert('Error al obtener los datos del usuario');
            }
        });
    }
       

        const togglePassword = document.querySelector('#showPassword');
        const passwordField = document.querySelector('#password');
        const passwordField2 = document.querySelector('#confirm-password');

        togglePassword.addEventListener('change', function () {
            if (this.checked) {
                passwordField.type = 'text';
                passwordField2.type = 'text';
            } else {
                passwordField.type = 'password';
                passwordField2.type = 'password';

            }
        });

                $('#edit-form').submit(function(e) {
                    e.preventDefault();
                    let formData = {
                        id: userId,
                        nombre: $('#username').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        gender: $('input[name="gender"]:checked').val(), 
                    };
                   
                    $.ajax({
                        url: 'actualizar_info_usuario.php',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            if (response.success) {
                                alert('Usuario actualizado exitosamente');
                                window.location.href = 'index.php';
                            } else {
                                alert('Error al actualizar el usuario');
                            }
                        },
                        error: function() {
                            alert('Error al conectar con el servidor');
                        }
                    });
                });
    
});
