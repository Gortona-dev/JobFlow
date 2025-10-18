<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .menu-top {
            margin-bottom: 20px;
        }

        .menu-top a {
            margin-right: 20px;
            font-size: 1.5rem;
            text-decoration: none;
            color: black;
        }

        .menu-top a.active {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="menu-top">
            <a href="<?= base_url('admin-logout') ?>">&larr;</a>
            <a href="<?= base_url('vagas') ?>" class="<?= ($active ?? '') === 'vagas' ? 'active' : '' ?>">Vagas</a>
            <a href="<?= base_url('cargos') ?>" class="<?= ($active ?? '') === 'cargos' ? 'active' : '' ?>">Cargos</a>
        </div>

        <?= $this->renderSection('conteudo') ?>
    </div>
</body>

</html>