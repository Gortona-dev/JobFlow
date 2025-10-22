<?php foreach ($vagas as $vaga): ?>
    <div class="col-md-6 col-lg-4">
        <a href="<?= base_url('vaga/' . $vaga->id) ?>" class="card vaga-card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body d-flex flex-column">

                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h3 class="h6 fw-semibold mb-0"><?= esc($vaga->nomecargo ?? 'Vaga') ?></h3>
                    <?php if (!empty($vaga->tipo)): ?>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle"><?= esc($vaga->tipo) ?></span>
                    <?php endif; ?>
                </div>

                <div class="text-secondary small mb-2">
                    <i class="bi bi-buildings"></i> <?= esc($vaga->empresa) ?>
                </div>

                <p class="text-muted vaga-desc mb-3"><?= esc($vaga->descricao) ?></p>

                <div class="d-flex flex-wrap gap-2 mb-3">

                    <span class="badge bg-light text-secondary border rounded-pill">
                        <i class="bi bi-geo-alt"></i> <?= esc($vaga->local) ?>
                    </span>

                    <span class="badge bg-success-subtle text-success border rounded-pill">
                        <i class="bi bi-cash-coin"></i> <?= esc($vaga->salario) ?>
                    </span>

                </div>


            </div>
        </a>
    </div>

<?php endforeach; ?>