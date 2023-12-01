$(document).ready(function(){
    var reviewsList = $('#reviewsList');
    var envio = $('#reseñas');

    envio.on("click", function(){
        mostrarInformacion("mostrar_contactaciones.php");
    });

    async function mostrarInformacion(productos) {
        try {
            const response = await fetch(productos);
            if (response.ok) {
                const data = await response.text();
                reviewsList.html('');
                const li = $('<li>').html(data);
                reviewsList.append(li);
            } else {
                console.error('Error al obtener datos');
            }
        } catch (error) {
            console.error('Error al realizar la solicitud', error);
        }
    }
});


