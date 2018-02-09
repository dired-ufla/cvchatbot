<?php

/*
function menuTipo($senderId, $accessToken){
  
  $response1 = "{
                'type':'template',
                'payload':{
                  'template_type':'button',
                  'text':'Escolha a opção referente ao seu curso',
                  'buttons':[
                    {
                      'title':'EAD',
                      'type':'postback',
                      'payload':'tipo_ead'
                    },
                    {
                      'title':'Presencial',
                      'type':'postback',
                      'payload':'tipo_presencial'
                    },
                    {
                      'title':'Login',
                      'type':'postback',
                      'payload':'login'
                    }
				          ]
                }
              }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//link para campus e confirmação de acesso RESOLVIDO
function menuCampus($senderId, $accessToken, $tipo){

  if($tipo == 'ead'){
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Acesse a página do ".$moodleName." com seu login e senha.',
                    'buttons':[
                      {
                        'type':'web_url',
                        'url':'http://ead.campusvirtual.ufla.br/',
                        'title':'Acessar'
                      }
  				          ]
                  }
                }";
  }else{
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Acesse a página do ".$moodleName." com seu login e senha.',
                    'buttons':[
                      {
                        'type':'web_url',
                        'url':'http://campusvirtual.ufla.br/',
                        'title':'Acessar'
                      }
  				          ]
                  }
                }";
  }

	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
  sendMenu($response, $accessToken, $senderId);
}

//Você conseguiu fazer o login no campus sim ou nao
function menuAcesseiCampus($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Você conseguiu fazer o login no '".$moodleName."'?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_campus_$tipo'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_campus_$tipo'
                      }
                    ]
                  }
                }";
				
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//Encontrou a opção modificar perfil
function menuAcesseiPerfil($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Encontrou a opção \"Modificar Perfil\"?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_perfil'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_perfil'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);	
}

//envia codigo de acesso para ser colocado no campus
function menuPerfilSim($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Copie o código $senderId no campo \"Código do Facebook Messenger\", aceite o termo de condições de uso e clique em \"Atualizar perfil\"',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Atualizei',
                        'payload':'atualizei'
                      }
                    ]
                  }
                }";
				
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//Tentativa de fazer login
function menuCampusNao($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Verifique seu login e senha e tente novamente',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Consegui',
                        'payload':'sim_campus_$tipo'
                      },
                      {
                        'type':'postback',
                        'title':'Ainda não deu certo',
                        'payload':'nao2_campus_$tipo'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//link para perfil do campus
function menuCampusSim($senderId, $accessToken, $tipo){
    
  if($tipo == "ead"){
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Acesse a página \"Modificar Perfil\" do '".$moodleName."'',
                    'buttons':[
                      {
                        'type':'web_url',
                        'url':'http://ead.campusvirtual.ufla.br/user/edit.php',
                        'title':'Acessar'
                      }
                    ]
                  }
                }";
  }else{
    $response1 = "{
                    'type':'template',
                    'payload':{
                      'template_type':'button',
                      'text':'Acesse a página \"Modificar Perfil\" do '".$moodleName."'',
                      'buttons':[
                        {
                          'type':'web_url',
                          'url':'https://campusvirtual.ufla.br/presencial/user/edit.php',
                          'title':'Acessar'
                        }
                      ]
                    }
                  }";
  }

	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

function suporte1($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Entre em contato com o suporte do '".$moodleName."' por meio do telefone (35) 3829-1909',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Regularizei o Acesso',
                        'payload':'regularizei1_$tipo'
                      }
                    ]
                  }
                }";
				
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//suporte
function suporte2($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Entre em contato com o suporte do '".$moodleName."' por meio do telefone (35) 3829-1909',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Regularizei',
                        'payload':'regularizei2'
                      }
                    ]
                  }
                }";

	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//mensagem de confirmação enviada
function menuSimConfirma($senderId, $accessToken){
    
	$response1 = "Seja bem-vindo ao chatbot do '".$moodleName."'.";
	$response2 = "A partir de agora, você receberá notificações sobre notícias do Mural de Recados,";
	$response3 = "bem como sobre novos módulos criados em suas salas virtuais.";
	
	sendTextMessage($response1, $senderId, $accessToken);
	sendTextMessage($response2, $senderId, $accessToken);
	sendTextMessage($response3, $senderId, $accessToken);
}

//mensagem para verificação de código do usuário
function menuNaoConfirma($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Verifique se o código de acesso $senderId foi informado corretamente, se o termo de condições de uso foi aceito e tente novamente.',
                      'buttons':[
                      {
                        'type':'postback',
                        'title':'Verifiquei',
                        'payload':'verificado'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//Recebeu mensagem de confirmação, sim, nao
function menuAtualizei($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Você recebeu uma mensagem de confirmaçao?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_confirma'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_verificado'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//Recebeu mensagem de confirmação, sim, nao
function menuVerifiquei($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Você recebeu uma mensagem de confirmaçao?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_confirma'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_verifiquei'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}
*/

