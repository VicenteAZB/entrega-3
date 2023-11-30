// Selecciona el elemento del DOM con el id "Tarjeta" y lo asigna a la variable tarjeta
const tarjeta = document.querySelector("#Tarjeta");

// Selecciona el elemento del DOM con el id "Procesador" y lo asigna a la variable procesador
const procesador = document.querySelector("#Procesador");

// Selecciona el elemento del DOM con el id "Ram" y lo asigna a la variable ram
const ram = document.querySelector("#Ram");

// Selecciona el elemento del DOM con el id "Placa" y lo asigna a la variable placa
const placa = document.querySelector("#Placa");

// Selecciona el elemento del DOM con el id "Fuente" y lo asigna a la variable fuente
const fuente = document.querySelector("#Fuente");

// Selecciona el elemento del DOM con el id "lista" y lo asigna a la variable lista
const lista = document.querySelector("#lista");

// Función que muestra la descripción de un producto en el elemento con el id "descripcion"
function MuestraDescripcion(descripcion) {
    var parrafo = document.getElementById("descripcion");
    parrafo.innerHTML = descripcion;
}

// Función asincrónica que muestra la información de los productos obtenida de la URL proporcionada
async function mostrarInformacion(productos) {
    try {
        // Realiza una solicitud a la URL proporcionada
        const response = await fetch(productos);
        
        // Si la respuesta es exitosa (código 200)
        if (response.ok) {
            // Obtiene los datos de la respuesta como texto
            const data = await response.text();
            
            // Limpia el contenido del elemento con id "lista"
            lista.innerHTML = '';
            
            // Asigna los datos obtenidos al elemento con id "lista"
            lista.innerHTML = data;
        } else {
            // Muestra un mensaje de error si la respuesta no es exitosa
            console.error('Error al obtener datos');
        }
    } catch (error) {
        // Muestra un mensaje de error si ocurre un error durante la solicitud
        console.error('Error al realizar la solicitud', error);
    }
}

// Asocia eventos a los elementos seleccionados

// Cuando el mouse pasa sobre el elemento con id "Tarjeta", muestra la descripción "Tarjetas gráficas"
tarjeta.addEventListener("mouseover", function(){MuestraDescripcion("Tarjetas gráficas")});

// Cuando el mouse pasa sobre el elemento con id "Procesador", muestra la descripción "Procesadores"
procesador.addEventListener("mouseover", function(){MuestraDescripcion("Procesadores")});

// Cuando el mouse pasa sobre el elemento con id "Ram", muestra la descripción "Memorias RAM"
ram.addEventListener("mouseover", function(){MuestraDescripcion("Memorias RAM")});

// Cuando el mouse pasa sobre el elemento con id "Placa", muestra la descripción "Placas base"
placa.addEventListener("mouseover", function(){MuestraDescripcion("Placas base")});

// Cuando el mouse pasa sobre el elemento con id "Fuente", muestra la descripción "Fuentes de poder"
fuente.addEventListener("mouseover", function(){MuestraDescripcion("Fuentes de poder")});

// Cuando el mouse sale del elemento con id "Tarjeta", muestra la descripción "..."
tarjeta.addEventListener("mouseout", function(){MuestraDescripcion("...")});

// Cuando el mouse sale del elemento con id "Procesador", muestra la descripción "..."
procesador.addEventListener("mouseout", function(){MuestraDescripcion("...")});

// Cuando el mouse sale del elemento con id "Ram", muestra la descripción "..."
ram.addEventListener("mouseout", function(){MuestraDescripcion("...")});

// Cuando el mouse sale del elemento con id "Placa", muestra la descripción "..."
placa.addEventListener("mouseout", function(){MuestraDescripcion("...")});

// Cuando se hace clic en el elemento con id "Procesador", muestra la información de los procesadores obtenida de la URL './Info_BD/procesadores.php'
procesador.addEventListener('click', function(){mostrarInformacion('./Info_BD/procesadores.php')});

// Cuando se hace clic en el elemento con id "Tarjeta", muestra la información de las tarjetas obtenida de la URL './Info_BD/tarjetas.php'
tarjeta.addEventListener('click', function(){mostrarInformacion('./Info_BD/tarjetas.php')});

// Cuando se hace clic en el elemento con id "Ram", muestra la información de las memorias RAM obtenida de la URL './Info_BD/ram.php'
ram.addEventListener('click', function(){mostrarInformacion('./Info_BD/ram.php')});

// Cuando se hace clic en el elemento con id "Placa", muestra la información de las placas base obtenida de la URL './Info_BD/placas.php'
placa.addEventListener('click', function(){mostrarInformacion('./Info_BD/placas.php')});

// Cuando se hace clic en el elemento con id "Fuente", muestra la información de las fuentes de poder obtenida de la URL './Info_BD/fuentes.php'
fuente.addEventListener('click', function(){mostrarInformacion('./Info_BD/fuentes.php')});
