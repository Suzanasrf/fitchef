<?php

namespace FITCHEF\Model;

class Cliente{

    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $endereco;
    private $cep;
    
    

    
    public function __construct(){
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getCep(){
        return $this->cep;
    }
    
    public function setCep($cep){
        $this->cep = $cep;
    }





    }
    
    ?>