function menuVincula($senderId, $accessToken){
  
  $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Como deseja se cadastrar?',
                    'buttons':[
                      {
                        'title':'Email institucional',
                        'type':'postback',
                        'payload':'email'
                      },
                      {
                        'title':'Outro',
                        'type':'postback',
                        'payload':'outro'
                      }
  				          ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
  
}

function menuTermo($senderId, $accessToken){
  
  $response1 = "{
                'type':'template',
                'payload':{
                  'template_type':'button',
                  'text':'Você aceita o termo de condições de uso?',
                  'buttons':[
                    {
                      'type':'web_url',
                      'url':'https://campusvirtual.ufla.br/cas/cvchatbot_ufla.php?fbid=$senderId',
                      'title':'Aceito'
                    },
                    {
                      'type':'postback',
                      'title':'Não aceito',
                      'payload':'nao_termo'
                    }
				          ]
                }
              }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
  
}

function tentarNovamente($senderId, $accessToken){
  
  $response1 = "{
                'type':'template',
                'payload':{
                  'template_type':'button',
                  'text':'Não foi possível efetuar seu cadastro.',
                  'buttons':[
                    {
                      'type':'postback',
                      'title':'Tentar novamente',
                      'payload':'comecar'
                    }
				          ]
                }
              }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
  
}

function menuConfirmaCadastro($senderId, $accessToken){
  
  $response1 = "{
                'type':'template',
                'payload':{
                  'template_type':'button',
                  'text':'Você aceitar o termo de uso?'
                  'buttons':[
                    {
                      'type':'postback',
                      'title':'Sim',
                      'payload':'sim'
                    },
                    {
                      'type':'postback',
                      'title':'Não',
                      'payload':'nao'
                    }
				          ]
                }
              }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
  
}

function menuTipo($senderId, $accessToken){
  
  $response1 = "{
                'type':'template',
                'payload':{
                  'template_type':'button',
                  'text':'Escolha a opção referente ao seu curso',
                  'buttons':[
                    {
                      'title':'EAD',
                      'type':'postback',
                      'payload':'tipo_ead'
                    },
                    {
                      'title':'Presencial',
                      'type':'postback',
                      'payload':'tipo_presencial'
                    }
				          ]
                }
              }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);

}

//link para campus e confirmação de acesso RESOLVIDO
function menuCampus($senderId, $accessToken, $tipo){

  if($tipo == 'ead'){
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Acesse a página do Campus Virtual com seu login e senha.',
                    'buttons':[
                      {
                        'type':'web_url',
                        'url':'http://ead.campusvirtual.ufla.br/',
                        'title':'Acessar'
                      }
  				          ]
                  }
                }";
  }else{
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Acesse a página do Campus Virtual com seu login e senha.',
                    'buttons':[
                      {
                        'type':'web_url',
                        'url':'http://campusvirtual.ufla.br/',
                        'title':'Acessar'
                      }
  				          ]
                  }
                }";
  }

	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
  sendMenu($response, $accessToken, $senderId);
}

