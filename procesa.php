<?php
$codigo = $_POST['estudiante'];
$nota = $_POST['tipoNota'];
$valor = $_POST['valor'];

$notasEstudiante =  array(

    "leonardo"=> array(
        "NomEstudiante"=>'Leonardo',
        "codEstudiante"=>123,
        "nota1"=>2,
        "nota2"=>3,
        "nota3"=>4
    ),
    "pedro"=> array(
        "NomEstudiante"=>"Pedro",
        "codEstudiante"=>456,
        "nota1"=>1,
        "nota2"=>2,
        "nota3"=>3
    ),
    "juan"=> array(
        "NomEstudiante"=>"Juan",
        "codEstudiante"=>789,
        "nota1"=>3,
        "nota2"=>4,
        "nota3"=>5

    )

);

switch ($codigo) {
    case 123:
        //echo "Ingreso este codigo 123";
        $codIndice = "leonardo";
        $notasEstudiante[$codIndice][$nota] = $valor;
        break;
    case 456:
        //echo "Ingrese este codigo 456";
        $codIndice = "pedro";
        $notasEstudiante[$codIndice][$nota] = $valor;
        break;
    case 789:
        //echo "Ingrese este codigo 789";
        $codIndice = "juan";
        $notasEstudiante[$codIndice][$nota] = $valor;
        break;
    default:
        echo'<script language="javascript">
                window.alert("Ingrese un codigo de estudiante correcto");
                window.location.href = "http://localhost/Nivelacion/";
            </script>';

}

foreach ($notasEstudiante as $dato){
    echo "<b>Codigo del estudiante :</b> ".$dato['codEstudiante']."<br>";
    echo "<b>Nombre del estudiante :</b> ".$dato['NomEstudiante']."<br>";
    echo "<b>Nota1 :</b> ".$dato['nota1']."<br>";
    echo "<b>Nota2 :</b> ".$dato['nota2']."<br>";
    echo "<b>Nota3 :</b> ".$dato['nota3']."<br>";
    echo "<br>";
}

?>