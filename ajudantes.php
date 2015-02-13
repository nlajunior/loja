<?php
  
  function traduzDataParaBanco($data){
    if ($data==""){
     return "";
    }
    $dados = explode("/",$data);
   
    $dataMySql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
    return $dataMySql;
  }

  function traduzDataParaExibir($data){
    if ($data=="" OR $data=="0000-00-00"){
      return "";
    }
    $dados= explode("-",$data);
   
    $dataExibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $dataExibir;
  }

  function traduzPrioridade($codigo){
    switch ($codigo) {
      case 1:
         $prioridade = 'Baixa';
         break;
      case 2:
        $prioridade = 'Média';
        break;
      case 3:
      $prioridade = ' Alta';
      break;
    }
    return $prioridade;
  }

?> 
