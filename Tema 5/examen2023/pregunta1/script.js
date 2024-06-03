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
        <a href="javascript:pregunta(3)">3</a>
        <a href="javascript:pregunta(4)">4</a>
        <a href="javascript:pregunta(5)">5</a>
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