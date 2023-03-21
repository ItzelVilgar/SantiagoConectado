<iframe src="menu.html"></iframe>
<!--registro-->
<form action="Ruta.php" method="post">
   <div class="Registro">
    
    <h1>Registro de rutas</h1>
    
    <div class="ruta">
        
      <div class="pregunta">
        
        <input type="text" id="Nombre_Ruta"required="required">
        <span>Nombre de la ruta</span>
        </div>
        <div class="pregunta"></div>
        <div class="pregunta">
        
        <input type="text" id="Inicio_Ruta"required="required">
        <span>Inicio de ruta</span>
        </div>

        <div class="pregunta-number">
        
        <input type="time" id="HoraI_Ruta"required="required">
        <span>Hora de inicio</span>
        </div>
        <div class="pregunta">
        
        <input type="text" id="Termino_Ruta"required="required">
        <span>Termino de ruta</span>
        </div>

        <div class="pregunta-number">
        
        <input type="time" id="HoraT_Ruta" required="required">
        <span>Hora de termino</span>
        </div>

        <div class="pregunta">
        <label for="intervalo">Intervalo de tiempo:</label>
            <select id="Intervalo" name="Intervalo">
            <option value="-" valid="none">--</option>
            <option value="5">5 minutos</option>
            <option value="10">10 minutos</option>
            <option value="15">15 minutos</option>
            <option value="20">20 minutos</option>
            <option value="25">25 minutos</option>
            <option value="30">30 minutos</option>
            <option value="35">35 minutos</option>
            <option value="40">40 minutos</option>
            <option value="45">45 minutos</option>
            <option value="50">50 minutos</option>
            <option value="55">55 minutos</option>
            <option value="60">60 minutos</option>
            </select>
        </div>
        </div>

        <!---<div class="titulo2">
          <h2>Fotos</h2>
        </div><br>
        <div class="titulo2"><p>Si desea eliminar una foto, solo de click sobre ella</p></div>
        <div class="Fotos">
          <section id="Images">
          <div class="add-photo-container">
            <div class="col-photo">
              <div class="add-new-photo" id="add-photo">
                <i class="fa-thin fa-images"></i>
              </div>
            </div>
            <input type="file" multiple id="add-new-photo" name="images[]">
          </div>
        </section>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

-->
    


        <div class="titulo2"><h2>Detalles</h2></div>
    <div class="Detalles">
      <div class="pregunta-number">
        
        <input type="number" id="Pasaje" name="Pasaje" min="0" step="0.01" placeholder="0.00" required="required">
        <span>Cobro de pasaje</span>
        </div>
        <div class="pregunta-number">
        
        <input type="number" id="Distancia_en_km"required="required">
        <span>Distancia recorrida en Km</span>
        </div>
      

     <div class="pregunta">
          <label for="N_Paradas">Numero de paradas:</label>
              <select id="N_Paradas" name="N_Paradas">
                <option value="-">-</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              </select>
          </div>
          <div class="pregunta">
        
        <input type="text" id="Observaciones"required="required">
        <span>Observaciones adicionales</span>
        </div>
        
  <!--         
    </div>

    <div class="titulo2"><h2>Paradas oficiales</h2></div>
    <div class="Paradas" style="align-content: center; justify-content: center;">
      <div class="Paradas" style="display: flex;"></div>
-->

</div> 
</form>


<div class="boton">
  <button class="custom-btn btn-5" type="submit"><span style="font-size: 25px;display: flex; padding: 2px 23px;">Guardar</span></button>
</div>

<!--registro-->

<script src="modal.js"></script>
</body>
</html>


<?php 
    required 'conexion.php'
    // Código PHP para procesar el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Nombre_Ruta = $_POST['Nombre_Ruta'];
        $Inicio_Ruta = $_POST['Inicio_Ruta'];
        $Termino_Ruta= $_POST['Termino_Ruta'];
        $HoraI_Ruta = $_POST['HoraI_Ruta'];
        $HoraT_Ruta = $_POST['HoraT_Ruta'];
        $Intervalo= $_POST['Intervalo']; 
        $Pasaje = $_POST['Pasaje'];
        $Distancia_en_km = $_POST['Distancia_en_km'];
        $N_Paradas= $_POST['N_Paradas'];
        $Observaciones= $_POST['Observaciones'];
    
    $InsertarDatos="INSERT INTO Rutas(Nombre_Ruta, Inicio_Ruta,
    Termino_Ruta, HoraI_Ruta, HoraT_Ruta, Intervalo, Pasaje, Distancia_en_km,
    N_Paradas, Observaciones) Values ('$Nombre_Ruta','$Inicio_Ruta',
    '$Termino_Ruta','$HoraI_Ruta','$HoraT_Ruta','$Intervalo','$Pasaje','$Distancia_en_km',
    '$N_Paradas','$Observaciones')";
    $ejecutarInsertar=mysqli_query($enlace, $InsertarDatos);

    if(!$ejecutarInsertar){
        echo"Error en la linea de SQL";
    }
}       
?>