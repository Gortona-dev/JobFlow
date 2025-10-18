<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Entrar Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="max-width:420px; margin-top:80px;">
        <h3 class="mb-3 text-center">Acesso Admin</h3>

        <form method="post" action="<?= base_url('admin-login') ?>">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Usuário</label>
                <input name="user" type="text" class="form-control" value="admin" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input name="pass" type="password" class="form-control" value="admin123" required>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary">Entrar</button>
            </div>
        </form>

        <p class="text-muted small mt-3">Credenciais pré‑preenchidas (demo).</p>
    </div>
</body>

</html>