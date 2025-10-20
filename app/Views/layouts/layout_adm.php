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
  <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url() ?>">
        <i class="bi bi-briefcase-fill"></i>
        <span>Vagas</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navTop" aria-controls="navTop" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navTop">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item">
            <a class="nav-link <?= ($active ?? '')==='vagas' ? 'active' : '' ?>" href="<?= base_url('vagas') ?>">
               Vagas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($active ?? '')==='cargos' ? 'active' : '' ?>" href="<?= base_url('cargos') ?>">
               Cargos
            </a>
          </li>
          <li class="nav-item ms-lg-2">
            <a class="btn btn-outline-danger btn-sm" href="<?= base_url('admin-logout') ?>">
              <i class="bi bi-box-arrow-right me-1"></i> Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    <div class="card shadow-sm p-4 bg-white">
      <?= $this->renderSection('conteudo') ?>
    </div>
  </main>

  <footer class="border-top py-3">
    <div class="container small text-muted text-center">
      &copy; <?= date('Y') ?> Vagas.com — Todos os direitos reservados
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('js/admin.js') ?>"></script>
</body>
</html>
