<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Circuito = $_POST['Circuito'];
  $Direccion_del_Tramo = $_POST['Direccion_del_Tramo'];
  $Usuarios = $_POST['Usuarios'];
  $Demanda_kW = $_POST['Demanda_kW'];
  $Fases = $_POST['Fases'];
  $Tipo_Equipo = $_POST['Tipo_Equipo'];
  $query = "INSERT INTO subestacion_anc_santa_ana_chiauhtempan_todos_los_circuitos(Circuito, Direccion_del_Tramo, Usuarios, Demanda_kW, Fases, Tipo_Equipo ) VALUES ('$Circuito', '$Direccion_del_Tramo', '$Usuarios', '$Demanda_kW', '$Fases', '$Tipo_Equipo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Tarea guardada correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: crud.php');

}

?>