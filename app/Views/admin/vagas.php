<?= $this->extend('layouts/layout_adm') ?>
<?= $this->section('conteudo') ?>

<h1 class="text-center mb-4">Lista de Vagas</h1>

<div class="d-flex justify-content-end mb-3">
    <a href="<?= base_url('vagas/adicionar') ?>" class="btn btn-success">Cadastrar Nova Vaga</a>
</div>

<?php if (session()->getFlashdata('msg')): ?>
    <div id="flash-msg" class="alert alert-success position-fixed bottom-0 start-0 m-3">
        <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>

<div class="table-container">
    <table class="table table-striped">
        <thead class="table-light position-sticky top-0">
            <tr>
                <th>ID</th>
                <th>Cargo</th>
                <th>Empresa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vagas as $vaga): ?>
                <tr>
                    <td><?= $vaga->id ?></td>
                    <td><?= $vaga->nomecargo ?></td>
                    <td><?= $vaga->empresa ?></td>
                    <td>
                        <a href="<?= base_url('vagas/editar/' . $vaga->id) ?>" class="btn btn-sm btn-secondary">Editar</a>
                        <a href="<?= base_url('vagas/excluir/' . $vaga->id) ?>"
                            class="btn btn-sm btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esta vaga?')">
                            Excluir
                        </a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>