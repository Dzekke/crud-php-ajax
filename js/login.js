$(document).ready(function() {
    $('#login-form').on('submit', function(e) {
        e.preventDefault(); 

        $.ajax({
            url: 'validar_login.php', 
            type: 'POST',
            data: $(this).serialize(), 
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    window.location.href = 'index.php'; 
                } else {
                    $('#error-message').text(response.message).show(); 
                }
            },
            error: function() {
                $('#error-message').text('Error en el servidor. Por favor, inténtelo de nuevo.').show();
            }
        });
    });
});