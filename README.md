Proyecto de Gestión de Usuarios
Este proyecto consiste en una aplicación web simple para la gestión de usuarios, que incluye funcionalidades para agregar, editar, eliminar y listar usuarios, así como un sistema de inicio de sesión. A continuación se detallan las instrucciones para la configuración del entorno, la estructura del proyecto y las funcionalidades específicas a implementar.

Configuración del Entorno
Requisitos Previos
Servidor Local con PHP: Asegúrate de tener un servidor local en funcionamiento que soporte PHP (como XAMPP, WAMP, MAMP, etc.).
Base de Datos MySQL: Crea una base de datos MySQL para almacenar la información de los usuarios. La cantidad de tablas necesarias queda a tu consideración, aunque una estructura básica podría incluir:
usuarios: Para almacenar información como id, nombre_usuario, contraseña, etc.
Configuración
Configura tu servidor local para que apunte al directorio raíz de este proyecto.
Importa la estructura de la base de datos desde un archivo SQL (si está disponible) o créala manualmente en tu sistema de gestión de bases de datos preferido.
Estructura del Proyecto
Organiza tu proyecto siguiendo la estructura de archivos y carpetas que se describe a continuación:
/proyecto
│
├── index.php              # Página principal que muestra la lista de usuarios y el formulario de inicio de sesión.
├── agregar_usuario.php    # Script para manejar la inserción de nuevos usuarios (vía Ajax).
├── editar_usuario.php     # Script para manejar la actualización de usuarios existentes (vía Ajax).
├── eliminar_usuario.php   # Script para manejar la eliminación de usuarios (vía Ajax).
├── login.php              # Script para procesar el inicio de sesión del usuario.
├── obtener_usuarios.php   # Script para obtener la lista de usuarios y devolverla en formato JSON (vía Ajax).
│
├── /css                   # Carpeta para almacenar tus archivos CSS.
│   └── estilos.css        # Archivo de estilos principal.
│
├── /js                    # Carpeta para almacenar tus scripts JavaScript.
│   └── funciones.js       # Archivo JS para manejar peticiones Ajax y la actualización dinámica del contenido.

Funcionalidades Específicas
1. Inicio de Sesión
Formulario de Inicio de Sesión: Implementa un formulario con campos para el nombre de usuario y la contraseña en index.php.
Validación de Credenciales: En login.php, valida las credenciales ingresadas por el usuario contra los datos almacenados en la base de datos.
Redirección o Cambio de Interfaz: Tras un inicio de sesión exitoso, redirige al usuario a una página protegida o ajusta la interfaz para reflejar el estado de sesión activa.
Manejo de Intentos Fallidos (Opcional): Puedes implementar un sistema de bloqueo temporal tras varios intentos fallidos de inicio de sesión.
2. Interfaz de Usuario (UI)
Adherencia al Diseño: Asegúrate de seguir estrictamente las líneas de diseño proporcionadas en el archivo diseno.pdf.
CSS Libre: Puedes utilizar CSS puro, preprocesadores como SASS/LESS, o frameworks CSS como Bootstrap.
Mejoras de UX (Opcional):
Implementa loaders o indicadores de progreso durante las peticiones Ajax.
Añade notificaciones visuales (éxito, error, advertencia) para informar al usuario sobre el resultado de las operaciones.
Incluye animaciones sutiles para mejorar las transiciones y efectos visuales.
Maneja errores de manera clara y amigable, proporcionando mensajes útiles al usuario.
Funcionalidades Específicas
1. Inicio de Sesión
Formulario de Inicio de Sesión: Implementa un formulario con campos para el nombre de usuario y la contraseña en index.php.
Validación de Credenciales: En login.php, valida las credenciales ingresadas por el usuario contra los datos almacenados en la base de datos.
Redirección o Cambio de Interfaz: Tras un inicio de sesión exitoso, redirige al usuario a una página protegida o ajusta la interfaz para reflejar el estado de sesión activa.
Manejo de Intentos Fallidos (Opcional): Puedes implementar un sistema de bloqueo temporal tras varios intentos fallidos de inicio de sesión (3 en mi caso y por 10 minutos).
2. Interfaz de Usuario (UI)
Adherencia al Diseño: Asegúrate de seguir estrictamente las líneas de diseño proporcionadas en el archivo diseno.pdf.
CSS Libre: Puedes utilizar CSS puro, preprocesadores como SASS/LESS, o frameworks CSS como Bootstrap.
Mejoras de UX (Opcional):
Implementa loaders o indicadores de progreso durante las peticiones Ajax.
Añade notificaciones visuales (éxito, error, advertencia) para informar al usuario sobre el resultado de las operaciones.
Incluye animaciones sutiles para mejorar las transiciones y efectos visuales.
Maneja errores de manera clara y amigable, proporcionando mensajes útiles al usuario.
Consideraciones Finales
Este proyecto tiene como objetivo evaluar  la gestión de sesiones, la interacción con bases de datos a través de PHP, y
la implementación de una interfaz de usuario que siga un diseño predefinido.
La flexibilidad en el uso de tecnologías CSS y la posibilidad de agregar mejoras a la experiencia de usuario son puntos clave para destacar en la implementación de esta aplicación.



