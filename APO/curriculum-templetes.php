<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?= htmlspecialchars($nome) ?></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .curriculo .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .curriculo .foto {
            width: 3cm;
            height: 4cm;
            object-fit: cover;
            margin-right: 20px;
        }
        .button-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container curriculo">
        <div class="button-container">
        </div>
        <div class="header">
            <?php if (!empty($foto)): ?>
                <img src="<?= htmlspecialchars($foto) ?>" alt="Foto de <?= htmlspecialchars($nome) ?>" class="foto">
            <?php endif; ?>
            <div>
                <h1><?= htmlspecialchars($nome) ?></h1>
                <p>Email: <?= htmlspecialchars($email) ?></p>
                <p>Telefone: <?= htmlspecialchars($telefone) ?></p>
                <p>Data de Nascimento: <?= htmlspecialchars($data_nascimento) ?></p>
                <p>Idade: <?= htmlspecialchars($idade) ?></p>
            </div>
        </div>
        <div class="section">
            <h2>Formação</h2>
            <?php if (!empty($historico_formacao)): ?>
                <?php foreach ($historico_formacao as $index => $formacao): ?>
                    <div class="historico">
                        <p><strong>Formação:</strong> <?= htmlspecialchars($formacao) ?></p>
                        <p><strong>Instituição:</strong> <?= htmlspecialchars($historico_instituicao[$index]) ?></p>
                        <p><strong>Data de Início:</strong> <?= htmlspecialchars($historico_inicio[$index]) ?> - <strong>Data de Fim:</strong> <?= htmlspecialchars($historico_fim[$index]) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="section">
            <h2>Experiências</h2>
            <?php if (!empty($experiencia_funcao)): ?>
                <?php foreach ($experiencia_funcao as $index => $funcao): ?>
                    <div class="experiencia">
                        <p><strong>Função:</strong> <?= htmlspecialchars($funcao) ?></p>
                        <p><strong>Empresa:</strong> <?= htmlspecialchars($experiencia_empresa[$index]) ?></p>
                        <p><strong>Data de Início:</strong> <?= htmlspecialchars($experiencia_inicio[$index]) ?> - <strong>Data de Fim:</strong> <?= htmlspecialchars($experiencia_fim[$index]) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="section">
            <h2>Idiomas</h2>
            <?php if (!empty($idiomas)): ?>
                <?php foreach ($idiomas as $idioma): ?>
                    <div class="idiomas">
                        <p><strong>Idioma:</strong> <?= htmlspecialchars($idioma) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="section">
            <h2>Competências</h2>
            <?php if (!empty($competencias)): ?>
                <?php foreach ($competencias as $competencia): ?>
                    <div class="competencias">
                        <p><strong>Competência:</strong> <?= htmlspecialchars($competencia) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="section">
            <h2>Objetivo</h2>
            <p><?= htmlspecialchars($objetivo) ?></p>
        </div>
        <div>
        <button onclick="generatePDF()" class="btn btn-success">Imprimir Currículo</button>
            </div>

         <script>
            function generatePDF() {
                // Encontra o botão de imprimir
                var printButton = document.querySelector("button");

                // Esconde o botão de imprimir
                printButton.style.display = "none";

                // Gera o PDF
                window.print();

                // Restaura o botão de imprimir após a impressão
                printButton.style.display = "inline"; // Ou "block", dependendo do estilo do botão
            }
            </script>
        </div>
    </body>
</html>