<?php
$dados = [
    ["Disciplina" => "Matemática", "Faltas" => 5, "Média" => 8.5],
    ["Disciplina" => "Português", "Faltas" => 2, "Média" => 9],
    ["Disciplina" => "Geografia", "Faltas" => 10, "Média" => 6],
    ["Disciplina" => "Educação Física", "Faltas" => 2, "Média" => 8]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Dados</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dados das Disciplinas</h1>
    <table>
        <thead>
            <tr>
                <th>Disciplina</th>
                <th>Faltas</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dados as $disciplina) {
                echo "<tr>";
                echo "<td>" . $disciplina["Disciplina"] . "</td>";
                echo "<td>" . $disciplina["Faltas"] . "</td>";
                echo "<td>" . $disciplina["Média"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
