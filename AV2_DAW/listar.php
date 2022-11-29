<?php
include("server.php");
$nome = $_POST["nome"];
$tempo = $_POST["tempo"];
$sqlExib = "SELECT `nome`, `tempo`, `categoria`, `preco`, `cidade` FROM `alugar_carros` WHERE `nome` = '$nome' OR `tempo` = '$tempo'";

$result=$conn->query($sql);
        $vetJogos[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetJogos[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetCarros);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
echo $retorno;

?>