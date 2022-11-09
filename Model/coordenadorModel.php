<?php
class coordenador {

    /*Método construtor da classe*/
	public function __construct(){}
	
	/*Evita que a classe seja clonada*/
	private function __clone(){}
	
	/*Método destrutor da classe*/
	public function __destruct() {
		foreach ($this as $key => $value) { 
			unset($this->$key); 
        }
		foreach(array_keys(get_defined_vars()) as $var) {
			unset(${"$var"});
		}
		unset($var);
	}

    private $id = 0;
	private $nome = "";
	private $cidade = "";
	private $cpf = "";

    public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = intval($id);
	}
	
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getCidade(){
		return $this->cidade;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
	
	public function getCpf(){
		return $this->cpf;
	}
	public function setCpf($cpf){
		$this->$cpf = $cpf;
	}
}