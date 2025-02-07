<?php
session_start();

// Simulando o ID de um usuário (passageiro ou motorista)
$id_usuario = $_SESSION['id_usuario'] ?? 1; // ID do usuário na sessão
$id_motorista = 1; // ID do motorista para a conversa

// Simula uma conexão com o banco de dados
$mensagens = [
    ['id_usuario' => 1, 'mensagem' => 'Oi, você está indo para a cidade X?', 'tipo_usuario' => 'passageiro'],
    ['id_usuario' => 2, 'mensagem' => 'Sim, estou indo. Quando você quer sair?', 'tipo_usuario' => 'motorista']
];

// Adiciona uma nova mensagem
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
    $tipo_usuario = $_POST['tipo_usuario']; // passageiro ou motorista

// Em um cenário real, aqui você armazenaria a mensagem no banco de dados
    $mensagens[] = ['id_usuario' => $id_usuario, 'mensagem' => $mensagem, 'tipo_usuario' => $tipo_usuario];
}
?>

