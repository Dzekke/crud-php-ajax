$(document).ready(function() {
    $('#logoutButton').on('click', function() {
        $.ajax({
            url: 'logout.php',  
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    window.location.href = 'index.php';
                } else {
                    alert('Error al cerrar sesión. Por favor, intenta de nuevo.');
                }
            },
            error: function() {
                alert('Error en la solicitud. Por favor, intenta de nuevo.');
            }
        });
    });
});
