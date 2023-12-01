$(document).ready(function(){
    // Cuando el documento esté listo, ejecuta las siguientes funciones:

    // Selecciona el elemento con el ID 'reviewsList' y lo almacena en la variable 'reviewsList'
    var reviewsList = $('#reviewsList');

    // Selecciona el elemento con el ID 'reseñas' y lo almacena en la variable 'envio'
    var envio = $('#reseñas');

    // Asocia la función 'mostrarInformacion' al evento clic del elemento con el ID 'reseñas'
    envio.on("click", function(){
        mostrarInformacion("mostrar_contactaciones.php");
    });

    // Función asíncrona para mostrar información desde una URL (productos es un nombre un poco confuso, podría ser reseñas)
    async function mostrarInformacion(productos) {
        try {
            // Realiza una solicitud a la URL especificada
            const response = await fetch(productos);

            // Verifica si la respuesta es exitosa (código de respuesta 200)
            if (response.ok) {
                // Lee el contenido de la respuesta como texto
                const data = await response.text();

                // Limpia el contenido actual del elemento 'reviewsList'
                reviewsList.html('');

                // Crea un nuevo elemento de lista ('li') con el contenido obtenido y lo agrega a 'reviewsList'
                const li = $('<li>').html(data);
                reviewsList.append(li);
            } else {
                // Muestra un mensaje de error si la respuesta no es exitosa
                console.error('Error al obtener datos');
            }
        } catch (error) {
            // Muestra un mensaje de error si hay un problema con la solicitud
            console.error('Error al realizar la solicitud', error);
        }
    }
});
