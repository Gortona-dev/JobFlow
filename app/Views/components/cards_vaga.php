<?php foreach ($vagas as $vaga): ?>
  <div class="col-md-6 col-lg-4">
    <div class="card vaga-card h-100 shadow-sm border-0 rounded-4">
      <div class="card-body d-flex flex-column">

        <div class="d-flex justify-content-between align-items-start mb-2">
          <h3 class="h6 fw-semibold mb-0"><?= esc($vaga->nomecargo ?? 'Vaga') ?></h3>
          <?php if (!empty($vaga->tipo)): ?>
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle"><?= esc($vaga->tipo) ?></span>
          <?php endif; ?>
        </div>

        <?php if (!empty($vaga->empresa)): ?>
          <div class="text-secondary small mb-2">
            <i class="bi bi-buildings me-1"></i><?= esc($vaga->empresa) ?>
          </div>
        <?php endif; ?>

        <?php
          $desc = strip_tags($vaga->descricao ?? '');
          if (function_exists('character_limiter')) {
            $desc = character_limiter($desc, 150);
          } else {
            $desc = mb_strimwidth($desc, 0, 150, '...');
          }
        ?>
        <p class="text-muted vaga-desc mb-3"><?= esc($desc) ?></p>

        <div class="d-flex flex-wrap gap-2 mb-3">
          <?php if (!empty($vaga->cidade) || !empty($vaga->uf)): ?>
            <span class="badge bg-light text-secondary border rounded-pill">
              <i class="bi bi-geo-alt me-1"></i><?= esc(trim(($vaga->cidade ?? '').' '.($vaga->uf ?? ''))) ?>
            </span>
          <?php endif; ?>
          <?php if (!empty($vaga->salario)): ?>
            <span class="badge bg-success-subtle text-success border rounded-pill">
              <i class="bi bi-cash-coin me-1"></i><?= esc($vaga->salario) ?>
            </span>
          <?php endif; ?>
          <?php if (!empty($vaga->modalidade)): ?>
            <span class="badge bg-info-subtle text-info border rounded-pill">
              <i class="bi bi-laptop me-1"></i><?= esc($vaga->modalidade) ?>
            </span>
          <?php endif; ?>
        </div>

        <div class="mt-auto d-flex gap-2">
          <a href="<?= base_url('vaga/'.$vaga->id) ?>" class="btn btn-primary flex-fill">
            Ver detalhes
          </a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
