<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $origem = $_POST['origem'];
    $destino = $_POST['destino'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $vagas = $_POST['vagas'];
    $motorista = $_POST['motorista'];
    $veiculo = $_POST['veiculo'];

    // Exibir os dados (aqui você pode salvar em um banco de dados, por exemplo)
    echo "<h1>Carona Cadastrada com Sucesso!</h1>";
    echo "<p><strong>Origem:</strong> $origem</p>";
    echo "<p><strong>Destino:</strong> $destino</p>";
    echo "<p><strong>Data:</strong> $data</p>";
    echo "<p><strong>Horário:</strong> $horario</p>";
    echo "<p><strong>Vagas:</strong> $vagas</p>";
    echo "<p><strong>Motorista:</strong> " . ($motorista ? $motorista : 'Não informado') . "</p>";
    echo "<p><strong>Veículo:</strong> " . ($veiculo ? $veiculo : 'Não informado') . "</p>";
} else {
    echo "<h1>Erro: Método de requisição inválido.</h1>";
}
?>