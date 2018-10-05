<?php
if(!function_exists("protect")){
    function protect(){
        if(!isset($_COOKIE))
            session_start();
        
        if(!isset($_COOKIE['cpf']) || !is_numeric($_COOKIE['cpf'])){
            header("Location: loginFuncionario.php");
        }
    }
}