function preguntaUno(){
    var sub=document.getElementById('sub-menu');
    var titulo=document.getElementById('titulo');
    var tabla=document.getElementById('contenido');


    titulo.innerHTML="Pregunta 1";

    sub.innerHTML=`
    <div id="sub-menu" class="barra-lat-izquierda" >
    <div  class="btn-opciones btn-op-principal">
        Opciones
    </div>
    </div>

    <p>filas</p>
    <input type="number" id="filas">
    <p>columnas</p>
    <input type="number" id="columnas"><br>

    <button id="crearTabla" onclick="creartabla()">Crear</button>

    `;

    tabla.innerHTML= "";
}

function creartabla(){
    var tabla = document.getElementById('contenido');
    var filas= document.getElementById('filas').value;
    var columnas= document.getElementById('columnas').value;
    tabla.innerHTML="";
    //console.log(filas);
    var html=`
        <table border=1>
    `;
    for(let i = 0 ; i<filas; i++){
        html+=`<tr>`;
        for(let j = 0 ; j<columnas; j++){
            html+=` <td>
                        <input type="text">
                    </td>`;
        }
        html+=`</tr>`;
    }

    html+=`</table>`;

    tabla.innerHTML = html;
}



function preguntaDos(){
    var sub=document.getElementById('sub-menu');
    var titulo=document.getElementById('titulo');
    var tabla=document.getElementById('contenido');
    
    tabla.innerHTML="";

    titulo.innerHTML="Pregunta 2";

    sub.innerHTML=`
    <div id="sub-menu" class="barra-lat-izquierda" >
    <div  class="btn-opciones btn-op-principal">
        Opciones
    </div>
    </div>

    <p>Texto</p>
    <input type="text" id="texto">
    <p>Color fondo</p>
    <input type="color" id="colorFondo">
    <p>Color</p>
    <input type="color" id="color">
    
    <br>

    <button id="crearTabla" onclick="crearTexto()">Crear</button>

    `;

}
function crearTexto(){
    var principal = document.getElementById('contenido');
    var text= document.getElementById('texto').value;
    var colorF= document.getElementById('colorFondo').value;
    var color= document.getElementById('color').value;

    principal.innerHTML="";
    
    var cuadrog = document.createElement("div");
    var cuadro = document.createElement("p");
    cuadro.textContent= text;
    cuadro.id= "frase";
    cuadro.style.backgroundColor= colorF;
    cuadro.style.color= color;

    cuadrog.appendChild(cuadro);
    principal.appendChild(cuadrog);
}

function preguntaTres(url){
    var datos = document.getElementById('sub-menu');
    var titulo=document.getElementById('titulo');
    var principal = document.getElementById('contenido');
    principal.innerHTML="";

    titulo.innerHTML="Pregunta 3";  
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
    var imagen = document.getElementById('contenido');
    //var titulo = document.getElementById('mensaje');

    imagen.innerHTML=`
    <img src="images/${_imagen}">
    `;
    
}

function preguntaCuatro(){
    var sub=document.getElementById('sub-menu');
    var titulo=document.getElementById('titulo');
    var tabla=document.getElementById('contenido');
    tabla.innerHTML="";

    titulo.innerHTML="Pregunta 4";

    sub.innerHTML=`
    <button onclick="listar()">Listar</button>
    <button onclick="insertar()">Insertar</button>
    `;

    tabla.innerHTML= "";

}

function listar() {
    var datos = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 

    ajax.open("get", "listar.php", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function insertar(){
    var datos = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 

    ajax.open("get", "formmulario.html", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function preguntaCinco(){
    var datos = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 

    ajax.open("get", "form_calendario.php", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();

}
function preguntaCincoConFetch() {
    var datos = document.getElementById('sub-menu');
    
    fetch('form_calendario.php')
        .then(response => response.text())
        .then(html => {
            datos.innerHTML = html;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}


function obtenerCalendario(){

    var mes =document.getElementById('mes').value;
    var anio =document.getElementById('anio').value;
    var contenido=document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", `calendario.php?mes=${mes}&anio=${anio}`, true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML= ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}