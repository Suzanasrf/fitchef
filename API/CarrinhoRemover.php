<?php 
namespace Loja\API;
use LOJA\DAO\DAOProduto;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\Model\Produto;


class CarrinhoRemover{
    function __construct(){

        $carrinho = new Carrinho; //inicia o carrinho
        $id = $_GET['id']; //pega o id do carrinho a remover 

        if(isset($_SESSION['carrinho'])){//verifica se existe carrinho na sessão
        
        foreach($carrinho->getLista() as $item){ //verifica os itens do carrinho
            if($item->getProduto()->getId()===$id){ //se o produto existir no carrinho

                $carrinho->removeItem($id); // escluir o carrinho
                $_SESSION['carrinho']= $carrinho; //atualiza o carrinho na sessão
            };
        }
    }else{
        //se não existir o carrinho criado, retorna a página inicial
        header("location: http://localhost/lojavirtual/home");

        }
    }
}
