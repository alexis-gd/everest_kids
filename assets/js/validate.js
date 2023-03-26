// Eventos
// cuando damos click en el burger menu movil
document.querySelector(".ms-icon-img").addEventListener('click', function (event) {
    document.querySelector(".menu").classList.toggle("m-show");
});
// comentado
// cuando dan click en bolsa de trabajo
// document.querySelector(".bt-txt").addEventListener("click", function () {
//     document.querySelector(".bt-opciones").classList.toggle("d-none");
//     document.querySelector(".bt-form").classList.toggle("d-none");
//     document.querySelector("#bt_img1").classList.toggle("d-none");
//     document.querySelector("#bt_img2").classList.toggle("d-none");
// });
// Validar formulario de solicitud de información
document.getElementById('btn_solicitar').addEventListener('click', function (event) {
    event.preventDefault();
    if (variable("f_carrera").value == 0) {
        alertNotify("2500", "info", "Espera", "Selecciona alguna carrera.")
        inputWarning(variable("f_carrera"), "btn_solicitar");
        variable("f_carrera").focus();
        return false;
    }
    if (variable("f_nombre").value == 0) {
        alertNotify("2500", "info", "Espera", "Escribe tu nombre y apellidos.")
        inputWarning(variable("f_nombre"), "btn_solicitar");
        variable("f_nombre").focus();
        return false;
    }
    if (variable("f_nombre").value.length > 50) {
        alertNotify("2500", "warning", "Ups", "Nombre demaciado largo (Máx. 50 caracteres).")
        inputWarning(variable("f_nombre"), "btn_solicitar");
        variable("f_nombre").focus();
        return false;
    }
    if (variable("f_correo").value == 0) {
        alertNotify("2500", "info", "Espera", "Escribe tu correo electrónico.")
        inputWarning(variable("f_correo"), "btn_solicitar");
        variable("f_correo").focus();
        return false;
    }
    if (variable("f_correo").value.indexOf('@', 0) == -1 || variable("f_correo").value.indexOf('.', 0) == -1) {
        alertNotify("2500", "warning", "Ups", "Escribe un correo válido.")
        inputWarning(variable("f_correo"), "btn_solicitar");
        variable("f_correo").focus();
        return false;
    }
    if (variable("f_numero").value == 0) {
        alertNotify("2500", "info", "Espera", "Escribe tu número de teléfono.")
        inputWarning(variable("f_numero"), "btn_solicitar");
        variable("f_numero").focus();
        return false;
    }
    if (variable("f_numero").value.length != 10) {
        alertNotify("2500", "warning", "Ups", "Escribe un número válido (10 caracteres).")
        inputWarning(variable("f_numero"), "btn_solicitar");
        variable("f_numero").focus();
        return false;
    }
    if (isNaN(variable("f_numero").value)) {
        alertNotify("2500", "warning", "Ups", "Escribe solo números porfavor.")
        inputWarning(variable("f_numero"), "btn_solicitar");
        variable("f_numero").focus();
        return false;
    }
    if (variable("f_codigo").value.length > 0) {
        if (variable("f_codigo").value.length != 6) {
            alertNotify("2500", "error", "Ups", "Código no válido.")
            inputWarning(variable("f_codigo"), "btn_solicitar");
            variable("f_codigo").focus();
            return false;
        }
    }
    // Paso las validaciones

    grecaptcha.ready(function () {
        grecaptcha.execute('6Le6E8EZAAAAAM87kdkpGd0LzwqD8N4TQxj_2JOL', {
            action: 'registro'
        }).then(function (token) {

            const data = new FormData(document.getElementById('form_informacion'));
            data.append('token', token);
            data.append('action', 'registro');
            fetch('model/functions/form_info.php', {
                method: 'POST',
                body: data
            })
                .then(res => res.json())
                .then(data => {
                    if (data[0] == 1) {
                        alertNotify("5000", "success", "Excelente", "En breve nos pondremos en contacto contigo.");
                        cleanSelect("f_carrera");
                        cleanInput("f_nombre");
                        cleanInput("f_correo");
                        cleanInput("f_numero");
                        cleanInput("f_codigo");
                    } else {
                        alertNotify("5000", "warning", "Ups", "Al parecer ya te has registrado.");
                    }
                })

        });;
    });

});
// Validar formulario bolsa de trabajo
document.getElementById('btn_bt').addEventListener('click', function (event) {
    event.preventDefault();
    if (variableRadioCheck("trabajo") == null) {
        alertNotify("2500", "info", "Espera", "Selecciona un puesto de trabajo.")
        inputWarning(variableRadio("trabajo"), "btn_bt");
        variableRadio("trabajo").focus();
        return false;
    }
    if (variable("nombre_bt").value == 0) {
        alertNotify("2500", "info", "Espera", "Escribe tu nombre y apellidos.")
        inputWarning(variable("nombre_bt"), "btn_bt");
        variable("nombre_bt").focus();
        return false;
    }
    if (variable("nombre_bt").value.length > 50) {
        alertNotify("2500", "warning", "Ups", "Nombre demaciado largo (Máx. 50 caracteres).")
        inputWarning(variable("nombre_bt"), "btn_bt");
        variable("nombre_bt").focus();
        return false;
    }
    if (variable("correo_bt").value == 0) {
        alertNotify("2500", "info", "Espera", "Escribe tu correo electrónico.")
        inputWarning(variable("correo_bt"), "btn_bt");
        variable("correo_bt").focus();
        return false;
    }
    if (variable("correo_bt").value.indexOf('@', 0) == -1 || variable("correo_bt").value.indexOf('.', 0) == -1) {
        alertNotify("2500", "warning", "Ups", "Escribe un correo válido.")
        inputWarning(variable("correo_bt"), "btn_bt");
        variable("correo_bt").focus();
        return false;
    }
    if (variable("telefono_bt").value == 0) {
        alertNotify("2500", "info", "Espera", "Escribe tu número de teléfono.")
        inputWarning(variable("telefono_bt"), "btn_bt");
        variable("telefono_bt").focus();
        return false;
    }
    if (variable("telefono_bt").value.length != 10) {
        alertNotify("2500", "warning", "Ups", "Escribe un número válido (10 caracteres).")
        inputWarning(variable("telefono_bt"), "btn_bt");
        variable("telefono_bt").focus();
        return false;
    }
    if (isNaN(variable("telefono_bt").value)) {
        alertNotify("2500", "warning", "Ups", "Escribe solo números porfavor.")
        inputWarning(variable("telefono_bt"), "btn_bt");
        variable("telefono_bt").focus();
        return false;
    }
    // Paso las validaciones



    const data = new FormData(document.getElementById('form_bt'));
    // console.log(token)
    fetch('model/functions/form_trabajo.php', {
        method: 'POST',
        body: data
    })
        .then(res => res.json())
        .then(data => {
            if (data[0] == 1) {
                alertNotify("5000", "success", "Excelente", "En breve nos pondremos en contacto contigo.");
                variableRadioCheck("trabajo").checked = false;
                cleanInput("nombre_bt");
                cleanInput("correo_bt");
                cleanInput("telefono_bt");
            } else {
                alertNotify("5000", "warning", "Ups", "Al parecer ya te has registrado.");
            }
        })



});

// Funciones para validar formulario información
// Crear variables
function variable(name) {
    var name = document.getElementById(name);
    return name;
}
// Crear variables tipo radio button
function variableRadio(name) {
    var name = document.querySelector("input[name=" + name + "]");
    return name;
}
// Crear variables tipo radio button
function variableRadioCheck(name) {
    var name = document.querySelector("input[name=" + name + "]:checked");
    return name;
}
// Marcar un input con error y desabilitar un botón
function inputWarning(element, id_btn) {
    element.classList.add("input-error");
    disabled(id_btn);
    setTimeout(() => {
        element.classList.remove("input-error");
        enabled(id_btn);
    }, 1500);
}
// Limpiar un input
function cleanInput(id) {
    variable(id).value = "";
}
// Limpiar un select
function cleanSelect(id) {
    variable(id).value = 0;
}
// Desahabilitar un elemento
function disabled(id) {
    variable(id).disabled = true;
}
// Habilitar un elemento
function enabled(id) {
    variable(id).disabled = false;
}
// Mostrar Alerta
function alertNotify(timer, type, msj1, msj2) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: timer,
        timerProgressBar: true
    })
    Toast.fire({
        icon: type,
        title: '¡' + msj1 + '! ' + msj2
    })
}