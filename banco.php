<?php
session_start();
Class Conn{
  private static string $username = "root";
  private static string $database = "atividade";
  private static string $password = "";

  public function Connect(){
try {
    $conn = new PDO('mysql:host=localhost;dbname=atividade', "root", "bolinha");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    exit;

}
$query = $pdo->prepare("select cliente FROM atividade");
$query->execute();

for($i=0; $row = $query->fetch(); $i++){
	echo $i."-".$row['cliente']."</br>";
}
unset($pdo);
unset($query);
}
}


?>