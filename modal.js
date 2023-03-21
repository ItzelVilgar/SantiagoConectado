const usuario = document.getElementById ('user')
const contraseña = document.getElementById ('password')
const btniinicio = document.getElementById ('btninicio')

function mostrarModal() {
    alert("llegue");
    var modal = document.getElementById("myModal");
    modal.modal("show");
  }

  btninicio.addEventListener('click', function() {
    mostrarModal();
  });
  
btniinicio.addEventListener ('click', (e) => {
    e.preventDefault()
    const data = {
        usuario: usuario.value,
        contraseña: contraseña.value,
    }
    console.log(data)
})

  

// Obtener el botón que abre la ventana modal
var btn = document.getElementById("myBtn");

// Obtener el elemento de la ventana modal
var modal = document.getElementById("myModal");

// Obtener el elemento de cierre de la ventana modal
var span = document.getElementsByClassName("close")[0];

// Cuando se haga clic en el botón, mostrar la ventana modal
btn.onclick = function() {
  modal.style.display = "block";
}

// Cuando se haga clic en el elemento de cierre, ocultar la ventana modal
span.onclick = function() {
  modal.style.display = "none";
}

// Cuando el usuario haga clic en cualquier parte fuera de la ventana modal, ocultarla
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
