<?php 
    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $fecha_actual = date("Y-m-d");
?>
    <p>La fecha de hoy es: <?php echo $fecha_actual ?> </p>

<?php 
if($_POST) {
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];
        
    $fecha_form = $ano.'-'.$mes.'-'.$dia;
    
    $diferencia_de_fecha = strtotime($fecha_form) - strtotime($fecha_actual);

    $dias_restantes = $diferencia_de_fecha/86400;

    if($fecha_form <= $fecha_actual) {
        session_start(); // Inicia la sesión
        $_SESSION['fecha_pasada'] = "La fecha ingresada ya pasó";
    } else {
        session_start(); // Inicia la sesión
        $_SESSION['fecha_faltante'] = "Faltan: $dias_restantes días para la fecha seleccionada";
    }
    ?>
    <?php 
    header("Location: unidad2.php");
    ?>
<?php } ?>
    

