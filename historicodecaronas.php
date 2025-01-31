<?php
session_start();

// Simulação de dados de caronas (em um caso real, você pegaria do banco de dados)
$caronas_oferecidas = [
    ["id" => 1, "origem" => "São Paulo", "destino" => "Rio de Janeiro", "data" => "2024-01-20", "status" => "Concluída"],
    ["id" => 2, "origem" => "Campinas", "destino" => "Belo Horizonte", "data" => "2024-02-05", "status" => "Pendente"]
];

$caronas_participadas = [
    ["id" => 3, "origem" => "Curitiba", "destino" => "Florianópolis", "data" => "2024-01-15", "status" => "Concluída"],
    ["id" => 4, "origem" => "Brasília", "destino" => "Goiânia", "data" => "2024-02-10", "status" => "Confirmada"]
];
?>
