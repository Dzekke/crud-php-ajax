document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
   
    var formData = new FormData(this);

    // for (var pair of formData.entries()) {
    // console.log(pair[0] + ': ' + pair[1]);
    // }


    var emailF = formData.get('email');
    var usernameF = formData.get('username');
    var password = formData.get('password');
    var confirmPassword = formData.get('confirm-password');
    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden');
        return;
    }

    if (password == '' || confirmPassword == '' || emailF == '' || usernameF == '') {
         alert('Por favor, completa todos los campos requeridos(*).');
         return;
     }

       

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'nuevo_usuario.php', true);
    
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                alert('Usuario registrado exitosamente');
                window.location.href = 'index.php'; 
            } else {
                alert('Error: ' + response.message);
            }
        } else {
            alert('Error al conectar con el servidor');
        }
    };

    xhr.send(formData); 
});

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