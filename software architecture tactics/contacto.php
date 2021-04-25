<?php

 $para = 'nombre@correo.com';

 $titulo = 'Enviando email desde PHP';

 $cabeceras = 'MIME-Version: 1.0' . "\r\n";
 $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

 $cabeceras .= 'From: Mi Nombre';

 $mensaje = '<html>'.
	'<head><title>Email con HTML</title></head>'.
	'<body><h1>Email con HTML</h1>'.
	'Esto es un email que se envía en el formato HTML'.
	'<hr>'.
	'Enviado por mi programa en PHP'.
	'</body>'.
	'</html>';
  

    $enviado = mail($para, $titulo, $mensaje, $cabeceras);

    if ($enviado)
      echo 'Email enviado correctamente';
    else
      echo 'Error en el envío del email';









?>