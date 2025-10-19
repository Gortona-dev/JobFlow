<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4"><?= $titulo ?></h1>

        <?php if (!empty($erros)) : ?>
            <div class="alert alert-danger text-start">
                <ul class="mb-0">
                    <?php foreach ($erros as $erro) : ?>
                        <li><?= $erro ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" name="id" value="<?= isset($vaga) ? $vaga->id : '' ?>">

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?= isset($vaga) ? $vaga->descricao : '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="salario" class="form-label">Salário</label>
                <input type="text" class="form-control" id="salario" name="salario" value="<?= isset($vaga) ? $vaga->salario : '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="requisitos" class="form-label">Requisitos</label>
                <input type="text" class="form-control" id="requisitos" name="requisitos" value="<?= isset($vaga) ? $vaga->requisitos : '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" value="<?= isset($vaga) ? $vaga->local : '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="empresa" class="form-label">Empresa</label>
                <input type="text" class="form-control" id="empresa" name="empresa" value="<?= isset($vaga) ? $vaga->empresa : '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <?= $comboCargo ?>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?= base_url('vagas') ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>

</html>