<?php
    // Conexão com o banco de dados
    include 'config.php';

    // Consulta SQL para obter as solicitações de empréstimo
    $sql = "SELECT * FROM solicitacoes_emprestimo_fgts LIMIT 10";
    $stmt = $pdo->query($sql);
?>


<!-- Modal para Nova Solicitação -->
<div class="modal fade" id="novaSolicitacaoModal" tabindex="-1" aria-labelledby="novaSolicitacaoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novaSolicitacaoModalLabel">Nova Solicitação de Empréstimo FGTS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para Nova Solicitação -->
                <form>
                    <!-- Dados do Solicitante -->
                    <fieldset>
                        <legend>Dados do Solicitante</legend>
                        <div class="mb-3">
                            <label for="nomeCompleto" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeCompleto" value="Fulano da Silva" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" value="123.456.789-00" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="protocolo" class="form-label">Protocolo</label>
                            <input type="text" class="form-control" id="protocolo" value="<?php echo mt_rand(10000, 99999); ?>" readonly>
                        </div>
                    </fieldset>
                    
                    <!-- Dados da Solicitação -->
                    <fieldset>
                        <legend>Dados da Solicitação</legend>
                        <div class="mb-3">
                            <label for="banco" class="form-label">Banco</label>
                            <select class="form-select" id="banco">
                                <option selected disabled>Selecione um banco</option>
                                <option value="Banco A">Banco A</option>
                                <option value="Banco B">Banco B</option>
                                <!-- Adicione mais opções conforme necessário -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="valorEmprestimo" class="form-label">Valor do Empréstimo</label>
                            <input type="text" class="form-control" id="valorEmprestimo">
                        </div>
                        <div class="mb-3">
                            <label for="parcelas" class="form-label">Quantidade de Parcelas</label>
                            <input type="text" class="form-control" id="parcelas">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="termos">
                            <label class="form-check-label" for="termos">
                                Aceito os termos e condições
                            </label>
                        </div>
                    </fieldset>

                    <!-- Botões -->
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-success">Solicitar Análise</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
