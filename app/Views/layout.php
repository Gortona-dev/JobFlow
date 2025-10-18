<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            padding-top: 50px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .arrow {
            font-size: 2rem;
            text-decoration: none;
            color: black;
            margin-bottom: 20px;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 1rem 0;
            border-top: 1px solid #e7e7e7;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <main class="container mt-3">
        <?= $this->renderSection('conteudo') ?>
    </main>

    <footer>
        &copy; 2025 Vagas.com - Todos os direitos reservados
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>