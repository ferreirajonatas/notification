<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$newEmail = new Email;
$newEmail->sendMail(
    "Assunto de teste",
    "<p>This is a <b>test</b> email!</p>",
    "user@example.com",
    "User1",
    "user@example.com",
    "User 2"
);

var_dump($newEmail);