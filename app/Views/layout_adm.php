<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.css">
    
</head>

<body>
    <div class="container">
        <div class="menu-top">
            <a href="<?= base_url('admin-logout') ?>">&larr;</a>
            <a href="<?= base_url('vagas') ?>" class="<?= ($active ?? '') === 'vagas' ? 'active' : '' ?>">Vagas</a>
            <a href="<?= base_url('cargos') ?>" class="<?= ($active ?? '') === 'cargos' ? 'active' : '' ?>">Cargos</a>
        </div>

        <div class="card shadow-sm p-4 bg-white pb-5">
            <?= $this->renderSection('conteudo') ?>
        </div>

    </div>
    <script src="/js/admin.js"></script>
</body>

</html>