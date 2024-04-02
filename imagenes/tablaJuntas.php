<?php
    $usuario = 'root';
    $contraseña = '';
    $host = 'localhost';
    $base = 'blu';

    try {
        $conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
    } catch (PDOException $e) {
        print "ERROR: " . $e->getMessage() . "<br/>";
        die();
    }

?>

<?php
    $query ="SELECT Al.id_alumno, Al.nombre, Al.edad,
                    Carr.nombre_carrera, Carr.area_carrera, 
                    Gru.nombre_grupo, Gru.turno
            FROM alumnos Al
            INNER JOIN carreras Carr ON Al.id_carrera = Carr.id_carrera
            INNER JOIN grupos Gru ON Al.id_grupo = Gru.id_grupo"

    $consulta= $conexion->query($query);
    while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
        echo "";
    }
?>

<?php
    $query ="SELECT con.fecha, con.hora,
                    ps.nombre, ps.apellido1, ps.telefono 
                FROM consulta con
                INNER JOIN psicologo ps ON con.idPsicologo = ps.idpsicologo";
/* INNER JOIN grupos Gru ON Al.id_grupo = Gru.id_grupo */

    $consulta= $conexion->query($query);
    while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
        echo "";
    }
?>