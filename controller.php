<?php
    session_start();
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
            \FITCHEF\includes\Seguranca::restritoAdm();
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
        
        case 'usuariocadastrar':
            
            $obj = new \FITCHEF\API\UsuarioCadastrar;
            $msg = $obj->msg;
            $view = "form-usuario.php";
            break;

        case 'usuariolistar':

            $obj = new \FITCHEF\API\UsuarioListar;
            $lista = $obj->lista;
            $view = "lista-usuario.php";
            break;

        case 'usuariovisualizar':

            $obj = new \FITCHEF\API\UsuarioVisualizar;
            $usuario = $obj->dados;
            $view = "visualiza-usuario.php";
            break;  
    
            

        case 'loginadm':
            $obj = new \FITCHEF\API\UsuarioLogar;
            $msg = $obj->msg;
            $view ="form-login-adm.php";
            break;


            
        case 'paineladm':
            $view ="painel-adm.php";
            break;   
           
        case 'painellogoff';
            $obj = new \FITCHEF\API\UsuarioLogoff;
            $view = "form-login-adm.php";
            break;     
     
 
        case 'inicio':
            $view = "FRONT-inicio.php";
            break;            

             
        case 'meuprato':
            $view = "FRONT-seupedido.php";
            break; 
            
        case 'cardapio':
            $view = "FRONT-cardapio.php";
        break;
        
        case 'quemsomos':
            $view = "FRONT-quemsomos.php";
        break;

        case 'contato':
            $view ="FRONT-contato.php";
        break;
       
        case 'login':
            $view ="FRONT-logincadastro.php";
        break;

        case 'carrinho':
            $view ="FRONT-carrinho.php";
        break;

        case 'produto':
            $view ="FRONT-produto.php";
        break;

        case 'frango':
            $view ="FRONT-ingrediente-frango.php";
        break;
            
        case 'batatadoce':
            $view ="FRONT-ingrediente-batatadoce.php";
        break;

        case 'salmaoi':
            $view ="FRONT-ingrediente-salmaoi.php";
        break;
            
        case 'arroz':
            $view ="FRONT-ingrediente-arroz.php";
        break;
    
        case 'bife':
            $view ="FRONT-ingrediente-bife.php";
        break;
            
        case 'feijao':
            $view ="FRONT-ingrediente-feijao.php";
        break;
            
        case 'salada':
            $view ="FRONT-ingrediente-salada.php";
        break;
        
        case 'puredebatata':
            $view ="FRONT-ingrediente-puredebatata.php";
        break;
            
        case 'ovos':
            $view ="FRONT-ingrediente-ovos.php";
        break;
        
        case 'macarrao':
            $view ="FRONT-ingrediente-macarrao.php";
        break;
            
        case 'brocolis':
            $view ="FRONT-ingrediente-brocolis.php";
        break;
            
        case 'areia':
            $view ="FRONT-ingrediente-areia.php";
        break;

        default:
            $view = "home.php";
        break; 
    }

 
    include "view/{$view}";
  
?>