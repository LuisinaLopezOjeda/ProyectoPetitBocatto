<?php
    //declaro las variables para guardar la información
    $nombre= $_POST['nombre'];
    $mail= $_POST['email'];
    $tel= $_POST['tel'];
    $mensaje= $_POST['mensaje'];

    //configuro los parátros del mail: destinatario y asunto
    $para='luisinalopez@gmail.com';
    $asunto='Presupuesto solicitado desde la web';

    mail($para,$asunto,utf8_decode($nombre,$mail,$tel,$mensaje));


