<?php
session_start();

function usuarioEstaLogado(){
    return isset($_SESSION['usuario-logado']);
}

function verificaUsuario() {
    if (!usuarioEstaLogado()) {
        $_SESSION['danger'] = "Você não tem acesso a esta funcionalidade.";
        header("Location: index.php");
        die();
    }
}

function usuarioLogado(){
    return $_SESSION['usuario-logado'];
}

function logaUsuario($email){
    //setcookie("usuario-logado", $email, time() + 60);
    $_SESSION['usuario-logado'] = $email;
}

function logout(){
    //unset($_SESSION["usuario-logado"]);
    session_destroy();
    session_start();
}