<?php
if(!function_exists("protect")){
    function protect(){
        if(!isset($_SESSION))
            session_start();
        
        if(!isset($_SESSION['cpf']) || !is_numeric($_SESSION['cpf'])){
            header("Location: loginFuncionario.html");
        }
    }
}