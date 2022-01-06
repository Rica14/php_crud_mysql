<?php
include("db.php");
$Circuito= '' ;
$Direccion_del_Tramo = '' ;
$Usuarios = '' ;
$Demanda_kW = '' ;
$Fases = '' ;  
$Tipo_Equipo = '' ;

if  (isset($_GET['Seleccionamiento_Inicial_anc'])) {
  $Seleccionamiento_Inicial_anc = $_GET['Seleccionamiento_Inicial_anc'];
  $query = "SELECT * FROM subestacion_anc_santa_ana_chiauhtempan_todos_los_circuitos WHERE Seleccionamiento_Inicial_anc=$Seleccionamiento_Inicial_anc";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $Circuito = $row['Circuito'];
    $Direccion_del_Tramo = $row['Direccion_del_Tramo'];
    $Usuarios = $row['Usuarios'];
    $Demanda_kW = $row['Demanda_kW'];
    $Fases = $row['Fases'];
    $Tipo_Equipo = $row['Tipo_Equipo'];
  }
}

if (isset($_POST['update'])) {
  $Seleccionamiento_Inicial_anc = $_GET['Seleccionamiento_Inicial_anc'];
  $Circuito= $_POST['Circuito'];
  $Direccion_del_Tramo = $_POST['Direccion_del_Tramo'];
  $Usuarios = $_POST['USuarios'];
  $Demanda_kW = $_POST['Demanda_kW'];
  $Fases = $_POST['Fases'];
  $Tipo_Equipo = $_POST['Tipo_Equipo'];

  $query = "UPDATE subestacion_anc_santa_ana_chiauhtempan_todos_los_circuitos set 
  Circuito = '$Circuito', Direccion_del_Tramo = '$Direccion_del_Tramo', Usuarios = '$Usuarios',
  Demanda_kW = '$Demanda_kW', Fases = '$Fases', Tipo_Equipo = '$Tipo_Equipo' WHERE Seleccionamiento_Inicial_anc=$Seleccionamiento_Inicial_anc";
  mysqli_query($conn, $query);
  
  $_SESSION['message'] = 'Campo actualizado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: crud.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?Seleccionamiento_Inicial_anc=<?php echo $_GET['Seleccionamiento_Inicial_anc']; ?>" method="POST">
        
      <div class="form-group">
        <input name="Circuito" type="varchar" class="form-control" value="<?php echo $Circuito; ?>" placeholder="Actualizar Circuito">
      </div>
          
      <div class="form-group">
        <textarea name="Direccion_del_Tramo" class="form-control" cols="30" rows="10"><?php echo $Direccion_del_Tramo;?></textarea>
      </div>
          
      <div class="form-group">
        <input name="Usuarios" type="int" class="form-control" value="<?php echo $Usuarios; ?>" placeholder="Actualizar Usuario">  
      </div>

      <div class="form-group">
        <input name="Demanda_kW" type="int" class="form-control" value="<?php echo $Demanda_kW; ?>" placeholder="Actualizar Demanda kW">
      </div>

      <div class="form-group">
        <input name="Fases" type="int" class="form-control" value="<?php echo $Fases; ?>" placeholder="Actualizar Fases">
      </div>
      
      <div class="form-group">
        <textarea name="Tipo_Equipo" class="form-control" cols="30" rows="10"><?php echo $Tipo_Equipo;?></textarea>
      </div>
 

        <button class="btn-success" name="update">
        Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

