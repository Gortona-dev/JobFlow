<?= $this->extend('layouts/layout') ?>
<?= $this->section('conteudo') ?>

<section class="py-4 p-md-5 mb-4 rounded-4" style="background:linear-gradient(135deg,#eef4ff,#f8fafc);border:1px solid #e9eefc;">
  <h1 class="h3 h-md-2 fw-semibold mb-2">Encontre a sua próxima vaga</h1>
  <p class="text-secondary mb-0">Veja as oportunidades abertas e acesse os detalhes para se candidatar.</p>
</section>

<div class="d-flex align-items-center justify-content-between mb-3">
  <h2 class="h4 mb-0">Vagas Disponíveis</h2>
  <?php if (isset($total) && is_numeric($total)): ?>
    <span class="badge rounded-pill bg-primary-subtle text-primary border border-primary-subtle">
      <?= (int)$total ?> vagas
    </span>
  <?php endif; ?>
</div>

<?php if (empty($vagas)) : ?>
  <div class="text-center p-5 bg-white border rounded-4">
    <i class="bi bi-briefcase text-muted" style="font-size:56px"></i>
    <h3 class="h5 mt-3 mb-1">Nenhuma vaga no momento</h3>
    <p class="text-secondary mb-0">Volte em breve para novas oportunidades.</p>
  </div>
<?php else : ?>
  <div class="row g-3 g-md-4">
    <?= $this->include('components/cards_vaga') ?>
  </div>
  <?php if (isset($pager)): ?>
    <div class="d-flex justify-content-center mt-4"><?= $pager->links() ?></div>
  <?php endif; ?>
<?php endif; ?>

<?= $this->endSection() ?>
