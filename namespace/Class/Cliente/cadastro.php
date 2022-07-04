<?php
  namespace Cliente;
  // namespace declara que este arquivo está na pasta CLIENTE. Funciona como uma marcação.

  //Cadastro - Cliente
   class Cadastro extends \Cadastro {
     // Herda métodos e classes (exceto PRIVATE) da classe Cadatro da pasta anterior.
     public function registrarVenda(){
       echo "Foi registrado uma venda para o cliente " . $this->getNome();
     }
   }
?>
