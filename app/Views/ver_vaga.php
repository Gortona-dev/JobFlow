<?= $this->extend('layout') ?>

<?= $this->section('conteudo') ?>

<a class="arrow" href="<?= base_url('/') ?>">&larr;</a>
<div class="container mt-4">
    <h1 class="mb-3"><?= $vaga->nomecargo ?></h1>

    <p><strong>Empresa:</strong> <?= $vaga->empresa ?></p>
    <p><strong>Descrição:</strong> <?= $vaga->descricao ?></p>
    <p><strong>Requisitos:</strong> <?= $vaga->requisitos ?></p>
    <p><strong>Local:</strong> <?= $vaga->local ?></p>
    <p><strong>Salário:</strong> <?= number_to_currency($vaga->salario, 'BRL', 'pt-BR', 2) ?></p>

</div>

<?= $this->endSection() ?>