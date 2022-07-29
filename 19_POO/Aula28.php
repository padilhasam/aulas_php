<?php
   
   //Herança

    class Documento{

      //Atributo
      private $numero; 

      //Métodos
      public function getNumero(){
        return $this -> numero;
      }//Retorna o valor contido no atributo numero.
      public function setNumero($numero){
        $this -> numero = $numero;
      }//Seta o Atributo numero com o valor passado por parâmetro.

    }

    class CPF extends Documento{
      
      //Métodos
      public function ValidarCPF(){  
        $cpf = $this -> getNumero();
        return $cpf;
      }

    }
    // A classe CPF herda somente métodos e atributos PUBLIC e PROTECTED da classe Pai, ou seja, somente GET and SET.

    $documento = new CPF();
    $documento -> setNumero("77386000049"); //Acessou o método SET herdado da classe Pai.
    var_dump($documento -> ValidarCPF()); // Acessou a Classe ValidarCPF;
    echo "<br>";
    echo $documento -> getNumero(); //Acessou método GET herdado da Classe Pai.
    echo "<br>";

    $documentoNovo = new Documento();
    $documentoNovo -> setNumero("12529648034");
    echo $documentoNovo -> getNumero();

?>
