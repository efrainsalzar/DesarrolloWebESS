function obtenerTabla(){
    var contenido=document.getElementById('tabla');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", "leer.php", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML= ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function obtenerformulario(){
    var contenido=document.getElementById('formulario');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", "formulario.html", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML= ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function insertarDatos(){
    
    titulo = document.getElementById('titulo').value;
    editorial = document.getElementById('editorial').value;
    autor = document.getElementById('autor').value;
    anio = document.getElementById('anio').value;

    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", `insertar.php?
                                   titulo=${titulo}&
                                   autor=${autor}&
                                   editorial=${editorial}&
                                   anio=${anio}&
    `, true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            obtenerTabla();
        }
    }
    ajax.send(); 
}

function editar(id){

    operacion = document.getElementById('operacion');
    var contenido=document.getElementById('formulario');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", `formulario.php?id=${id}`, true);

    operacion.innerHTML=`Operacion Editar`;

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML= ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function editarDatos(){

    operacion = document.getElementById('operacion');
    id = document.getElementById('id').value;
    titulo = document.getElementById('titulo').value;
    editorial = document.getElementById('editorial').value;
    autor = document.getElementById('autor').value;
    anio = document.getElementById('anio').value;

    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", `insertar.php?id=${id}&
                                   titulo=${titulo}&
                                   autor=${autor}&
                                   editorial=${editorial}&
                                   anio=${anio}&
    `, true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            obtenerTabla();
        }
    }
    ajax.send(); 
}

function mostrar(id){

    operacion = document.getElementById('operacion');
    var contenido=document.getElementById('formulario');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", `formulario.php?id=${id}`, true);

    operacion.innerHTML=`Operacion Mostrar`;

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML= ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function borrar(id){
    alert("Seguro que quieres borrar esta informacion");
    console.log("elemento borrado"+id);
    operacion = document.getElementById('operacion');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 
    ajax.open("get", `borrar.php?id=${id}`, true);

    operacion.innerHTML=`Operacion Borrado`;

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            obtenerTabla();
        }
    }
    ajax.send();
}