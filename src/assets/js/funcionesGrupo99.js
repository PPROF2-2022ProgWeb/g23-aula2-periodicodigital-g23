const fechaNacimiento = document.getElementById("fechaNacimiento");
const edad = document.getElementById("edad");

const calcularEdad = (fechaNacimiento) => {
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());


    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load', function () {

    fechaNacimiento.addEventListener('change', function () {
        if (this.value) {
            edad.innerText = `Tienes ${calcularEdad(this.value)} años de edad`;
        }
    });

});

    function mOver(obj)
    {
    obj.innerHTML="<center><h5>¿Querés recibí en tu correo las últimas publicaciones, comentar y disfrutar de la mejor información escolar?</h5></center>"
    }
    
    function mOut(obj)
    {
    obj.innerHTML="<h4>¡Completá con tus datos y dale click al botón enviar!</h4>"
    }
    

function validarFormulario() {
    'use strict'
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          } else{
            confirmEnvio()
            event.preventDefault()
            return;
          }
          form.classList.add('was-validated')
        }, false)
      })
      
  }
  
function validaRegistro() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        } else {
          mostrarDatosDeRegistro()
        }
        form.classList.add('was-validated')
      }, false)
    })
    
    return false;
}

function soloLetras(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toString();
  letras= " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóúÁÉÍÓÚ";
  especiales= "08-37-38-46-164";
  tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla) == -1 && !tecla_especial){
      mensajeError();  
      return false;
    }

}

function validaLongitud(e) {
  if (e.value.length < 2 ) {
    mensajeError(); 
    e.value= '';
    e.focus();
    e.select();
  }
}

function validaCP(e){
  if(isNaN(e.value)){
    mensajeError(); 
    e.value= '';
    e.focus();
    e.select();
  }
}

function validaPass(e){
  if (e.value.length <8 || e.value.length >12){
    mensajeError(); 
    e.value= '';
    e.focus();
    e.select();
  }
}

function mensajeError(){
  Swal.fire({
    toast: true,
    icon: 'error',
    title: 'El valor ingresado es incorrecto',
    confirmButtonText: 'Aceptar',
    confirmButtonColor: '#cf372d'
  })
}

function confirmEnvio() {
  Swal.fire({
    title: 'Se ha enviado su mensaje con éxito!!',
    icon: 'success',
    footer: 'Aguarde un momento que será redireccionado al Inicio',
    timer: '4500',
    timerProgressBar: true,
    showConfirmButton: false,    
    html: '<a href="index.html">Presione aquí para ir al Inicio</a>'
  });
  myForm.reset()
  setTimeout(function redirect(){
    window.location.href='enviarFormulario.php', false;
}, 4500);
}

function mostrarDatosDeRegistro(){
  var className = "encabezado-datos";
  var nacCliente = new Date(document.getElementById('start').value);
  var fechaActual = new Date();
  var edad = fechaActual.getFullYear() - nacCliente.getFullYear();
  var nombreCliente = document.getElementById('username').value;
  var paisCliente = document.getElementById('country').value;
  var provinciaCliente = document.getElementById('province').value;
  var ciudadCliente = document.getElementById('city').value;
  var direccionCliente = document.getElementById('adress').value;
  var apellidoCliente =  document.getElementById('surname').value;
  var emailCliente = document.getElementById('email-registro').value;
  const formularioDeRegistro = document.getElementById('cont1');
  const contenedorDeDatos = document.getElementById('contenedor-datos');

  formularioDeRegistro.classList.add('borrar');
  contenedorDeDatos.classList.add('contenedorDatos');

  if(contenedorDeDatos.getElementsByClassName(className).length == 0){
    var encabezadoDatos = document.createElement("h4");
    encabezadoDatos.className = className;
    encabezadoDatos.textContent = "Felicidades " + nombreCliente + " " + apellidoCliente + "! ya sos parte de helpU. En breve recibiras informacion en tu correo electronico " + emailCliente + " con los pasos a seguir. En helpU buscamos ayudar a personas de todas las edades por lo que con tus " + edad + " años de edad sos mas que bienvenid@!." + " Según lo que ingresaste te encontrás en: " + direccionCliente + " " + ciudadCliente + ", " + provinciaCliente + ", " + paisCliente;
    contenedorDeDatos.appendChild(encabezadoDatos);
  }
  setTimeout(function redirect(){
    window.location.href='index.html', false;
  }, 4500);
}