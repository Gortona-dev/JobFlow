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