//Você conseguiu fazer o login no campus sim ou nao
function menuAcesseiCampus($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Você conseguiu fazer o login no Campus Virtual?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_campus_$tipo'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_campus_$tipo'
                      }
                    ]
                  }
                }";
				
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//Encontrou a opção modificar perfil
function menuAcesseiPerfil($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Encontrou a opção \"Modificar Perfil\"?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_perfil'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_perfil'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);	
}

//envia codigo de acesso para ser colocado no campus
function menuPerfilSim($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Copie o código $senderId no campo \"Código do Facebook Messenger\", aceite o termo de condições de uso e clique em \"Atualizar perfil\"',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Atualizei',
                        'payload':'atualizei'
                      }
                    ]
                  }
                }";
				
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//Tentativa de fazer login
function menuCampusNao($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Verifique seu login e senha e tente novamente',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Consegui',
                        'payload':'sim_campus_$tipo'
                      },
                      {
                        'type':'postback',
                        'title':'Ainda não deu certo',
                        'payload':'nao2_campus_$tipo'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//link para perfil do campus
function menuCampusSim($senderId, $accessToken, $tipo){
    
  if($tipo == "ead"){
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Acesse a página \"Modificar Perfil\" do Campus Virtual',
                    'buttons':[
                      {
                        'type':'web_url',
                        'url':'http://ead.campusvirtual.ufla.br/user/edit.php',
                        'title':'Acessar'
                      }
                    ]
                  }
                }";
  }else{
    $response1 = "{
                    'type':'template',
                    'payload':{
                      'template_type':'button',
                      'text':'Acesse a página \"Modificar Perfil\" do Campus Virtual',
                      'buttons':[
                        {
                          'type':'web_url',
                          'url':'https://campusvirtual.ufla.br/presencial/user/edit.php',
                          'title':'Acessar'
                        }
                      ]
                    }
                  }";
  }

	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

function suporte1($senderId, $accessToken, $tipo){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Entre em contato com o suporte do Campus Virtual por meio do telefone (35) 3829-1909',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Regularizei o Acesso',
                        'payload':'regularizei1_$tipo'
                      }
                    ]
                  }
                }";
				
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//suporte
function suporte2($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Entre em contato com o suporte do Campus Virtual por meio do telefone (35) 3829-1909',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Regularizei',
                        'payload':'regularizei2'
                      }
                    ]
                  }
                }";

	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
    
    sendMenu($response, $accessToken, $senderId);
}

//mensagem de confirmação enviada
function menuSimConfirma($senderId, $accessToken){
    
	$response1 = "Seja bem-vindo ao chatbot do Campus Virtual.";
	$response2 = "A partir de agora, você receberá notificações sobre notícias do Mural de Recados,";
	$response3 = "bem como sobre novos módulos criados em suas salas virtuais.";
	
	sendTextMessage($response1, $senderId, $accessToken);
	sendTextMessage($response2, $senderId, $accessToken);
	sendTextMessage($response3, $senderId, $accessToken);
}

//mensagem para verificação de código do usuário
function menuNaoConfirma($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Verifique se o código de acesso $senderId foi informado corretamente, se o termo de condições de uso foi aceito e tente novamente.',
                      'buttons':[
                      {
                        'type':'postback',
                        'title':'Verifiquei',
                        'payload':'verificado'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//Recebeu mensagem de confirmação, sim, nao
function menuAtualizei($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Você recebeu uma mensagem de confirmaçao?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_confirma'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_verificado'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

//Recebeu mensagem de confirmação, sim, nao
function menuVerifiquei($senderId, $accessToken){
    
    $response1 = "{
                  'type':'template',
                  'payload':{
                    'template_type':'button',
                    'text':'Você recebeu uma mensagem de confirmaçao?',
                    'buttons':[
                      {
                        'type':'postback',
                        'title':'Sim',
                        'payload':'sim_confirma'
                      },
                      {
                        'type':'postback',
                        'title':'Não',
                        'payload':'nao_verifiquei'
                      }
                    ]
                  }
                }";
    
	$response = "{
        'recipient' : {
          'id' : '".$senderId."'
        },
        'message' : {
          'attachment' :" .$response1. "
        }
    }";
	
    sendMenu($response, $accessToken, $senderId);
}

?>
