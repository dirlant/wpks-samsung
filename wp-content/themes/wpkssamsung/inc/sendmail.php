<?php 

	
	if (isset($_POST['enviar'])):

    $nombre = sanitize_text_field( $_POST['nombre']);
    $fecha = sanitize_text_field( $_POST['fecha']);
    $correo = sanitize_text_field( $_POST['correo']);
    $telefono = sanitize_text_field( $_POST['telefono']);
    $mensaje = sanitize_text_field( $_POST['mensaje']);

	}
	
	echo 'paso por aqui'; 
	//wp_mail( $to, $subject, $message, $headers = '', $attachments = array() )

?>