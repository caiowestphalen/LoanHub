<?php
    // Inclua o arquivo de configuração para estabelecer a conexão com o banco de dados
    include 'config.php';

    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupere os dados do formulário
        $nomeCompleto = $_POST['nomeCompleto'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        // Insira os dados na tabela clientes
        $sql = "INSERT INTO clientes (nome_completo, cpf, rg, email, telefone, senha) VALUES (:nome_completo, :cpf, :rg, :email, :telefone, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome_completo', $nomeCompleto, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $stmt->bindParam(':rg', $rg, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        // Executa a consulta
        if ($stmt->execute()) {
            // Redireciona após o cadastro
            header("location: cadastro_sucesso.php");
            exit();
        } else {
            echo "Erro ao cadastrar o usuário.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <!-- Inclua o Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Cadastro de Usuário</div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="nomeCompleto">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required>
                        </div>
                        <div class="form-group">
                            <label for="rg">RG</label>
                            <input type="text" class="form-control" id="rg" name="rg" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inclua o jQuery e o Bootstrap JS no final do corpo -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
