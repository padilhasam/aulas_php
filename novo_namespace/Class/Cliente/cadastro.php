<?php
  namespace Cliente; //Precisa ser o mesmo nome da pasta??? (Dúvidas)
  class Cadastro extends \Cadastro{
    public function registrarVenda(){
      echo "Venda registrada para " . $this -> getNome();
    }
  }
?>
