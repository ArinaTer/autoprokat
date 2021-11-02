<?php

//======================================================================
// Send Mail config
//======================================================================

// Recipient email address.
$to = "avtoprokatuz@mail.ru";

// Templates for response.
$templates = array(
    'success' => '<div>Ваш запрос был успешно отправлен!</div>',
    'error'   => '<div>Ваш запрос не может быть обработан в данный момент.</div>'
);

// Default subject.
$subject = "Письмо с сайта autoprokat.uz";

//-----------------------------------------------------
// Send Mail body
//-----------------------------------------------------

$name = $phone = $email = $startTime = $endTime = $car = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    $startTime = test_input($_POST["start-time"]);
    $endTime = test_input($_POST["end-time"]);
    $car = test_input($_POST["car"]);
}

if(!empty($name) && !empty($phone) && !empty($car)) {
    $headers .= "From: autoprokat.uz <robot@autoprokat.uz>";

    $body = "Имя: " . $name . "\r\n" .
        "Телефон: " . $phone . "\r\n";

    if(!empty($email)) {
        $body .= "E-mail: " . $email . "\r\n";
        $headers .= "\nReply-To: $email";
    }

    if(!empty($startTime)) {
        $body .= "Дата получения: " . $startTime . "\r\n";
    }

    if(!empty($startTime)) {
        $body .= "Дата возврата: " . $endTime . "\r\n";
    }

    $body .= "Автомобиль: " . $car . "\r\n" .
        "==============================";

    $mailStatus = mail($to,$subject,$body,$headers);

    generateResponse($mailStatus, $templates);
} else {
    generateResponse(0, $templates);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function generateResponse($_mailStatus, $_templates) {
    if($_mailStatus == 1) {
        $response = $_templates['success'];
    } else {
        $response = $_templates['error'];
    }

    echo $response;
}