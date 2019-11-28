<?php
namespace FITCHEF\API; //local desta classe
use FITCHEF\DAO\DAOProduto;

class ProdutoVisualizar{
    public $dados;
    
    public function __construct(){
        try{
            $DAO = new DAOProduto();
            $this->dados = $DAO->buscaPorId($_GET['id']);

        }catch(\exception $e){
            $this->dados = $e->getMessage();
        }

    }
}
?>