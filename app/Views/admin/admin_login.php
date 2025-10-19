<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Acesso Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_login.css">
</head>

<body>
    <div class="container login-container">
        <h3 class="mb-3 text-center">Acesso Admin</h3>

        <form method="post" action="<?= base_url('admin-login') ?>">
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

    <?php if (session()->getFlashdata('msg')): ?>
        <div id="flash-msg" class="alert alert-danger position-fixed bottom-0 start-0 m-3" style="min-width: 250px; z-index:1050;">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <script>
        setTimeout(() => {
            const flash = document.getElementById('flash-msg');
            if (flash) {
                flash.style.transition = "opacity 0.5s";
                flash.style.opacity = "0";
            }
        }, 2500);
    </script>
</body>

</html>
