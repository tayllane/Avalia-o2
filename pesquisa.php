<?php
include_once 'conexao.php'

$pesquisar = $_POST['pesquisar'];
$result_pesquisa = "SELECT * FROM cliente WHERE usuario LIKE '%pesquisar' LIMIT 5";
$resultado_pesquisa = mysqli_query($conn, $result_pesquisa);

while($rows_cursos = mysli_fetch_array($resultado_pesquisa)){
	echo"Usuario:".$rows_cursos['usuario']."</br>";
}


?>