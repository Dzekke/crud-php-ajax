$(document).ready(function() {
    function loadUsers() {
        $.ajax({
            url: 'obtener_usuarios.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let users = data.users;
                let tableBody = $('#user-table-body');
                tableBody.empty();
                
                users.forEach(function(user, index) {
                    tableBody.append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${user.nombre}</td>
                            <td>${user.email}</td>
                            <td>${user.telefono}</td>
                            <td><span class="role-badge">${user.rol}</span></td>
                            <td>${user.fecha_union}</td>
                            <td>${user.salario}</td>
                            <td>
                                <button class="edit-btn" data-id="${user.id}"><img src="Elementos-iStrategy/icono pluma-8.png" alt="Icono" style="width: 20px; height: 20px;"></button>
                                <button class="delete-btn" data-id="${user.id}"><img src="Elementos-iStrategy/icono basura-8.png" alt="Icono" style="width: 20px; height: 20px;"></button>
                            </td>
                        </tr>
                    `);
                });

                $('.edit-btn').click(function() {
                    let userId = $(this).data('id');
                    window.location.href = 'editar_usuario.php?id=' + userId;
                });

               
                $('.delete-btn').click(function() {
                    let userId = $(this).data('id');
                    if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
                        $.ajax({
                            url: 'eliminar_usuario.php',
                            type: 'POST',
                            data: { id: userId },
                            success: function(response) {
                                if (response.success) {
                                    alert('Usuario eliminado exitosamente');
                                    loadUsers(); 
                                } else {
                                    alert('Error: ' + response.message);
                                }
                            },
                            error: function() {
                                alert('Error al conectar con el servidor');
                            }
                        });
                    }
                });
            },
            error: function() {
                alert('Error al cargar los usuarios');
            }
        });
    }

    // Cargar usuarios 
    loadUsers();
    
    // Búsqueda de usuarios 
    $('#search-bar').on('keyup', function() {
        let value = $(this).val().toLowerCase();
        $("#user-table-body tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

