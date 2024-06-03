//------------------pregunta 1------------------------
function mostrarBotones(){
    //console.log("botonXD");
    var volverMenu = document.getElementById('principal');
    var botones = document.getElementById('menu');
    var nombreEstudiante = document.getElementById('mensaje');

    volverMenu.innerHTML='';

    botones.innerHTML=`
        <div class="contenidoPreguntas">
        <a href="">1</a>
        <a href="javascript:cargarLibros('galeria.php')">2</a>
        <a href="javascript:autenticar()">3</a>
        <a href="javascript:listar()">4</a>
        <a href="javascript:menuSelect()">5</a>
        </div>
    `;

    nombreEstudiante.innerHTML=`
        <div>Nombre: Salazar Santos Efrain</div>
        <div>CU: 35-4844</div>

    `;

}

//------------------pregunta 2------------------------
function cargarLibros(url) {
    var datos = document.getElementById('menu');
    datos.innerHTML="";
    fetch(url)
        .then(response => response.json())
        .then(data => {
            data.forEach(libro => {
                
                datos.innerHTML += `
                <div>
                <a href="javascript:mostrarLibroGrande('${libro.imagen}','${libro.titulo}')"><img width="30" src="images/${libro.imagen}" alt="${libro.titulo}"></a>
                </div>
                `;
            });
        })

}

function mostrarLibroGrande(_imagen, _titulo){

    //console.log(_imagen);
    var imagen = document.getElementById('principal');
    var titulo = document.getElementById('mensaje');

    imagen.innerHTML=`
    <img src="images/${_imagen}">
    `;
    
    titulo.innerHTML=`
    <div>${_titulo}</div>
    `;
}

function autenticar(){
    
        var datos = document.getElementById('principal');
        var ajax = new XMLHttpRequest() //crea el objetov ajax 
        ajax.open("get", "form_login.html", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                datos.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
        ajax.send();
    
}

function verificarUsuario() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "obtener_correo.php", true); // Crear un archivo PHP para obtener el correo
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            var correo = ajax.responseText;

            //console.log(correo);
            var datos = document.getElementById('contenidoUsuario');
            if (correo) {
                usuarioDiv = document.createElement('div');
                usuarioDiv.id = 'usuario';
                usuarioDiv.innerHTML = "Usuario: " + correo;

                datos.appendChild(usuarioDiv);
            } else {
                //usuarioDiv.textContent = "Usuario no autenticado";
            }
        }
    };
    ajax.send();
}


function cerrarSesion() {
    var elemento = document.getElementById('usuario');

    var ajax = new XMLHttpRequest();
    ajax.open("GET", "cerrar_sesion.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {

        }
    };
    elemento.remove();

    ajax.send();
}

function listar(){
    
    var datos = document.getElementById('principal');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'listar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();

}


function menuSelect() {
    var datos = document.getElementById('mensaje');
    var ajax = new XMLHttpRequest(); // crea el objeto ajax 
    ajax.open("GET", "datos.php", true);


    datos.innerHTML="";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            var libros = JSON.parse(ajax.responseText);

            var elementoSelect = document.createElement("select");
            for (var i = 0; i < libros.length; i++) {
                var elemento = document.createElement("option");
                elemento.innerHTML = libros[i].titulo; // Reemplaza 'nombre' por la propiedad correcta

                elementoSelect.appendChild(elemento);
            }

            elementoSelect.onchange = function() { // Agrega el evento onchange al select
                var indiceSeleccionado = this.selectedIndex;
                var imagenSeleccionada = libros[indiceSeleccionado].imagen;
                var tituloSeleccionado = libros[indiceSeleccionado].titulo;
                mostrarLibroGrandeDos(imagenSeleccionada, tituloSeleccionado);
            };

            datos.appendChild(elementoSelect); // Agrega el select al elemento datos
            elementoSelect.selectedIndex = 0; // Selecciona automáticamente el primer elemento del select
        }
    };
    ajax.send();
}

function mostrarLibroGrandeDos(_imagen, _titulo) {
    var imagen = document.getElementById('principal');

    imagen.innerHTML = `<img src="images/${_imagen}">`;
    
}

