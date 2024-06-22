function preguntaDos(){
    const contenido= document.getElementById("contenido");
    contenido.innerHTML="";
    var datos = document.getElementById('barra-lat-izquierda');
    var ajax = new XMLHttpRequest() //crea el objeto ajax 

    ajax.open("get", "preguntaDos.html", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();


}

function preguntaTres() {
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = "";
    var datos = document.getElementById('barra-lat-izquierda');
    datos.innerHTML = "";
    var div = document.createElement("div");
    contenido.appendChild(div);

    fetch("pregunta3.php", {
        method: "GET",
        headers: {
            "Content-Type": "text/html; charset=utf-8"
        }
    })
    .then(response => response.text())
    .then(data => {
        div.innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}


function preguntaCuatro(){
    const contenido= document.getElementById("contenido");
    contenido.innerHTML="";
    var datos = document.getElementById('barra-lat-izquierda');
    datos.innerHTML="";
    var div = document.createElement("div");

    contenido.appendChild(div);
    fetch('pregunta4.html')
  .then(response => {
    return response.text();
  })
  .then(data => {
    div.innerHTML = data;
  })
  .catch(error => {
    console.error('Fetch error:', error);
  });
}

function departamentos() {
    var departamento = document.getElementById('departamento');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "departamentos.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            departamentos = JSON.parse(ajax.responseText)
            console.log(departamentos);
            console.log(departamento.value)

            for (i = 0; i < departamentos.length; i++) {
                let elemento = document.createElement("option");
                elemento.value = departamentos[i].id

                elemento.innerHTML = departamentos[i].departamento
                if (i==0)
                    {
                        elemento.selected=true;
                    }
                departamento.appendChild(elemento);

            }
           // obtenerprovincias();
        }
    }
    ajax.send();
}
function obtenerprovincias() {
    var provincia = document.getElementById('provincia');
    provincia.innerHTML='';
    var iddepartamento=document.getElementById('departamento').value;
    console.log(iddepartamento);
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "provincias.php?materia="+iddepartamento, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            provincias = JSON.parse(ajax.responseText)
            
            for (i = 0; i < provincias.length; i++) {
                let elemento = document.createElement("option");
                elemento.value = provincias[i].id
                elemento.innerHTML = provincias[i].provincia
                provincia.appendChild(elemento);

            }
        }
    }
    ajax.send();
}