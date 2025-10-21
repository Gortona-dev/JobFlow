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
  <nav class="navbar navbar-light bg-light border-bottom sticky-top">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url() ?>">
        <i class="bi bi-briefcase-fill"></i>
        <span>Painel Admin</span>
      </a>
      <div class="d-flex gap-2">
        <a href="<?= base_url('vagas') ?>" class="btn btn-outline-secondary btn-sm ">Vagas</a>
        <a href="<?= base_url('cargos') ?>" class="btn btn-outline-secondary btn-sm ">Cargos</a>
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

  <footer class="border-top py-3">
    <div class="container small text-muted text-center">
      &copy; <?= date('Y') ?> Vagas.com — Todos os direitos reservados
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('js/admin.js') ?>"></script>
</body>
</html>
