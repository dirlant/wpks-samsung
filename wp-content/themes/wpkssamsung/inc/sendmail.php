<?php
  $to = $_REQUEST['name'];
  $from = $_REQUEST['name'];
  $headers = "Content-type: text/html;From: $from";

  $fields = array();
  $to = $fields["to"] = $_REQUEST['to'];	

  $fields["name"] = $_REQUEST['name'];
  $fields["email"] = $_REQUEST['email'];
  $fields["message"] = $_REQUEST['message'];

  $body = "Le ha llegado una solictud desde su página web:\n\n";
  $body .= 'Nombre : '.$fields['name']. '<br>';
  $body .= 'Email : '.$fields['email']. '<br>';
  $body .= 'Mensaje : '.$fields['message']. '<br>';

  echo 'to: '. $to .' nombre: '. $fields['name'] . ' email: '. $fields['email'] .' mensaje: '. $fields['message'];

  //$send = mail($to, $body, $headers);
?>