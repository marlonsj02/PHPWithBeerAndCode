<?php

// date() = Utilizado para obter a data e horário atual conforme timezone padrão ou especificado pelo date_default_timezone_set()

// d = Dia Atual 
// m = Mês Atual 
// Y = Ano Atual 
// h = Hora Atual 
// i = Minuto Atual 
// s = Segundo Atual 
// l = Dia da Semana (Em Inglês)

date_default_timezone_set("America/Sao_Paulo");

echo "Hoje é " . date("d/m/Y") . "</br></br>";
echo "Hoje é " . date("Y-m-d") . "</br></br>";
echo "Hoje é " . date("d.m.Y") . "</br></br>";
echo "Hoje é " . date("l") . "</br></br>";

echo "<hr/>";

echo "Agora é " . date("h:i:s");

echo "<hr/>";

echo "Data e Hora: " . date("d/m/Y h:i:s");

echo "<hr/>";

// phpinfo() = Exibi todas as informações gerais do ambiente PHP (Arquivos de Configurações, Extensões, Etc...) 

// phpinfo();

echo "<hr/>";

$nome = "marlon jesus </br></br>";

// strtoupper() = Transforma uma string em Maiúscula 
echo strtoupper($nome);

$nome = "MARLON JESUS </br></br>";

// strtolower() = Transforma uma string em Minúscula  
echo strtolower($nome);

$nome = "Marlon Jesus</br></br>";

// trim() = Remove os espaçamentos de uma string 
echo trim($nome);

$nome = "Marlon \ Jesus</br></br>";

// stripslashes() = Remove barras ou barras-invertidas de uma string 
echo stripslashes($nome); 

$nome = "<strong>Marlon  Jesus</strong></br></br>";

// htmlspecialchars() = Escapa tag's HTML de strings, utilizado para segurança de injeção de scripts 
echo htmlspecialchars($nome);

echo "<hr/>";

$pizzas = "Mussarela, Calabresa, Frango";

// explode() = Transforma uma string em um array baseando-se por um ponto de 'pausa'
$arrayDePizzass = explode(",", $pizzas);

var_dump($arrayDePizzass);

echo "<hr/>";

$pizzas = ["Mussarela", "Calabresa", "Frango"];

// implode() = Transforma um array em uma string baseando-se por um ponto de 'pausa'
// $stringDePizzas = implode(",", $pizzas);
$stringDePizzas = join(",", $pizzas);

echo $stringDePizzas;

echo "<hr/>";

$mensagem = "Olá, meu nome é Marlon, tenho 21 anos de idade";

// substr() = Pega o conteúdo de um váriavel a partir de um determinado ponto (index) especificado 
$nome = substr($mensagem, 5);
$nome = substr($mensagem, -5);
$nome = substr($mensagem, -5, 2);

echo $nome;

echo "<hr/>";

$idades = [
    "Marlon" => 21,
    "Grazielle" => 18
];

// var_dump($idades);
// json_encode() = Transforma um array em string JSON 
$json = json_encode($idades);

echo $json;

echo "<hr/>";

$idades = [
    "Marlon" => "É prestativo",
    "Grazielle" => "Tem 18 anos"
];

$json = json_encode($idades);

echo $json;

echo "<hr/>";

$idades = [
    "Marlon" => "É prestativo",
    "Grazielle" => "Tem 18 anos"
];

// JSON_UNESCAPED_UNICODE = Decodifica a string encodada para aceite de acentuações 
$json = json_encode($idades, JSON_UNESCAPED_UNICODE);

echo $json;

echo "<hr/>";

$json = '{"Marlon":"É prestativo","Grazielle":"Tem 18 anos"}';

$objeto = json_decode($json);

$array = json_decode($json, true); // O parametro true transforma o objeto em array 

var_dump($objeto);

echo "<hr/>";

var_dump($objeto->Grazielle);

echo "<hr/>";

var_dump($array);

echo "<hr/>";

var_dump($array['Marlon']);

echo "<hr/>";

// file_get_contents() = Utilizado para obter conteúdo de um arquivo alternativo 
$texto = file_get_contents('obtendoTextoComPHP.txt');

