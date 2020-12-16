<?php

    session_start();
    
    //variavel que verifica se a autenticação for realizada
    $ususarioAutenticado = false;
    $usuarioId = null;
    $usuarioPerm = null;

    $perfis = array('1' => 'Administrativo', 2=> 'Usuario');
    //usuarios do sistema
    $usuariosApp = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)
    );

    foreach($usuariosApp as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $ususarioAutenticado = true; 
            $usuarioId = $user['id']; 
            $usuarioPerm = $user['perfil_id'];          
        } 
    }

    if($ususarioAutenticado) {
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuarioId;
        $_SESSION['perfil_id'] = $usuarioPerm;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
 
/*
    print_r($_GET);

    echo '<br />';

    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];


    print_r($_POST);
    echo '<br />';
    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];
*/
?>