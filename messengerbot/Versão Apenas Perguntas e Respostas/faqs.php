<?php

//Aqui você adiciona suas perguntas e respostas conforme exemplo:
if ($text === "teste") {
    sendMessage(array('recipient' => array('id' => $sender), 'message' => array("text" => 'testado')));
}

if ($text === "PERGUNTA") {
    sendMessage(array('recipient' => array('id' => $sender), 'message' => array("text" => 'RESPOSTA')));
}
?>