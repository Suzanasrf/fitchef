<?php 
    require "includes/autoload.php";
    //capturando os dados da URL
    // ex.:admin/departamento/cadastrar/listar
    // model=departamento & action = listar
    @$router = $_GET['model'].$_GET['action'];
    // router = departamentolistar

    $view = "";

    //CONFIG
    $url = "http://localhost/fitchef";

    switch($router){

        // 0. verificar se existe a classe (produto.class.php)   
        // 1. criar a view/lista-produto.php
        // 2. criar a actions/produto-listar.php
        // 3. verificar se em produto.dao possui a função de listar

        case 'clientecadastrar':
            
            $obj = new \FITCHEF\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;

        case 'clientelistar':

            $obj = new \FITCHEF\API\ClienteListar;
            $lista = $obj->lista;
            $view = "lista-cliente.php";
            break;

        case 'clientevisualizar':

            $obj = new \FITCHEF\API\ClienteVisualizar;
            $cliente = $obj->dados;
            $view = "visualiza-cliente.php";
            break;  

        case 'departamentocadastrar':
            
            $obj = new \FITCHEF\API\DepartamentoCadastrar;
            $msg = $obj->msg;
            $view = "form-departamento.php";
            break;

        case 'departamentolistar':

            $obj = new \FITCHEF\API\DepartamentoListar;
            $lista = $obj->lista;
            $view = "lista-departamento.php";
            break;

        case 'departamentovisualizar':

            $obj = new \FITCHEF\API\DepartamentoVisualizar;
            $departamento = $obj->dados;
            $view = "visualiza-departamento.php";
            break;   
        
        case 'produtocadastrar':
            
            $obj = new \FITCHEF\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \FITCHEF\API\DepartamentoListar;
            $lista = $obj2->lista;
            
            $view = "form-produto.php";
            break;

        case 'produtolistar':

            $obj = new \FITCHEF\API\ProdutoListar;
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;

        case 'produtovisualizar':

            $obj = new \FITCHEF\API\ProdutoVisualizar;
            $produto = $obj->dados;
            $view = "visualiza-produto.php";
            break;          
 
         case 'home':

            $view = "home.php";
            break;            
    
       
        default:
            $view = "home.php";
        break; 
    }

 
    include "view/{$view}";
  
?>