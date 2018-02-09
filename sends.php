<?php

function sendLogin($senderId, $accessToken){
	
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' : {
            'type' : 'template',
            'payload' : {
              'template_type' : 'generic',
              'elements' : [{
            	'title' : 'Bem-Vindo ao Campus',
            	'image_url' : 'https://scontent.fplu7-1.fna.fbcdn.net/v/t1.0-9/22309000_2009983749287533_3197908685617239037_n.jpg?oh=3f2d4a69228227e25628163a57d7161a&oe=5A9AE7AA',
            	'buttons' : [{
            		'type' : 'account_link',
            		'url' : 'https://chatbotcv-pdehon.c9users.io/telavinculacao.php?idfacebook=$senderId'
            	}]
              }]
            }
          }
        }
    }";
    
	$options = array(
	  'http' => array(
		'method'  => 'POST',
		'content' => $response ,
		'header'=>  "Content-Type: application/json\r\n" .
					"Accept: application/json\r\n"
		)
	);

	$context  = stream_context_create( $options );
	$url = 'https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken;
	$result = file_get_contents( $url, false, $context );
	
}

//envia menu
function sendMenu($menu, $accessToken, $senderId){

	$options = array(
	  'http' => array(
		'method'  => 'POST',
		'content' => $menu ,
		'header'=>  "Content-Type: application/json\r\n" .
					"Accept: application/json\r\n"
		)
	);

	$context  = stream_context_create( $options );
	$url = 'https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken;
	$result = file_get_contents( $url, false, $context );
}

//envia imagem
function sendImage($image, $userID, $accessToken){
    
    $response = "{
        'recipient' : {
          'id' : '$userID'
        },
        'message' : {
          'attachment' : {
            'type' : 'image',
            'payload' : {
              'url' : '".$image."'
            }
          }
        }
    }";
    
	$options = array(
	  'http' => array(
		'method'  => 'POST',
		'content' => $response ,
		'header'=>  "Content-Type: application/json\r\n" .
					"Accept: application/json\r\n"
		)
	);

	$context  = stream_context_create( $options );
	$url = 'https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken;
	$result = file_get_contents( $url, false, $context );
}

//envia texto
function sendTextMessage($message, $senderId, $accessToken){
    
    $response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'text' : '".$message."'
        }
    }";
    
	$options = array(
	  'http' => array(
		'method'  => 'POST',
		'content' => $response ,
		'header'=>  "Content-Type: application/json\r\n" .
					"Accept: application/json\r\n"
		)
	);

	$context  = stream_context_create( $options );
	$url = 'https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken;
	$result = file_get_contents( $url, false, $context );
}


?>