<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Painel Admin') ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>

<body>
    <nav class="navbar bg-white border-bottom sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="navbar-brand d-flex align-items-center gap-2">
                <i class="bi bi-briefcase-fill"></i>
                <span>Painel Admin</span>
            </span>
            <div class="d-flex gap-2">
                <a href="<?= base_url('vagas') ?>" class="btn btn-light btn-sm ">Vagas</a>
                <a href="<?= base_url('cargos') ?>" class="btn btn-light btn-sm ">Cargos</a>
                <a href="<?= base_url('admin-logout') ?>" class="btn btn-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <div class="card shadow-sm p-4 bg-white">
            <?= $this->renderSection('conteudo') ?>
        </div>
    </main>

    <footer class="d-flex justify-content-between align-items-center py-3 border-top px-3 bg-white">
        <span class="text-body-secondary">© 2025 PhpVagas - Trabalho 1 - desenvolvimento web</span>
        <a class="text-body-secondary" href="https://github.com/Gortona-dev/JobFlow" target="_blank">
            <i class="bi bi-github" style="font-size: 1.5rem;"></i>
        </a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('js/admin.js') ?>"></script>
</body>

</html>