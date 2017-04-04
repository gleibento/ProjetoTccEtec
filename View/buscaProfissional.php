<?php
include_once '../crud/ProfissionalCrud.php';
$cpf = filter_input(INPUT_POST, "palavra", FILTER_SANITIZE_MAGIC_QUOTES);
if (empty($cpf)) {
     echo "<div class='alert alert-danger'>impossivel pesquisar campo vazio</div>";
}  else {
$profi = new ProfissionalCrud();
$profissional = $profi->find($cpf);
if ($profissional != "") {
    ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Genero</th>
                <th>Codigo Cargo</th>
                <th>Registro</th>
                <th>Login</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $profissional->pro_cpf; ?></td>
                <td><?php echo $profissional->pro_nome ?></td>
                <td><?php echo $profissional->pro_genero ?></td>
                <td><?php echo $profissional->car_cod ?></td>
                <td><?php echo $profissional->pro_registro ?></td>
                <td><?php echo $profissional->pro_login ?></td>
                <td><?php echo $profissional->pro_senha ?></td>
            </tr>
        </tbody>
    </table>
    <?php
} else {
    echo "<div class='alert alert-danger'>Nada encontrado</div>";
}
}

