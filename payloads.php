<?php

//TRATA TODOS CLIQUES EM BOTÕES RECEBIDOS
function eventos($evento, $senderId, $accessToken){
    switch($evento){
      //inicio
      case login:
        sendLogin($senderId, $accessToken);
        break;
      case comecar:
        menuTipo($senderId, $accessToken);
        break;
      case outro:
        menuCampus($senderId, $accessToken, "ead");
	sleep(3);
	menuAcesseiCampus($senderId, $accessToken, "ead");
        break;
      //seleciona cadastro por email
       case emailEad:
        sendImage("https://scontent.fbsb9-1.fna.fbcdn.net/v/t1.0-9/26804504_2053253148293926_4330529471620623708_n.png?oh=686ed2ba3ce1a1c29a4b5f5e6878a22f&oe=5B206811", $senderId, $accessToken);
        menuTermo($senderId, $accessToken, "https://campusvirtual.ufla.br/cas/cvchatbot_ead_ufla.php?fbid=".$senderId);
        break;
      case nao_termo:
        tentarNovamente($senderId, $accessToken);
        break;
      case sim_termo:
        menuTermo($senderId, $accessToken);
        sleep(3);
        menuConfirmaCadastro($senderId, $accessToken);
        break;
      case sim:
        menuSimConfirma($senderId, $accessToken);
        break;
      case nao:
        sendTextMessage("Entre em contato com o suporte do Campus Virtual por meio do telefone (35) 3829-1909", $senderId, $accessToken);
        break;
      //seleciona o tipo de ensino
      case tipo_presencial:
        sendImage("https://scontent.fbsb9-1.fna.fbcdn.net/v/t1.0-9/26804504_2053253148293926_4330529471620623708_n.png?oh=686ed2ba3ce1a1c29a4b5f5e6878a22f&oe=5B206811", $senderId, $accessToken);
        menuTermo($senderId, $accessToken, "https://campusvirtual.ufla.br/cas/cvchatbot_ufla.php?fbid=".$senderId);
        break;
      case tipo_ead:
        menuVinculaEad($senderId, $accessToken);
        break;
      //acessa página de login, efetuou login
      //copiar e colar codigo no campo Facebook
      case sim_campus_ead:
        menuCampusSim($senderId, $accessToken, "ead");
        sleep(3);
        menuPerfilSim($senderId, $accessToken);
        break;
      case sim_campus_presencial:
        menuCampusSim($senderId, $accessToken, "presencial");
        sleep(3);
        menuPerfilSim($senderId, $accessToken);
        break;
      case nao2_campus_ead:
        suporte1($senderId, $accessToken, "ead");
        break;
      case nao2_campus_presencial:
        suporte1($senderId, $accessToken, "presencial");
        break;
      //regularizada situação de login
      case regularizei1_ead:
        menuCampusSim($senderId, $accessToken, "ead");
        menuPerfilSim($senderId, $accessToken);
        break;
      case regularizei1_presencial:
        menuCampusSim($senderId, $accessToken, "presencial");
        menuPerfilSim($senderId, $accessToken);
        break;
      //Caso não consiga realizar o login
      case nao_campus_ead:
        menuCampusNao($senderId, $accessToken, "ead");
        break;
      case nao_campus_presencial:
        menuCampusNao($senderId, $accessToken, "presencial");
        break;
      //Após atualizar o perfil
      case atualizei:
        menuAtualizei($senderId, $accessToken);
        break;
      //Mensagem de confirmação
      case sim_confirma:
        //Dá boas-vindas ao usuário
        menuSimConfirma($senderId, $accessToken);
        break;
      case nao_verificado:
        //Pede para conferir os dados informados
        menuNaoConfirma($senderId, $accessToken);
        break;
      //caso não receba msgm de confirmação
      case verificado:
        menuVerifiquei($senderId, $accessToken);
        break;
      //envia para suporte se nao receber mensagem de confirmação
      case nao_verifiquei:
        suporte2($senderId, $accessToken);
        break;
      case regularizei2:
        menuAtualizei($senderId, $accessToken);
        break;
      case codUser:
        sendTextMessage($senderId, $senderId, $accessToken);
        break;
      case acessei_campus:
        menuAcesseiCampus($senderId, $accessToken);
        break;
      case acessei_perfil:
        menuAcesseiPerfil($senderId, $accessToken);
        break;
      case sim_perfil:
        menuPerfilSim($senderId, $accessToken);
        break;
      //botão do menus persistente "pular configuração"
      case pular:
        menuSimConfirma($senderId, $accessToken);
        break;
      default:
        sendTextMessage("comando invalido", $senderId, $accessToken);
        break;
    }
}
?>
