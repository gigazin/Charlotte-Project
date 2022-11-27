<?php
class entregador{
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


    //alterar para atributos do entregador
	
	/*Variaveis privadas que receberao os dados*/
	private $id;
	private $nome ;
	private $cidade;
	private $coordenador_idcoordenador;
	private $salario;
	private $bonificacao;
	private $turno;
	private $veiculo;
	private $entregas;

	/*Metodos get e set que trazem o conteudo da variavel privada desejada*/
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

	public function getIdCoordenador(){
		return $this->coordenador_idcoordenador;
	}

	public function getSalario(){
		return $this->salario;
	}
	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function getBonificacao(){
		return $this->bonificacao;
	}
	public function setBonificacao($bonificacao){
		$this->bonificacao = $bonificacao;
	}

	public function getTurno(){
		return $this->turno;
	}
	public function setTurno($turno){
		$this->turno = $turno;
	}

	public function getVeiculo(){
		return $this->veiculo;
	}
	public function setVeiculo($veiculo){
		$this->veiculo = $veiculo;
	}

	public function getEntregas(){
		return $this->entregas;
	}
	public function setEntregas($entregas){
		$this->entregas = $entregas;
	}
}
