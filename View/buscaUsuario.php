<?php
include_once '../crud/UsuarioCrud.php';
$usu_sus = filter_input(INPUT_POST, "usu_sus", FILTER_SANITIZE_MAGIC_QUOTES);
if (empty($usu_sus)) {
     echo "<div class='alert alert-danger'>impossivel pesquisar campo vazio</div>";
}  else {   
$pesquisa = new UsuarioCrud();
$usuario = $pesquisa->find($usu_sus);
if ($usuario != "") {
    ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>SUS</th>
                <th>Cpf</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Mãe</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $usuario->usu_sus; ?></td>
                <td><?= $usuario->usu_cpf; ?></td>
                <td><?= $usuario->usu_nome; ?></td>
                <td><?= $usuario->usu_email; ?></td>
                <td><?= $usuario->usu_tel; ?></td>
                <td><?= $usuario->usu_mae; ?></td>
                <td><?= $usuario->usu_obs; ?></td>
            </tr>
        </tbody>
    </table>
    <?php
} else {
    echo "<div class='alert alert-danger'>Nada encontrado</div>";
}

}


