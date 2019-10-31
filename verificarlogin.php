<?php
// pegar os dados da tela
$email = $_POST["email"];
$senha = $_POST["senha"];

//echo "E-mail : " .$email;
//echo "<br>Senha".$senha;

//Abrir conexão com banco de dados
    // mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO)
$con = mysqli_connect("localhost", "root", "", "aulaprojeto");

// montar a instrução de seleção para ir ao banco
$sql = "select * from usuario where email = '".$email."' and senha ='".$senha."'"; 
// executar a instrução
//if (mysqli_query($con,$sql)){
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    //echo "Encontrei!";
    //redirecionar para a página painel,
    
    echo "<script>";
    echo "location.href='ADM/painel.php'";
    echo "</script>";
}else{
    //echo "Não encontrei, mals";
    $mensagem = base64_encode("Usuário/senha inválido");
    echo "<script>";
    echo "location.href='logar.php?m=".$mensagem."'";
    echo "</script>";
}
//by : Hudson 
?>