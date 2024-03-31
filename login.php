<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos estão preenchidos
    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        // Verifica se o email e a senha correspondem a um usuário válido (você deve implementar essa lógica)
        // Por enquanto, vamos apenas exibir uma mensagem de sucesso
        $mensagem = "Login realizado com sucesso!";
    } else {
        $mensagem = "Email ou senha inválidos. Por favor, tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Inclua o Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <?php if (isset($mensagem)): ?>
                        <div class="alert alert-<?php echo isset($erro) ? 'danger' : 'success'; ?>" role="alert">
                            <?php echo $mensagem; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a href="registro.php" class="btn btn-secondary">Cadastrar</a>
                        <a href="recuperar_senha.php" class="btn btn-link">Esqueceu a senha?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inclua o Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
