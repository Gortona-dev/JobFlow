<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Acesso Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/admin_login.css') ?>">
</head>

<body class="login-bg">

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="login-card card shadow-sm border-0 rounded-4 p-4 p-md-5" style="max-width: 460px; width: 100%;">
            <div class="text-center mb-3">
                <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary" style="width:56px;height:56px;">
                    <i class="bi bi-briefcase-fill fs-4"></i>
                </div>
                <h1 class="h4 fw-semibold mt-2 mb-0">Acesso Admin</h1>
                <p class="text-secondary small mb-0">Entre para gerenciar vagas e cargos</p>
            </div>

            <form method="post" action="<?= base_url('admin-login') ?>">
                <a href="<?= base_url() ?>" class="small text-decoration-none">Voltar ao site</a>
                <div class="form-floating mb-3">
                    <input name="user" type="text" class="form-control" id="user" placeholder="Usuário"
                        autocomplete="username" required value="admin">
                    <label for="user">Usuário</label>
                </div>

                <div class="mb-3 position-relative">
                    <div class="form-floating">
                        <input name="pass" type="password" class="form-control" id="pass" placeholder="Senha"
                            autocomplete="current-password" required value="admin123">
                        <label for="pass">Senha</label>
                    </div>
                    <button type="button" class="btn btn-link position-absolute top-0 end-0 pe-3 pt-3 text-secondary" id="togglePass">
                        <i class="bi bi-eye-slash" id="toggleIcon"></i>
                    </button>
                </div>

                <div class="d-grid mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
                    </button>
                </div>

                <p class="text-muted small text-center mb-0">Credenciais pré-preenchidas (demo).</p>

                <?php if (session()->getFlashdata('msg')): ?>
                    <div id="flash-msg" class="alert alert-danger position-fixed bottom-0 start-0 m-3" style="min-width: 250px; z-index:1050;">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
            </form>
            <script>
                const toggle = document.getElementById('togglePass');
                const icon = document.getElementById('toggleIcon');
                const pass = document.getElementById('pass');
                if (toggle) {
                    toggle.addEventListener('click', () => {
                        const show = pass.type === 'password';
                        pass.type = show ? 'text' : 'password';
                        icon.className = show ? 'bi bi-eye' : 'bi bi-eye-slash';
                    });
                }
            </script>
        </div>
    </div>
</body>

</html>