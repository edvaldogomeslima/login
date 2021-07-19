<?php 

include_once ('./op/conexao.php');

$login = $_POST['login']; /*guarda os valores na variavel*/ 
$senha = $_POST['senha']; /*guarda os valores na variavel*/

$sql = "INSERT INTO `adm` (`id`,`login`, `senha`) VALUES (NULL, '$login', '$senha')"; /* guarda a instrução sql (enviar informação)*/
$sql = "SELECT * FROM adm";  /* guarda a instrução sql (receber)*/

$qual_coisa = $conexao->query($sql); /*executa a instrução sql*/

while($linha = $qual_coisa->fetch_assoc()){
    echo $linha['login'] . '<br>';
} /* imprime o valor */

header('Location: index.php'); /* re-direciona pra outra pagina */
