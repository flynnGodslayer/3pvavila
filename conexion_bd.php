<?php
function conectarBdPgsql() {
  $conexionBD = pg_connect(
    "host=127.0.0.1 port=5432 dbname=bdregistro user=postgres password=flynn961230"
  );
  if (!$conexionBD) {
    die('No se puede conectar con la Base de Datos');
  }
  return $conexionBD;
}
function queryPSQL($sql) {
  $conexionBD = conectarBdPgsql();
  $resultado = pg_query($conexionBD, $sql);
  pg_close($conexionBD);
  return $resultado;
}
?>
