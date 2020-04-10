<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail(
    "Assunto de teste",
    "<p>Esse é um e-mail de <b>teste</b>!</p>",
    "user@example.com",
    "User1",
    "user@example.com",
    "User 2"
);

var_dump($novoEmail);