<?php
    require_once('../models/Cliente.php');
    header('Location: ../formularios/formulario-cliente.php');
    
    $cliente = new Cliente();
    
    $cliente->setNomeCliente($_POST['txtNome']);
    
    

    $cliente->setCelularCliente($_POST['txtCel']);

    $cpf = $_POST['txtCpf'];
    $cpfFormatado = $cpf;
 
     $cpf = str_replace(".","",$cpf);
     $cpf = str_replace("-","",$cpf);
 
     $vetorCpf = array();
 
         for ($i=0; $i < (strlen($cpf)); $i++) { 
             $vetorCpf[$i] = substr($cpf,$i,1);
         }
     //Verificações
  
         $contagem = count($vetorCpf);
         
         if ($contagem < 11 ) {
            setcookie('aviso', $teste="CPF inválido!", time()+1, "/");
            exit();
         }
 
         if ($contagem > 11 ) {
            setcookie('aviso', $teste="CPF inválido!", time()+1, "/");             
            exit();
         }
 
         $j=0;
         $iguais = 0;
         for ($i=0; $i < 11; $i++) { 
             
             for ($j=0; $j < 11; $j++) { 
                 if ($vetorCpf[$i]==$vetorCpf[$j]) {
                     $iguais++;
                 }
             }
            
             
         }
     
         $iguais = $iguais/11;
         
         if ($iguais==$contagem) {
                 setcookie('aviso', $teste="CPF inválido!", time()+1, "/");
                 exit();
         }
          
         
         
     //Cálculos
 
     $contador = 10;
     $soma1 = 0;
 
     for ($i=0; $i < 9; $i++) { 
         $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
         $contador--;
     }
     
     $digito1 = ($soma1 % 11);
 
     if ($digito1<2) {
         $digito1 = 0;
     }else {
         $digito1 = 11-$digito1;
     }
 
 
     $contador = 11;
     $soma2 = 0;
 
     for ($i=0; $i < 10; $i++) { 
         $soma2 = $soma2 + ($vetorCpf[$i]*$contador);
         $contador--;
     }
     
     $digito2 = ($soma2 % 11);
     if ($digito2<2) {
         $digito2 = 0;
     }else {
         $digito2 = 11-$digito2;
     }
      
     if ($digito1 == $vetorCpf[9] && $digito2 == $vetorCpf[10]) {
        $cliente->setCpfCliente($_POST['txtCpf']);
        $cliente->cadastro($cliente);
        
     }    else {
        setcookie('aviso', $teste="CPF inválido!", time()+1, "/");
        
     }
    
    
?>