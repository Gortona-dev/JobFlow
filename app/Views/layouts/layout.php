<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= esc($title ?? 'Vagas') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/layout.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url() ?>">
                <i class="bi bi-briefcase-fill"></i>
                <span>PhpVagas</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navTop" aria-controls="navTop" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navTop">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-light btn-sm" href="<?= base_url('admin-login') ?>">
                            <i class="bi bi-person-lock me-1"></i> Área do Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container py-4">
        <?= $this->renderSection('conteudo') ?>
    </main>
    <footer class="d-flex justify-content-between align-items-center py-3 border-top px-3 bg-white">
        <span class="text-body-secondary">© 2025 PhpVagas - Trabalho 1 - desenvolvimento web</span>
        <a class="text-body-secondary" href="https://github.com/Gortona-dev/JobFlow" target="_blank">
            <i class="bi bi-github" style="font-size: 1.5rem;"></i>
        </a>
    </footer>
</body>

</html>