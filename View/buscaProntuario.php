<?php
include_once '../crud/ProntuarioCrud.php';
$sus = filter_input(INPUT_POST, "sus", FILTER_SANITIZE_MAGIC_QUOTES);
if (empty($sus)) {
     echo "<div class='alert alert-danger'>impossivel pesquisar campo vazio</div>";
}  else {   
$pesquisa = new ProntuarioCrud();
$prontuario = $pesquisa->find($sus);
if ($prontuario != "") {
    ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>SUS</th>
                <th>NOME</th>
                <th>MÃE</th>
                <th>PROFISSIONAL</th>
                <th>CONSULTA</th>
                <th>DATA</th>
                <th>PEDIDO DE EXAME</th>
                <th>EXAME SOLICITADO</th>
                <th>OBSERVAÇÃO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $prontuario->usu_sus; ?></td>
                <td><?= $prontuario->usu_nome; ?></td>
                <td><?= $prontuario->usu_mae; ?></td>
                <td><?= $prontuario->pro_nome; ?></td>
                <td><?= $prontuario->ate_tp_consulta; ?></td>
                <td><?= $prontuario->ate_data; ?></td>
                <td><?= $prontuario->exa_pedido; ?></td>
                <td><?= $prontuario->exa_nome; ?></td>
                <td><?= $prontuario->usu_obs; ?></td>
            </tr>
        </tbody>
    </table>
    <?php
} else {
    echo "<div class='alert alert-danger'>Nada encontrado</div>";
}
}