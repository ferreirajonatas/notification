<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$newEmail = new Email(
    2,
    "smtp",
    "youremail@example.com",
    "Password",
    "tls",
    "587",
    "sendemail@example.com",
    "Team name"
);
$newEmail->sendMail(
    "email subject",
    "<p>This is a <b>test</b> email!</p>",
    "user@example.com",
    "User1",
    "user@example.com",
    "User 2"
);

var_dump($newEmail);