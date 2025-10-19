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
            <input type="hidden" name="id" value="<?= isset($cargo) ? $cargo->id : "" ?>">
            <div class="mb-3">
                <label for="nomecargo" class="form-label">Nome do Cargo</label>
                <input type="text" class="form-control" id="nomecargo" name="nomecargo" value="<?= isset($cargo) ? $cargo->nomecargo : "" ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?= base_url('cargos') ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>

</html>