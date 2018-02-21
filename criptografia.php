<?php

function criptPadrao($dados){
    $dados = base64_encode($dados);
    $dados = base64_encode($dados);
    $dados = base64_encode($dados);
    $dados = base64_encode($dados);
    return $dados;
}

function descriptPadrao($dados){
    $dados = base64_decode($dados);
    $dados = base64_decode($dados);
    $dados = base64_decode($dados);
    $dados = base64_decode($dados);
    return $dados;
}
