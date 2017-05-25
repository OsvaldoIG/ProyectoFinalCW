<?php
  session_start();
  $a=session_destroy();
  if($a)
  {
    echo "Sesión cerrada";
  }
  else
  {
    echo "Error al cerrar";
  }
?>
