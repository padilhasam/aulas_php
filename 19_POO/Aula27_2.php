<?php
  //Métodos Estáticos - Pool
  /* Utilizados para acessar atributos e métodos sem a necessidade de instanciar uma classe, ou seja, sem criar um objeto */

  class Documento{
    
    //Atributos
    private $numero;

    //Métodos
    public function getnumero(){
      return $this -> numero;
    }
    public function setNumero($numero){
      $resultado = Documento::validarCPF($numero); //Acessa a função válidarCPR(), faz as verificações e atriui a $resultado o valor FALSE ou TRUE;
      if($resultado === false){
        throw new \Exception("O Número do CPF é Inválido!", 1); //Se o resultado for falso, cria uma excessão com um texto.
      }
      $this -> numero = $numero; // Salva o conteúdo da PARAMETRO número dentro do ATRIBUTO número.
    }

    //Método Estático
    //Obs.: Métodos Estáticos são utilizados para acessar um método ou um atributo sem precisar instanciar uma classe;

    public static function validarCPF($cpf):bool{
      if(empty($cpf)) {
        return false;
      }

      $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

      $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT); //Completo com zeros a esquerda caso seja digitado um valor com menos de 11 dígitos.

      if (strlen($cpf) != 11) {
          echo "length";
          return false;
          //Conta a quantidade de caracteres e caso seja diferente de 11 retorna FALSO.
      }

      else if ($cpf == '00000000000' ||
          $cpf == '11111111111' ||
          $cpf == '22222222222' ||
          $cpf == '33333333333' ||
          $cpf == '44444444444' ||
          $cpf == '55555555555' ||
          $cpf == '66666666666' ||
          $cpf == '77777777777' ||
          $cpf == '88888888888' ||
          $cpf == '99999999999') {
          return false;
        //Verifica se o número digitado não é igual às strings acima. Caso seja, retorna FALSO.
       } else {
          for ($t = 9; $t < 11; $t++) {
              for ($d = 0, $c = 0; $c < $t; $c++) {
                  $d += $cpf{$c} * (($t + 1) - $c);
              }
              $d = ((10 * $d) % 11) % 10;
              if ($cpf{$c} != $d) {
                  return false;
              }
          }
          return true;
          //Verifica se é um CPF válido, conforme parâmetros da Receita Federal. Caso não seja, retorna FALSO.
      }
    }
  }

    $cpf = new Documento(); // Intanciando a Classe Documento
    $cpf -> setNumero('77386000049');// Acessando o método setNumero() e passando parametro dentro dele.

    var_dump($cpf->getNumero()); //Exibindo o valor contido no ATRIBUTO numero, que foi pasado atravé do método setNumero();

// var_dump(Documento::validarCPF('12345678910'));

?>
