<!DOCTYPE html>
<?php 
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario;
    $listaUsers = $cadUsuario->getUsuarios();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Lista Usuario</title>
    </head>
<body>
    <div>
            <h2>Lista Usuários</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuário</th>
                        <th>Usuário</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listaUsers as $user):
                    ?>
                    <tr>
                        <td><?php echo $user['idUsuario']; ?></td>
                        <td><?php echo $user['nomeUsuario']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php echo $user['perfilAcesso']; ?></td>
                        <td>Editar
                            <form action="../controller/DeletarUser.php" method="POST">
                                <input
                                type="hidden"
                                name="idUsuario"
                                value="<?php echo $user['idUsuario']; ?>"
                                />
                                <input type="submit" value="Deletar" name="deletar"/>
                            </form>
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
            <input type="button" value="Voltar"
            onclick="location.href='../index.php'"/>
        </div>
    </body>
</html>