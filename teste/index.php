<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email('2',
    'mail.com.br',
    'user@mail.com.br',
    'password',
    'ssl',
    '465',
    'contato@mail.com.br',
    'Contato');
$novoEmail->sendMail("Teste",
    "<p>Esse é um e-mail de <b>teste</b>!</p>",
    "contato@mail.com.br",
    "Contato",
    "contato@mail.com.br",
    "Destinatario");