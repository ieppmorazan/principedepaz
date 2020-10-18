<?php
   $destino="ieppmorazan@gmail.com";
   $nombre= $_POST["nombre"];
   $correo= $_POST["correo"];
   $mensaje= $_POST["mensaje"];
   $contenio= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje" . $mensaje;
   mail($destino, "Contacto", $contenio);

?>