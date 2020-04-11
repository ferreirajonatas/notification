<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$newEmail = new Email(
    2,
    "mail.host.com",
    "your@email.com",
    "your-pass",
    "smtp secure (tls / ssl)",
    "587",
    "from@email.com",
    "From Name"
);
$newEmail->sendMail(
    "email subject",
    "<p>This is a <b>test</b> email!</p>",
    "reply@email.com",
    "Replay Name",
    "address@email.com",
    "Address Name"
);

var_dump($newEmail);