echo $texto . '<br/><br/>';

// file_put_contents() = Utilizado para escrever conteúdo em um arquvio alternativo 
$texto = file_put_contents("escrenvendoTextoComPHP.txt", "Olá mundo, novamente!"); // Retorna o número de caractéres criados no arquivo

echo "<hr/>";

// rand() = Utilizado para gerar um número aleatório, podendo ser entre dois números específicados em parâmetros ou não  
echo rand() . "<br/><br/>";
echo rand() . "<br/><br/>";
echo rand(0, 10) . "<br/><br/>";

echo "<hr/>";

$nomes = ["Marlon", "Grazielle", "Gilmara"];

// count() = Retorna a quantidade de items presente em um array ou objeto 
echo count($nomes);

echo "<hr/>";

// ceil() = Arredonda para cima um número decimal ou inteiro 
echo ceil(0.60) . "<br/><br/>";
echo ceil(0.40) . "<br/><br/>";
echo ceil(5) . "<br/><br/>";
echo ceil(5.1) . "<br/><br/>";
echo ceil(-5.1) . "<br/><br/>";
echo ceil(-5.9) . "<br/><br/>";

echo "<hr/>";

// round() = Arredonda um número decimal ou inteiro para um outro mais próximo 
echo round(0.60) . "<br/><br/>";
echo round(0.40) . "<br/><br/>";
echo round(5) . "<br/><br/>";
echo round(5.1) . "<br/><br/>";
echo round(-5.1) . "<br/><br/>";
echo round(-5.9) . "<br/><br/>";

echo "<hr/>";

$nome = "Marlon Jesus";

// strlen() = Retorna a quantidade de caractéres em uma string 
echo strlen($nome);

echo "<hr/>";

echo $nome;

echo "<hr/>";

$apelido = "De Sant' Anna";

// str_replace() = Troca o conteúdo de uma string pelo específicado no parâmetro 
$nome = str_replace("De", "Marlon", $apelido);

echo $nome . "<br/><br/>";

echo "<hr/>";

// md5() = Utilizado para criptografia de strings 
// sha1() = Segue a mesma ideia do md5(), sendo um sucessor "mais seguro"
// base64_encode() = Utilizado para criptografia de strings 
// base64_decode() = Utilizado para descriptografar strings base64 

$md5 = md5("1234");

$sha1 = sha1("1234");

echo $md5 . "<br/><br/>";

echo $sha1 . "<br/><br/>";

echo "<hr/>";

$nome =  "Marlon";

$nomeCodificado = base64_encode($nome);

$nomeDecodificado = base64_decode($nomeCodificado);

echo $nomeCodificado . "<br/><br/>";

echo $nomeDecodificado . "<br/><br/>";

echo "<hr/>";

