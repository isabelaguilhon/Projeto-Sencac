<!DOCTYPE html>
<?php 
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario;
    // $listaUsers = $cadUsuario->getUsuarios();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
    <div class="container p-3 mb-2">
        <h1>Cadastro de Usuário</h1>
            <form 
            action="<?php $cadUsuario->inserir(); ?>" 
            method="POST"
            >
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="nome" />
                <label for="floatingInput">Insira seu nome...</label>
            </div>
                <br/><br/>
                <select class="form-select" name="perfilAcesso">
                    <option value="">Selecione uma opção</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuário</option>
                </select>
                <br/><br/>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="usuario" placeholder="Insira seu nome de usuário..." />
                    <label for="floatingInput">Insira seu nome de usuário...</label>
                </div>
                <br/><br/>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" name="senha" minlength="8" placeholder="Insira a senha..."/>
                    <label for="floatingInput">Insira a senha...</label>
                </div>
                <br/><br/>
                <input class="btn btn-primary" type="submit" value="Salvar" name="salvar"/>
                <input class="btn btn-danger" type="reset" value="Limpar"/>
                <input class="btn btn-secondary" type="button" value="Voltar"
                onclick="location.href='../index.php'" />
                <input  class="btn btn-dark" type="button" value="Listar Usuários"
                onclick="location.href='./listaUsuario.php'"/>
            </form>
        </div>
        <script href="../assets/css/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>