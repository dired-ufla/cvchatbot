<?php
/*
//comecar : variável de iniciar o bot
//avaliar : clicou em avaliar no menu
//pular : clicou em pular configurações

// verificar a senha
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}

// conectar com facebook
$input = json_decode(file_get_contents('php://input'), true);
$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];
$clicou = $input['entry'][0]['messaging'][0]['postback']['payload'];
$authorization_code = $input['entry'][0]['messaging'][0]['account_linking']['authorization_code'];
$status_linked = $input['entry'][0]['messaging'][0]['account_linking']['status'];

if(!empty($clicou))
{
  eventos($clicou, $senderId, $accessToken);
}

if(!empty($authorization_code) && !empty($status_linked))
{
  sendTextMessage("Login Efetuado com Sucesso", $senderId, $accessToken);
  sendTextMessage($authorization_code, $senderId, $accessToken);
  //sendTextMessage($status_linked, $senderId, $accessToken);
}

*/

include "config.php";
include "sends.php";
include "functions.php";
include "payloads.php";

$hubVerifyToken = "chatbotCV";
$accessToken = "EAAVKUr1VS74BAMPr6C4MPe0T7OZAn2tNfDzYiaLf2ynOTKZAVNwbvA4ZCPjdNj0FzJAInydhzcG103KbOSMiKacZBYI8RqSsTwFe9AMsiXEFHZCCnxfZBgWCbYqB5jNkWx4eFbJmiP4ZAMj35c7JTx600aYEJgx8LIcVRINQFhiC1HSa9gHZCTeedoRCv0rwqwgZD";

// verificar a senha
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}

// Ler mensagem do facebook
$input = json_decode(file_get_contents('php://input'), true);
$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];
$clicou = $input['entry'][0]['messaging'][0]['postback']['payload'];

if(!empty($messageText))
{
  sendTextMessage($messageText, $senderId, $accessToken);
}

if(!empty($clicou))
{
  eventos($clicou, $senderId, $accessToken);
}

?>
