<?php

$corFavorita = "red";

switch ($corFavorita) {
    // break() = Utilizado para parar um loop dentro de uma iteração
    case 'Azul':
        echo "Sua cor favorita é: Azul! <br/><br/>";
        break;

    case 'Vermelho':
        echo "Sua cor favorita é: Vermelha! <br/><br/>";
        break;

    default:
        echo "Você não possui cor favorita! <br/><br/>";
        break;
}

// for() = Utilizado para criar um loop, onde o código será exibido até que a condição posta deixe de ser verdadeira
for ($numero = 0; $numero <= 10; $numero++){
    echo "Nº: {$numero} <br/><br/>";
}

// while() = Funciona da mesma forma que a função for(), porém o incremento condicional não é escrito 
$numero = 1;

while ($numero <= 5){
    echo "Nº: {$numero} <br/><br/>";
    $numero++;
}

// do...while() = Funciona da mesma forma que a função while(), porém aqui o código é executado antes da validação da condicional
$numero = 1;
do {
    echo "Nº: {$numero} <br/><br/>";
    $numero++;
} while ($numero <= 5);

// foreach() = Utilizado para criar um loop dentro de um array/objeto
$cores = array("Vermelho", "Azul", "Amarelo", "Verde");

foreach ($cores as $cor){
    echo "Cor: {$cor} <br/><br/>";
}

// continue() = Utilizado para pular uma interação 
$nomes = ["Marlon", "Icaro", "Kleber", "Junior"];
$resultado = [];

foreach ($nomes as $key => $value) {    
    if (!($key % 2)) {
        continue;
    }
    // array_push() = Utilizado para inserir novos dados dentro de um array 
    array_push($resultado, $value);
}

// var_dump($resultado);

// function() = Utilizado para criar uma função cujo bloco terá linhas de códigos que apenas serão apresentados caso a função seja chamada
function imprimir(){
    echo "Olá Mundo! <br/><br/>";
}

imprimir();

function dd($variable){
    echo "<pre>";
    
    if (gettype($variable) === "object"){
        var_dump($variable);
    } elseif (gettype($variable) === "array") {
        print_r($variable);
    } else {
        echo $variable;
    }

    echo "</pre>";
    die();
}

$object = new \StdClass();
$object->name = "Marlon";
$object->age = 21;

// dd($object);

function latir(string $dogName){
    echo "O cachorro {$dogName} latiu! <br/><br/>";
}

// TypeHint = O parametro de uma função é obrigado a ser do tipo infomado 
latir("Sparkous");
// OBS = Em casos de números em parâmetros de funções TypeHint, o mesmo é convertido para String se essa for a tipagem solicitada
latir(44);

function displayAge(int $age) : int {
    return $age;
}

$result = displayAge(21);

echo $result . "<br/><br/>";

$filtro = ["nome1" => "Marlon", "nome2" => "Junior"];
$nomes = ["Marlon", "Icaro", "Kleber", "Junior"];

// use() = Utilizado para usar uma variavel de outro escopo dentro do código atual em questão 
$resultado = array_filter($nomes, function ($valor) use ($filtro) {
    return ($valor === $filtro['nome1']) || ($valor === $filtro['nome2']);
});

var_dump($resultado);