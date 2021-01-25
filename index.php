<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Teste",
    "<p>Esse é um e-mail de <b>teste</b>!</p>",
    "contato@mail.com.br",
    "Contato",
    "contato@mail.com.br",
    "Destinatario");