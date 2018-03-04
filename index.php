<?php
    date_default_timezone_set('America/Campo_Grande');
    include_once ("criptografia.php");

    $separador             = "|";
    $dia_somado            = 30;

    $cnpj_cpf              = soNumero("75.615.371/0001-87"); //cnpj
    $id_empresa_local      = 1; //id empresa no sistema do cliente
    $data_ultima_licenca   = date("Y-m-d"); //data licenca expirada
    $data_nova_licenca     = date('Y-m-d', strtotime("+$dia_somado days")); //data novo dia para expirar
    $usuario_gerou_licenca = strtoupper('Bruno Pereira'); //usuario pediu licença
    $data_gerou_licenca     = date('Y-m-d H:i:s'); //horario licenca gerada
    $id_sistema            = 1; //id na base de dados do sistema de gerar licença
    $chave_liberacao       = md5($id_sistema.$separador.$cnpj_cpf); //chave de libercao (id+cnpj)


    echo "<br>";
    $licenca  = $cnpj_cpf.$separador;
    $licenca  .= $id_empresa_local.$separador;
    $licenca  .= $data_ultima_licenca.$separador;
    $licenca  .= $data_nova_licenca.$separador;
    $licenca  .= $usuario_gerou_licenca.$separador;
    $licenca  .= $data_gerou_licenca.$separador;
    $licenca  .= $id_sistema.$separador;
    $licenca  .= $chave_liberacao;

    echo "Licença Digitada: " . $licenca;
    echo "<br>";
    echo "Licença Criptografada: ";
    echo "<input type='text' id='licencaGerada' value='".criptPadrao($licenca)."'/>";
    echo "<button onclick='copiarLicenca()'>Copiar Licenca</button>";
    echo "<br>";
    echo "Licença Descriptografada: ".descriptPadrao(criptPadrao($licenca));
    echo "<br>";
    echo "Tamanho Criptografia: ".strlen(criptPadrao($licenca));

    echo "<script>";
    echo "function copiarLicenca(){
            document.querySelector('#licencaGerada').select();
            document.execCommand('copy');
          }";
    echo "<script/>";
?>