<?php 

// ECHO = Usado para printar/exibir um conteúdo 
echo "Hello World! <br/><br/>";

// = Usado para comentários de linha única
// /* */ = Usado para comentários de múltiplas linhas
// /** */ = Usado para comentários de documentação de código 

// $nomeVariavel = Usado para armazena um dado 
$texto = "Hello World! <br/><br/>";

echo $texto;
echo $texto;

$nome = "Marlon Sant' Anna";
$idade = 21;
$formacoes = array();
$ultimaVisualizacao = null;

// . = Usado para concatenar dados 
echo $nome . "<br/>";
echo $idade . "<br/>";

// isset() = Verifica se existe conteúdo em um varíavel 
echo isset($formacoes) . "<br/>";
echo isset($ultimaVisualizacao) . "<br/>";

// empty() = Verifica se a variável está vazia
echo empty($formacoes) . "<br/>";
echo empty($ultimaVisualizacao) . "<br/>";
?>