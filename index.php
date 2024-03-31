<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Empréstimos FGTS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema de Empréstimos FGTS</a>
        </div>
    </nav>

    <!-- Botões abaixo do Navbar -->
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="#" class="btn btn-dark">Nova solicitação</a>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-dark">Alterar dados</a>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-dark">Chamar um corretor</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center">Painel de Controle</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Protocolo</th>
                    <th scope="col">Nome do Banco</th>
                    <th scope="col">Valor Solicitado</th>
                    <th scope="col">Data da Solicitação</th>
                    <th scope="col">Data da Aprovação</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui você pode popular a tabela com os dados do banco -->
                <?php
                // Simulando solicitações de empréstimo (substitua isso pelo código real)
                $solicitacoes_emprestimo = [
                    ["12345", "Banco A", "R$ 10.000,00", "01/01/2024", "05/01/2024", "Aprovado"],
                    ["12346", "Banco B", "R$ 15.000,00", "02/01/2024", "06/01/2024", "Aprovado"],
                    // Adicione mais solicitações conforme necessário
                ];

                // Variáveis para paginação
                $pagina_atual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
                $registros_por_pagina = 10;
                $indice_inicio = ($pagina_atual - 1) * $registros_por_pagina;
                $indice_fim = $indice_inicio + $registros_por_pagina;

                // Exibir solicitações na tabela
                for ($i = $indice_inicio; $i < $indice_fim && $i < count($solicitacoes_emprestimo); $i++) {
                    echo "<tr>";
                    echo "<td>" . $solicitacoes_emprestimo[$i][0] . "</td>";
                    echo "<td>" . $solicitacoes_emprestimo[$i][1] . "</td>";
                    echo "<td>" . $solicitacoes_emprestimo[$i][2] . "</td>";
                    echo "<td>" . $solicitacoes_emprestimo[$i][3] . "</td>";
                    echo "<td>" . $solicitacoes_emprestimo[$i][4] . "</td>";
                    echo "<td>" . $solicitacoes_emprestimo[$i][5] . "</td>";
                    echo "</tr>";
                }
                ?>
                <!-- Fim do exemplo -->
            </tbody>
        </table>

        <!-- Paginação -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php
                // Calcula o número de páginas
                $total_paginas = ceil(count($solicitacoes_emprestimo) / $registros_por_pagina);

                // Botões de navegação
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo "<li class='page-item " . ($i == $pagina_atual ? 'active' : '') . "'><a class='page-link' href='?pagina=" . $i . "'>" . $i . "</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>

    <!-- Bootstrap JavaScript (opcional, apenas se você precisar de funcionalidades como modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
