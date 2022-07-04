<?php

  //Métodos Mágicos (Método Construtor)

  class Endereco{
    //Atributos
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;

    //Método Construtor chamado durante a instancia do objeto
    public function __construct($a, $b, $c, $d, $e){
      $this->logradouro = $a;
      $this->numero = $b;
      $this->bairro = $c;
      $this->cidade = $d;
      $this->estado = $e;
    }
    /*
      Obs.: Utilizanos o método construtor para criar, atribuir e acessar valores dos atributos.
    */

    //Método é chamado quando o objeto instanciado for removido da memória, ou quando acabar de executar o algoritmo.
    public function __destruct(){
      var_dump("DESTRUIR");
    }
    /*
      Obs.: Utilizanos o método destruidor para matar algumas variáveis ou para encerrar uma conexão com o banco de dados, ou mesmo para criar um log
    */

    //Método é chamado quando houver um ECHO no objeto instanciado
    public function __toString(){
      return $this->logradouro . ", " . $this->numero . ", " . $this->bairro . ", " . $this->cidade . ", " . $this->estado;
    }
}//Final da Classe

  //Instanciando a classe
  $meuEndereco = new Endereco("Rua João Wolski", "150", "Tindiquera", "Araucária", "Paraná");
  var_dump($meuEndereco);

  //unset($meuEndereco); //Removendo objeto instanciado
    echo "<br><br>";

  echo $meuEndereco . "<br><br>";


?>