// header() = Utilizado para alterar configurações de cabeçalho de uma página web ou realizar redirecionamento de página 
header("Expires: Mon, 26 Jul 1997  05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
// header("Location: https://www.google.com.br");

echo "<hr/>";
 
// die() ou exit() = Utilizado para parar o funcionamento de uma página, podendo retornar uma resposta ao cliente 
// die("Encerrando a aplicação"); 
// exit("Encerrando a aplicação"); 

$nome = "Marlon";

// wordwrap() = Utilizado para inserir uma quebra de linha após uma determinada quantidade de caractéres digitados 
$limite = wordwrap($nome, 3);

echo $limite;

echo "<hr/>";

// number_format() = Formata uma string ou número de acordo com as casas decimais específicadas ou padrões 
echo number_format("100000") . "<br/><br/>";
echo number_format("100000", 2) . "<br/><br/>";
echo number_format("100000.45", 2) . "<br/><br/>";
echo number_format("100000", 2, ",", ".") . "<br/><br/>";
echo number_format("100000.45", 2, ",", ".") . "<br/><br/>";

echo "<hr/>";

// $_GET = Utilizado para obter ou escrever conteúdo em uma requisição Get web 
$nome = $_GET["nome"] ?? "Não informado";
$sobrenome = $_GET["sobrenome"] ?? "Não informado";

echo $nome . "<br/><br/>";
echo $sobrenome . "<br/><br/>";

echo "<hr/>";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="index-aula4.php" method="post">
            <input type="text" name="name" placeholder="Informe seu nome:">
            <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php 

// $_POST = Utilizado para obter ou escrever conteúdo em uma requisição Post web 
$nome = $_POST["name"] ?? "Não informado";

echo "O nome informado no formulário foi: <b>" . $nome , "</b><br/><br/>";


echo "<hr/>";

// session_start() = Utilizado para iniciar uma sessão em uma página web, serve para "salvar dados em cache"
session_start();

$_SESSION["cor_favorita"] = "Azul";

echo "Cor Favorita Setada!";

echo "<hr/>";

// error_reporting(-1);

$numerador = 20;
$denominador = 0;

// try..catch..finally = Utilizado para realizar uma condicional caso desejada operação resulte em sucesso executa o código do try, caso contrário retorna um erro no catch e por fim retorna o código do finally, dando sucesso ou não 

try {
    echo $numerador / $denominador;
} catch (\Throwable $th) {
   echo "{$th->getMessage()}";
} finally {
    echo "<br/>Fim da Execução<br/><br/>";
}

echo "<hr/>";

// include() || include_once() || require() || require_once() = Utilizado para reaproveitar o código PHP de um outro arquivo 

require_once("config.php");

$connection = getConnection();

echo $connection;

echo "<hr/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMail</title>
</head>
<body>
    <form action="index-aula4.php" method="post">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" placeholder="Informe seu nome:">
        <br><br>
        <label for="country">País</label>
        <select name="country" id="country">
            <option value="">Selecione um país:</option>
            <option value="brazil">Brasil</option>
            <option value="us">Estados Unidos</option>
        </select>
        <br><br>
        <label for="message">Mensagem</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Insira sua mensagem:"></textarea>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$data = [
    "name" => $_POST["name"] ?? "",
    "country" => strtoupper($_POST["country"]) ?? "",
    "message" => $_POST["message"] ?? ""
];

$mail = new PHPMailer(true);

try {
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = "sandbox.smtp.mailtrap.io";
    $mail->SMTPAuth = true;
    $mail->Username = "4c951da7964e27";
    $mail->Password = "0a54c1671b3ba2";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;
    $mail->CharSet = "UTF-8";

    // DE: (Quem está enviando)
    $mail->setFrom("tester@beerandcode.com.br", "Tester B&C");
    
    // PARA: (Quem irá receber)
    $mail->addAddress("mjsantanna02@gmail.com");

    // CONTEÚDO:
    $mail->isHTML(true);

    // ASSUNTO: 
    $mail->Subject = "Contato do Site";

    $corpo = "<b>Nome: </b> {$data['name']} <br/><br/>";
    $corpo .= "<b>País: </b> {$data['country']} <br/><br/>";
    $corpo .= "<b>Mensagem: </b> {$data['message']} <br/><br/>";

    $mail->Body = $corpo;
    $mail->send();

    echo "Mensagem enviada com sucesso!";
} catch (\Throwable $th) {
    echo $th->getMessage();
}

echo "<hr/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendFile</title>
</head>
<body>
    <form action="index-aula4.php" method="post" enctype="multipart/form-data">
        Selecione uma imagem:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <input type="submit" name="submit" value="Enviar Imagem">
    </form>
</body>
</html>

<?php 

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"]))
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "O arquivo é uma imagem - " . $check["mime"] . "<br/><br/>"; 
    } else {
        echo "O arquivo não é uma imagem";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Desculpe, o arquivo já existe";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Desculpe, seu arquivo é muito grande";
        $uploadOk = 0;
    }

    if ($imageFileType != "gif" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
        echo "Desculpe, apenas arquviso JPG, PNG JPEG e GIF's são permitidos";
        $uploadOk = 0;
    }

    if ($uploadOk === 0) {
        echo "Desculpe, o seu arquivo não foi enviado para o servidor";
    } else {
        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            echo "O arquivo " . basename($_FILES["fileToUpload"]["name"]) . " foi enviado com sucesso!";
        } else {
            echo "Desculpe, houve um erro ao enviar o seu arquivo para o servidor";
        }
    }
?>