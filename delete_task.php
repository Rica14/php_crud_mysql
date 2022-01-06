<?php

include("db.php");

if(isset($_GET['Seleccionamiento_Inicial_anc'])) {
  $Seleccionamiento_Inicial_anc = $_GET['Seleccionamiento_Inicial_anc'];
  $query = "DELETE FROM	subestacion_anc_santa_ana_chiauhtempan_todos_los_circuitos WHERE Seleccionamiento_Inicial_anc = $Seleccionamiento_Inicial_anc";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida.");
  }

  $_SESSION['message'] = 'Nombre eliminado con éxito';
  $_SESSION['message_type'] = 'danger';
  header('Location: crud.php');
}

?>