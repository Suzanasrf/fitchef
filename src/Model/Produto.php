<?php

namespace FITCHEF\Model;

class Produto{

    private $id;
    private $nome;
    private $preco;
	private $descricao;
	private $imagem;

    private $departamento; //objeto ($id e $nome)
  
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

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getImagem(){
		return $this->imagem;
	}

	public function setImagem($imagem){
		$this->imagem = $imagem;
	}

	public function getDepartamento(){
		return $this->departamento;
	}

	public function setDepartamento($departamento){
		$this->departamento = $departamento;
	}
}
    ?>