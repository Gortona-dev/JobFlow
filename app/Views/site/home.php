<?= $this->extend('layouts/layout') ?>
<?= $this->section('conteudo') ?>

<section class="py-4 p-md-5 mb-4 rounded-4" style="background:linear-gradient(135deg,#eef4ff,#f8fafc);border:1px solid #e9eefc;">
  <h1 class="h3 fw-semibold mb-2">Encontre a sua próxima vaga</h1>
  <p class="text-secondary mb-0">Veja as oportunidades abertas e acesse os detalhes para se candidatar.</p>
</section>

<h2 class="h4 mb-3">Vagas Disponíveis</h2>

<div class="row g-3 g-md-4">
  <?= $this->include('components/cards_vaga') ?>
</div>

<?php if (isset($pager)): ?>
  <div class="d-flex justify-content-center mt-4"><?= $pager->links() ?></div>
<?php endif; ?>

<?= $this->endSection() ?>
