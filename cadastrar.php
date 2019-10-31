<?php include_once 'topo.php'; ?>
<h3>Novo Usuário</h3>
<form>
    Nome:<br>
    <input type="text" name placeholder="Digite o nome "/>
    Perfil:
    <select name="perfil">
    <option value="adm">Administrador</option>
    <option value="usu">Usuário</option>
    </select>
    <br><br>
    <form action ="cadastrar.php" method ="post" class="formgroup">
    E-mail.: <input type="text" name="email" placeholder="Digite o E-mail" class="form-control"/>
    <br><br>

    Senha.: <input type="password" name="senha" placeholder="Digite a Senha" class="form-control"/>
    <br><br>
    <input type="submit" value="Cadastrar" class="btn btn-primary"/>
        
</form>
<?php
if($_POST){
    $nome = ["nome"];
    $email = ["email"];
    $perfil = ["perfil"];
    $senha = ["senha"];

if($nome == $senha){
    echo "Nome e senha não podem ser iguais!";
}
}
include_once 'conexao.php';
?>