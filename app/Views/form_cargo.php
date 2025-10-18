<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4"><?php echo $titulo ?></h1>

        <?php if ($msg != "") : ?>
            <p><?php echo $msg ?></p>
        <?php endif; ?>

        <?php if (isset($erros)) : ?>
            <ul style="color:red;">
                <?php foreach ($erros as $erro) : ?>
                    <li><?php echo $erro ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo isset($cargo) ? $cargo->id : "" ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Cargo</label>
                <input type="text" class="form-control" id="nomecargo" name="nomecargo" value="<?php echo isset($cargo) ? $cargo->nomecargo : "" ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?php echo base_url('cargos') ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>

</html>