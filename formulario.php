<?php
  // Capturar datos del formulario
  $nombre = $_POST['inputName'];
  $telefono = $_POST['inputNumber'];
  $correo = $_POST['inputEmail'];
  $servicio = $_POST['selectService'];
  $mensaje = $_POST['textarea'];

  // Configurar el correo electrónico
  $para = "rickysalazar94@gmail.com";
  $asunto = "Mensaje del formulario de contacto";
  $mensajeCorreo = "Has recibido un mensaje del formulario de contacto de tu sitio web. Los detalles son:\n\nNombre: " . $nombre . "\nTeléfono: " . $telefono . "\nCorreo electrónico: " . $correo . "\nServicio: " . $servicio . "\nMensaje: " . $mensaje;
  $cabecera = "From: " . $correo;

  // Enviar correo electrónico
  if(mail($para, $asunto, $mensajeCorreo, $cabecera)) {
    // Mostrar mensaje de éxito
    echo "Gracias por contactarnos. Tu mensaje ha sido enviado correctamente.";
  } else {
    // Mostrar mensaje de error
    echo "Ha ocurrido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
?>