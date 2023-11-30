var reviewsList = document.getElementById('reviewsList')
const envio = document.getElementById('reseñas')

async function mostrarInformacion(productos) {
    try {
        const response = await fetch(productos);
        if (response.ok) {
            const data = await response.text();
            reviewsList.innerHTML = '';
            const li = document.createElement('li');
            li.innerHTML = data;
            reviewsList.appendChild(li);
        } else {
            console.error('Error al obtener datos');
        }
    } catch (error) {
        console.error('Error al realizar la solicitud', error);
    }
}

envio.addEventListener("click", function(){mostrarInformacion("mostrar_contactaciones.php")})

