<?= $this->extend('layout') ?>

<?= $this->section('conteudo') ?>

<div class="d-flex justify-content-end mb-4">
    <a href="<?= base_url('admin-login') ?>" class="text-decoration-none small text-muted">Área do Admin</a>
</div>

<h2 class="mb-3">Vagas Disponíveis</h2>

<?php if (empty($vagas)): ?>
    <p>Nenhuma vaga disponível no momento.</p>
<?php else: ?>
    <div class="row">
        <?php foreach ($vagas as $vaga) : ?>
            <div class="col-md-4 mb-3">
                <a href="<?= base_url('vaga/' . $vaga->id) ?>" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= $vaga->nomecargo ?></h5>
                            <p class="card-text">
                                <strong>Empresa:</strong> <?= $vaga->empresa ?><br>
                                <strong>Descrição:</strong> <?= $vaga->descricao ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>