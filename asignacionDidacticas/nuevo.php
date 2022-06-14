<?php
	require '../environmentConexion.php';

	$sqlProfesores = "SELECT * FROM res_profesor";
	$resultadoProfesores = $mysqli->query($sqlProfesores);

	
	$sqlDidacticas = "SELECT * FROM res_didactica";
	$resultadoDidacticas = $mysqli->query($sqlDidacticas);

	$sqlEspacio = "SELECT * FROM res_espacio";
	$resultadoEspacio = $mysqli->query($sqlEspacio);
?>

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styleNuevo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="../../../icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./css/materialize.min.css" media="screen,projection" />
    <!--<link type="text/css" rel="stylesheet" href="../css/estilo.css"/>-->
    <script src="../../../npm/chart.js%402.9.4/dist/Chart.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <nav>
        <div class="nav-wrapper">
            <!--- <a href="#" class="brand-logo">Tecno</a>  --->
            <img src="../images/logofinal.jpg" alt="" class="circle responsive-img brand-logo" width="50" height="50" />
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../resumen/llevo04.php">Resumen</a></li>
                <li><a href="../cronograma/cro02.php">Cronograma</a></li>
                <li><a href="plantilla_pensamientos.php.html">Pensamientos</a></li>
                <li>
                    <a href="../gra_pens_espacio/graficapensamientosporespacio.php">Perfil Pensamientos</a>
                </li>
                <li>
                    <a href="../circulos_pensamientos/circulo9.php">Map Saberes</a>
                </li>
                <li><a href="../jerarquia/jerarquia6.php">Map Curriculo</a></li>
                <li><a href="../teoria/teoria6.php">Teoria</a></li>
                <li><a href="../pdf/e.php?id=1">Descargar Docos</a></li>
                <li><a href="../gra/grafo02.php">CBasicas</a></li>
                <li><a href="../mermaid/eje06.php">AProfesional</a></li>
                <li>
                    <a
                        href="https://udistritaleduco-my.sharepoint.com/:p:/g/personal/lwanumen_udistrital_edu_co/ETlq6HP7_FFFquANLo8yrkcBh-t8ueHYb70shZI797XpBA?rtime=P-E6y80i2kg">Con
                        Curriculares</a>
                </li>
                <li>
                    <a
                        href="https://udistritaleduco-my.sharepoint.com/:x:/g/personal/lwanumen_udistrital_edu_co/EUbAFHIBBNlNp164tADJa0EBz7sNiU0oYTxB2HTobWGbzw">ObjetosEstudio</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <img src="../images/ingresarDidactica.png" class="img-fluid" alt="Ingresar didáctica">
        <br>
        <br>
        <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>

                <select class="custom-select" id="inputGroupSelect01" require>
                    <option selected>Escoge profesor</option>
                    <?php while($row = $resultadoProfesores->fetch_array(MYSQLI_ASSOC)) { ?>
                    <option><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" require>
                    <option selected>Escoge didáctica</option>
                    <?php while($row = $resultadoDidacticas->fetch_array(MYSQLI_ASSOC)) { ?>
                    <option><?php echo $row['descripcion']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" require>
                    <option selected>Escoge materia</option>
                    <?php while($row = $resultadoEspacio->fetch_array(MYSQLI_ASSOC)) { ?>
                    <option><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <form class="form-floating">
                <div class="form-group">
                    <a href="index.php" class="btn btn-default">VER DESCRIPCIONES DIDÁCTICAS</a>
                    &nbsp&nbsp&nbsp&nbsp
                    <a href="../estrategiasDidacticas/index.php" class="btn btn-default">Regresar</a>
                    &nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
    </div>
</body>

</html>