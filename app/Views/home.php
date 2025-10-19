<?= $this->extend('layout') ?>
<?= $this->section('conteudo') ?>

<div class="d-flex justify-content-end mb-4">
    <a href="<?= base_url('admin-login') ?>" class="text-decoration-none small text-muted">
        Área do Admin
    </a>
</div>

<h2 class="mb-3">Vagas Disponíveis</h2>

<?php if (empty($vagas)) : ?>
    <p>Nenhuma vaga disponível no momento.</p>
<?php else : ?>
    <div class="row">
        <?= $this->include('cards_vaga') ?>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
