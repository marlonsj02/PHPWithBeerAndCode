<?php 

// define() = Utilizado para definir uma variável inalterável 
define("MEU_NOME", "Marlon Sant' Anna <br/><br/>");

echo MEU_NOME;

// TIPOS PRIMITIVOS 
$nome = "Marlon Sant' Anna"; // String 
$instrutor = false; // Boolean
$idade = 21; // Integer
$altura = 1.73; // Float or Double
$cursos = array("PHP", "Laravel", "MySQL") or ["PHP", "Laravel", "MySQL"]; // Array

// array() = Utilizado para definir uma lista de dados onde o index começa por 0
$frutas = array("Maçã", "Banana");

// print_r($frutas);

$idiomas = ["Português", "Inglês"];

// print_r($idiomas);

$sobrenomes = array(
    "Marlon" => "Sant' Anna",
    "Icaro" => "Jobs"
);

// print_r($sobrenomes);

$idades = [
    "Marlon" => 21,
    "Icaro" => 34
];

// print_r($idades);

echo $idades["Marlon"] . "<br/><br/>";

$nome = "Marlon";
$sobrenome = "Sant' Anna";

// compact() = Usado para criar um array associativo onde o indexador será o nome de uma variável que contem um conteúdo 
$resultado = compact("nome", "sobrenome");

// print_r($resultado);

$objeto = new \StdClass();
$objeto->nome = "Marlon";
$objeto->sobrenome = "Sant' Anna";

// var_dump() = Usado para visualizar informações mais detalhadas de um array/objeto 
// var_dump($objeto);
echo $objeto->nome . "<br/><br/>";

// gettype() = Retorna o tipo primitivo de uma variável 
echo gettype($objeto) . "<br/><br/>";
echo gettype($sobrenomes) . "<br/><br/>";
echo gettype($idade) . "<br/><br/>";

$nome = "Marlon Sant' Anna"; // String 
$idade = 21; // Integer
$altura = 1.73; // Float or Double
$formacoes = array("PHP", "Laravel"); // Array
$cliente = new \StdClass();

echo '$nome: ' . gettype($nome) . "<br/><br/>";
echo '$idade: ' . gettype($idade) . "<br/><br/>";
echo '$altura: ' . gettype($altura) . "<br/><br/>";
echo '$formações: '. gettype($formacoes) . "<br/><br/>";
echo '$cliente: ' . gettype($cliente) . "<br/><br/>";

$idade_marlon = 41;
$idade_icaro = 33;

// == = Usado para verificar se um dado é igual ao outro independente do tipo
// === = Usado para verificar se um dado é igual ao outro dependente do tipo
// > = Usado para verificar se um dado é maior que o outro inddependente do tipo
// < = Usado para verificar se um dado é menor que o outro inddependente do tipo
// >= = Usado para verificar se um dado é maior ou igual ao outro inddependente do tipo
// <= = Usado para verificar se um dado é menor ou igual ao outro inddependente do tipo
// ! = Usado para retornar falso se uma condição for verdadeira ou vice-versa
// != / <> = Usado para verificar se um dado é diferente do outro
$formado = false;
// var_dump(!$formado);

$certificado = false;

// && = Usado para retornar true caso todas as condições seja verdadeiras
// || = Usado para retornar true caso uma das condições seja verdadeira
// var_dump($formado && $certificado);

// if() = Usado para executar determinado código caso a condição posta seja verdadeira 
if ($formado === true) {
    echo "É formado! <br/><br/>";
} elseif ($certificado === true){
    echo "Possui certificado! <br/><br/>";
} else {
    echo "Não é formado e não possui certificado! <br/><br/>";
}

$cpf = "";
$cnpj = "12.123.123/0001-12";
$tipoDocumento = "";

if ($cpf != "") {
    $tipoDocumento = "CPF";
} else {
    $tipoDocumento = "CNPJ";
}

echo $tipoDocumento . "<br/><br/>";

$cpf = "234.344.222-21";
$cnpj = "";
$tipoDocumento = "";

// Operador Ternário = Usado para realizar uma condicional em linha única 
// (condição) ? código caso for verdadeiro : código caso for falso
$tipoDocumento = ($cpf != "") ? "CPF" : "CNPJ";

echo $tipoDocumento . "<br/><br/>";

// Null Coalescing Operator = Segue a mesma ideia do operador ternário, sendo possível agora realizar uma condicional múltipla em linha única 
// (condição) ?? código caso for verdadeiro ?? código caso a condicional anterior for falsa ?? código caso a condicional anterior for falsa ??..  

$_POST = array(
    "nome" => "Marlon Sant' Anna",
    "idade" => null
);

// $nome = "";
// $idade = "";

// if ($_POST["nome"] <> null) {
//     $nome = $_POST["nome"];
// } else {
//     $nome = "Campo nome não preenchido! <br/><br/>";
// }

// if ($_POST["idade"] <> null) {
//     $idade = $_POST["idade"];
// } else {
//     $idade = "Campo idade não preenchido! <br/><br/>";
// }

// echo "{$nome} <br/><br/>";
// echo "{$idade} <br/><br/>";

$nome = $_POST["nome"] ?? "Campo nome não preenchido!";
$idade = $_POST["idade"] ?? "Campo idade não preenchido!";

echo "{$nome} <br/><br/>";
echo "{$idade} <br/><br/>";