<?php 
    include('conexion.php');

    $get_clases = mysqli_query($connection, "SELECT * FROM clases");
?>

<div class="cont_clases">
    <?php while($clase = mysqli_fetch_assoc($get_clases)) { ?>
        <div class="cont_clase">
            <h4>La clase <?php echo $clase['unidad'] ?> será el día <?php echo $clase['fecha'] ?></h4>
        </div>
    <?php } ?>    
</div>

