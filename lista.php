<?php
include_once'banco.php';

$stmt = $con->prepare("INSERT INTO cliente (nome, email) VALUES(?, ?)");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->execute();

$rs = $conn->prepare("SELECT nome, email FROM cliente WHERE nome LIKE ?”);

$rs->bindParam(1, $nome);
if($rs->execute()){
if($rs->rowCount() > 0){
while($row = $rs->fetch(PDO::FETCH_OBJ)){
  echo $row->nome . “<br />”;
  echo $row->email . “<br />”;
}
 }
 }  
  ?>

  <html>
  <body>
  <p> pesquisar usuario especifico </p>

 form method = "POST" action = "pesquisar.php">
  <br><label for="nome_login">Usuario:</label></br>
 	 <input type=text name = usuario>

 	 <input type = "submit" value = "enviar">
</body>
 	 </form>

 	 </html>


