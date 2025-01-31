<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $avaliador = $_POST['avaliador'];
    $avaliado = $_POST['avaliado'];
    $tipo = $_POST['tipo'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];

    // Simulação de salvamento (aqui você pode salvar em um banco de dados)
    echo "<h1>Avaliação Enviada com Sucesso!</h1>";
    echo "<p><strong>Avaliador:</strong> $avaliador</p>";
    echo "<p><strong>Avaliado:</strong> $avaliado</p>";
    echo "<p><strong>Tipo:</strong> $tipo</p>";
    echo "<p><strong>Nota:</strong> $nota</p>";
    echo "<p><strong>Comentário:</strong> $comentario</p>";
} else {
    echo "<h1>Erro: Método de requisição inválido.</h1>";
}
?><?php
