<?php
$titulo = "Usuário";
include 'cabecalho.php';

if($_POST){
    $p2 = new \App\Model\Usuario();
    $p2->setId($_POST['id']);
    $p2->setSenha($_POST['senha']);
    
    $p2DAO = new \App\DAO\ProdutoDAO();
    if ($p2DAO->alterar($p2))
        header("Location: produto-pesquisar.php?msg=2");

}


$p = new \App\Model\Produto();
isset($_GET) ? $p->setId($_GET['id']) : $p->setId($_POST['id']);

$pDAO = new \App\DAO\ProdutoDAO();
$resultado = $pDAO->pesquisarUm($p);

?>
<h1>Alterar senha</h1>
<html>
<head>
<title>Mudar Senha</title>
</head>
<body>

<form name="form1" id="form1" action="mudar_senha.php" method="POST">

<table border="0" width="100%">
<tr>
<td>Login:</td>
<td><input type="text" name="email" id="email">
</td>
</tr>
<tr>
<td>Senha Antiga:</td>
<td><input type="password" name="senha" id="senha">
</td>
</tr>
<tr>
<td>Nova Senha:</td>
<td><input type="password" name="nsenha" id="nsenha">
</td>
</tr>
<tr>
<td>E-mail:</td>
<td><input type="text" name="email" id="email">
</td>
</tr>

<tr>
<td></td>
<td><input name="submit" type="submit" value="Mudar Senha"></td>
</tr>
</table>

</form>
</body>
</html>
