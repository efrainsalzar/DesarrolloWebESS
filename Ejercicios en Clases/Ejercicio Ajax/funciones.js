function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest(); // Crea el objeto AJAX
    ajax.open("GET", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                try {
                    var personas = JSON.parse(ajax.responseText);
                    console.log(personas);

                    // Limpiar contenido previo
                    contenido.innerHTML = "";

                    let elementotabla = document.createElement("table");
                    contenido.appendChild(elementotabla);

                    // Crear encabezado de la tabla
                    let encabezado = document.createElement("tr");
                    encabezado.style.backgroundColor = "blue";
                    encabezado.style.color = "white";
                    elementotabla.appendChild(encabezado);

                    let headers = ["ID", "Nombres", "Apellidos", "Edad", "Sexo"];
                    headers.forEach(headerText => {
                        let th = document.createElement("th");
                        th.textContent = headerText;
                        encabezado.appendChild(th);
                    });

                    // Crear filas de la tabla
                    for (let i = 0; i < personas.length; i++) {
                        let elementotr = document.createElement("tr");
                        if (i % 2 == 0) {
                            elementotr.style.backgroundColor = "white";
                        } else {
                            elementotr.style.backgroundColor = "grey";
                        }
                        elementotabla.appendChild(elementotr);

                        let elementotd1 = document.createElement("td");
                        elementotd1.innerHTML = personas[i].id;
                        elementotr.appendChild(elementotd1);

                        let elementotd2 = document.createElement("td");
                        elementotd2.innerHTML = personas[i].nombres;
                        elementotr.appendChild(elementotd2);

                        let elementotd3 = document.createElement("td");
                        elementotd3.innerHTML = personas[i].apellidos;
                        elementotr.appendChild(elementotd3);

                        let elementotd4 = document.createElement("td");
                        elementotd4.innerHTML = personas[i].edad;
                        elementotr.appendChild(elementotd4);

                        let elementotd5 = document.createElement("td");
                        elementotd5.innerHTML = personas[i].sexo;
                        elementotr.appendChild(elementotd5);
                    }
                } catch (e) {
                    console.error("Error parsing JSON: ", e);
                }
            } else {
                console.error("HTTP Error: " + ajax.status);
            }
        }
    };
    ajax.onerror = function () {
        console.error("Request failed");
    };
    ajax.send();
}