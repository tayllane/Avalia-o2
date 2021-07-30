 <?php

include_once'banco.php';
 
public Class Cadastrar {

   public function Dados(){

 if(isset($_POST['senha'])) {
   $usuario = $_POST['usuario'];
   $senha = $_POST['senha']; 
   $nome = $_POST['nome'];
   $nome = $_POST['email'];

}
  public function Criptografar(){

   $criptografada = password_hash($senha, PASSWORD_DEFAULT);

}

  public function Verificar(){
   if($usuario == '' || $senha  == ''|| $nome == ''||$email == '' ){
   echo 'Preencha o campo.';
}else{

	$sl = $conn->prepare("SELECT * FROM cliente WHERE email = ?");
	$slq -> bindValue(1, $email);
	$slq->execute();
	$count = $sql->rowcount();

	if($count > 0){
		echo'Esse E-mail ja esta cadastrado';
	}else{
	  $sql = $conn->prepare("INSERT INTO cliente VALUES (null, ?, ?, ?, ?)");
      $sql->execute([$usuario, $criptografada, $nome, $email]);
      echo 'Usuário cadastrado com sucesso';
      echo  "<a href='listar.php'> Lista de usuarios cadastrados </a>" ;
}
}
}
}
}
?>