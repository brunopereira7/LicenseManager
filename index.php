<?php 
    include_once ("criptografia.php");
    date_default_timezone_set('America/Campo_Grande');

    $cnpj_cpf  = "75.615.371/0001-87";
    $cnpj_cpf  = str_replace('.', '', $cnpj_cpf);
    $cnpj_cpf  = str_replace('-', '', $cnpj_cpf);
    $cnpj_cpf  = str_replace('/', '', $cnpj_cpf);
    $data      = "2018/06/31";
    $separador = "|";
    $usuario   = "bruno pereira";
    $agora     = microtime();

    
    echo "licenca = data - cnpj - usuario";
    echo "<br>";
    $licenca  = $data;
    $licenca .= $separador;
    $licenca .= $cnpj_cpf;
    $licenca .= $separador;
    $licenca .= $usuario;
    $licenca .= $separador;
    $licenca .= $agora;
    echo "Licença Digitada: " . $licenca;
    echo "<br>";
    echo "Licença Criptografada: ".criptPadrao($licenca);
    echo "<br>";
    echo "Licença Descriptografada: ".descriptPadrao(criptPadrao($licenca));
    echo "<br>";
    echo "Tamanho Criptografia: ".strlen(criptPadrao($licenca));


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $now = DateTime::createFromFormat('U.u', microtime(true));
    echo $now->format("Y-m-d- H:i:s");
?>