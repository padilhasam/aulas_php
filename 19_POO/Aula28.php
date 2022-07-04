<?php
    //Herança

    class Documento{

      private $numero;

      public function getNumero(){
        return $this -> numero;
      }
      public function setNumero($numero){
        $this -> numero = $numero;
      }

    }

    class CPF extends Documento{

      public function ValidarCPF():bool{
        $cpf = $this -> getNumero();

        //Validação do CPF;

        return true;

      }
      // O método CPF herda somente métodos e atributos públicos e protegidos, ou seja, neste caso somente GET and SET, pois são públicos.

    }

    $doc = new CPF();
    $doc -> setNumero("77386000049"); //Acessou o método SET herdado da classe PAI.
    var_dump($doc -> ValidarCPF()); // Acessou a Classe ValidarCPF;
    echo "<br>";
    echo $doc -> getNumero(); //Acessou método GET herdado da Classe Pai.
?>
