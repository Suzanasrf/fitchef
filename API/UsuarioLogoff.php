<?php 
namespace FITCHEF\API;

class UsuarioLogoff{

    function __construct(){
        unset($_SESSION);
        header("http://localhost/fitchef/login/adm");
    }
}