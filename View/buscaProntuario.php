<?php
include_once '../crud/ProntuarioCrud.php';
$sus = filter_input(INPUT_POST, "sus", FILTER_SANITIZE_MAGIC_QUOTES);
if (empty($sus)) {
    echo "<div class='alert alert-danger'>impossivel pesquisar campo vazio</div>";
} else {
    $pesquisa = new ProntuarioCrud();
    $prontuario = $pesquisa->find($sus);
    if($prontuario){
    ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>SUS</th>
                <th>Nome</th>
                <th>Mãe</th>
                <th>Profissional</th>
                <th>Consulta</th>
                <th>Data</th>
                <th>Pedido De Exame</th>
                <th>Exame Solicitação</th>
                <th>Observação</th>
            </tr>
        </thead>
        <?php foreach ($prontuario as $key => $value) {
            ?>
            <tbody>
                <tr>
                    <td><?= $value->usu_sus; ?></td>
                    <td><?= $value->usu_nome; ?></td>
                    <td><?= $value->usu_mae; ?></td>
                    <td><?= $value->pro_nome; ?></td>
                    <td><?= $value->ate_tp_consulta; ?></td>
                    <td><?= $value->ate_data; ?></td>
                    <td><?= $value->exa_pedido; ?></td>
                    <td><?= $value->exa_nome; ?></td>
                    <td><?= $value->usu_obs; ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <?php
    }  else {
        echo '<div class="alert alert-danger">Nada encontrado</div>';
    }
}