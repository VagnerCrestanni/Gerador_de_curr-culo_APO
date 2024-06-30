
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados pessoais
    $nome = $_POST['nome'];
    $email = $_POST['E-mail'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $idade = $_POST['idade'];

    // Upload da foto
    $foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $foto = 'uploads/' . uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    }

    // Histórico educacional
    $historico_formacao = $_POST['historico_formação'];
    $historico_instituicao = $_POST['historico_instituição'];
    $historico_inicio = $_POST['historico_inicio'];
    $historico_fim = $_POST['historico_fim'];

    // Experiências
    $experiencia_funcao = $_POST['experiencia_função'];
    $experiencia_empresa = $_POST['experiencia_empresa'];
    $experiencia_inicio = $_POST['experiencia_inicio'];
    $experiencia_fim = $_POST['experiencia_fim'];

    // Idiomas
    $idiomas = $_POST['idiomas'];

    // Competências
    $competencias = $_POST['competencias'];

    // Objetivo
    $objetivo = $_POST['objetivo'];

    include 'curriculum-templetes.php';
}
?>

