<!DOCTYPE html>
<?php 
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <h1>Cadastro de Usuário</h1>
        <form 
        action="<?php $cadUsuario->inserir(); ?>" 
        method="POST"
        >
            <input type="text" name="nome" placeholder="Insira seu nome..."/>
            <br/><br/>
            <input type="text" name="usuario" placeholder="Insira seu nome de usuário..." />
            <br/><br/>
            <input type="password" name="senha" minlength="8" placeholder="Insira a senha..."/>
            <br/><br/>
            <input type="submit" value="Salvar" name="salvar"/>
            <input type="reset" value="Limpar"/>
            <input type="button" value="Voltar"
            onclick="location.href='../index.php'"/>
            <input type="button" value="Listar Usuários"
            onclick="location.href='listaUsuarios.php'"/>
        </form>
    </body>
</html>