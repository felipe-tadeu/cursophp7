<?php

//Parâmetros
$url        = "";
$diretory   = "";

//Conteúdo do arquivo
$content = file_get_contents($url);

//Url do arquivo
$parse = parse_url($url);

//Pega o base name (nome básico do arquivo)
$basename = basename($parse["path"]);

//Abre o arquivo, se não existir, cria
$file = fopen($diretory, "w+");

//Escreve no arquivo o seu conteúdo
fwrite($file, $content);

//Fecha o arquivo
fclose($file);

?>

<!--Teste-->
<img src="images/<?= $basename ?>">