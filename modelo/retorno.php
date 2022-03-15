<?php

    $NOME = $_REQUEST['NOME'];
    $IDADE = $_REQUEST['IDADE'];
    $BEBIDA = $_REQUEST['BEBIDA'];
    $ANO_ATUAL = new Dateline ['ANO_ATUAL'];
    $DATA = new Dataline [$IDADE];
    $INTE = $ANO_ATUAL -> diff($DATA);
    
  
    if(empty($NOME)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existem(m) campo(s) obrigatório(s) não preenchido(s).'
        );
    
    } else {

       if($INTE->y < 18){
            $dados = array(
                
                "mensagem" => 'Não pode beber bebida alcólica.'
            );
            
    
    }else($INTE->y > 18){
        $dados = array(
        "mensagem" => 'Pode beber bebida alcólica.'
        );
    }
    }
    
    

    echo json_encode($dados);