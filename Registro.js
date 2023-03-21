

  //Fotos

  //Genera las previsualizaciones

  function createPreview(file) {
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function(e) {
      var preview = $("<div class='col-photo'><img src='" + e.target.result + "' style='width: 100%; height: 100%; object-fit: contain;'><span class='remove-photo'><i class='fa fa-times-circle'></i></span></div>");
      $("#Images").append(preview);
    }
  }
  

  function createPreview(file) {
    var imgCodified = URL.createObjectURL(file);
    var imgContainer = $('<div class="col-photo"></div>');
    var figure = $('<figure><img src="' + imgCodified + '" alt="Foto del usuario"><figcaption><i class="icon-cross"></i></figcaption></figure>');
    imgContainer.append(figure);
    $(imgContainer).insertBefore("#add-photo");
  }
  $(document).on("click", "#Images .col-photo img", function(e){
    e.preventDefault();
    e.stopPropagation();
    $(this).closest('.col-photo').remove();
  });
    
  
  //Abrir el inspector de archivos
  $(document).on("click", "#add-photo", function() {
    $("#add-new-photo").click();
  });

  //Cachamos el evento change
  $(document).on("change", "#add-new-photo", function(){
    console.log(this.files);
    var files = this.files;
    var element;
    var supportedImages = ["image/jpeg", "image/png"];
    var seEncontraronElementoNoValidos = false;

    for (var i = 0; i < files.length; i++){
      element = files[i];

      if (supportedImages.indexOf(element.type) != -1){
        createPreview(element);
      }
      else{
        seEncontraronElementoNoValidos = true;
      }
    }

    if(seEncontraronElementoNoValidos){
      showMessage("Se encontraron archivos no válidos");
    }
    else{
      showMessage("Todos los archivos se subieron correctamente");
    }
  });

  //Función para mostrar mensajes
  function showMessage(message) {
    alert(message);
  }
     // -> Cachamos el evento change
// Eliminar previsualizaciones
$(document).on("click", "#Images .col-photo img", function(e){
    e.preventDefault();
    e.stopPropagation();
    $(this).closest('.col-photo').remove();
});




//paradas

  // Obtener el elemento select y la sección de paradas
  const selectIntervalo = document.getElementById("intervalo");
  const paradas = document.querySelector(".Paradas");
  
  // Función para agregar los inputs de paradas
  function agregarInputs(numInputs) {
    for (let i = 1; i <= numInputs; i++) {
      const inputParada = document.createElement("div");
      inputParada.classList.add("pregunta-direccion");
      inputParada.innerHTML = `
        <input type="text" id="parada${i}" required="required">
        <span>Parada ${i}</span>
      `;
      paradas.appendChild(inputParada);
    }
  }
  
  
   // Función para remover los inputs de paradas adicionales
   function removerInputs(numInputs) {
      // Eliminamos inputs solo si hay más de los necesarios
      while (paradas.children.length > numInputs) {
        paradas.removeChild(paradas.lastChild);
      }
    }
  
    // Escuchar los cambios en el select
  selectIntervalo.addEventListener("change", (event) => {
    const numInputs = parseInt(event.target.value);
  
    // Si se seleccionó la opción "--", eliminar todos los inputs
    if (isNaN(numInputs)) {
      paradas.innerHTML = '';
      return;
    }
  
    // Eliminar los inputs adicionales si ya se habían creado
    removerInputs(numInputs);
  
    // Agregar los inputs de paradas necesarios
    agregarInputs(numInputs);
  });
  // Función para agregar los inputs de paradas
  function agregarInputs(numInputs) {
    // Eliminar los inputs existentes
    paradas.innerHTML = '';
  
    // Agregar los nuevos inputs
    for (let i = 1; i <= numInputs; i++) {
      const inputParada = document.createElement("div");
      inputParada.classList.add("pregunta-direccion");
      inputParada.innerHTML = `
        <input type="text" id="parada${i}" required="required">
        <span>Parada ${i}</span>
      `;
      paradas.appendChild(inputParada);
    }
  }
  
  