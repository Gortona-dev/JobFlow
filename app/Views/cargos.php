<?= $this->extend('layout_adm') ?>

<?= $this->section('conteudo') ?>

<h1 class="text-center mb-4">Lista de Cargos</h1>

<div class="d-flex justify-content-end mb-3">
    <a href="<?= base_url('cargos/adicionar') ?>" class="btn btn-success">Cadastrar Novo Cargo</a>
</div>

<?php if (session()->getFlashdata('msg')): ?>
    <div id="flash-msg" class="alert alert-success position-fixed bottom-0 start-0 m-3" style="z-index: 1050; min-width: 250px;">
        <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>

<div style="max-height: 400px; overflow-y: auto;">
    <table class="table table-striped mb-0">
        <thead class="table-light position-sticky top-0" style="z-index: 1;">
            <tr>
                <th>ID</th>
                <th>Nome do Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cargos as $cargo) : ?>
                <tr>
                    <td><?= $cargo->id ?></td>
                    <td><?= $cargo->nomecargo ?></td>
                    <td>
                        <a href="<?= base_url('cargos/editar/' . $cargo->id) ?>" class="btn btn-sm btn-secondary">Editar</a>
                        &nbsp;
                        <a href="<?= base_url('cargos/excluir/' . $cargo->id) ?>" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    setTimeout(() => {
        const flash = document.getElementById('flash-msg');
        if (flash) {
            flash.style.transition = "opacity 0.5s";
            flash.style.opacity = "0";
        }
    }, 2500);
</script>

<?= $this->endSection() ?>