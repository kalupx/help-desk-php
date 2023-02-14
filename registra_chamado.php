<?php
    session_start();
    //tratamento de texto
    $titulo = str_replace('#', '-',  $_POST['titulo']);
    $categoria = str_replace('#', '-',  $_POST['categoria']);
    $decricao = str_replace('#', '-',  $_POST['descricao']);
                                                          //guarda o \n
    $texto = $_SESSION['id'] . '#' . $titulo . '#'. $categoria . '#'. $decricao . PHP_EOL;
    

    //abre um arquivo txt, o parametro 'a' define como escrita
    $arquivo = fopen('bd.txt','a');

    //escreve no artigo
    fwrite($arquivo, $texto);
    
    //fecha o arquiv
    fclose($arquivo);
?>