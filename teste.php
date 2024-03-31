<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Modal</title>
    <!-- Inclua o Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Botão para abrir o modal -->
<div class="col-auto">
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#novoModal">
        Nova solicitação
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="novoModal" tabindex="-1" aria-labelledby="novoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novoModalLabel">Nova Solicitação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Aqui será carregado o conteúdo da página novo.php -->
            </div>
        </div>
    </div>
</div>

<!-- Inclua o jQuery e o Bootstrap JS no final do corpo -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- JavaScript para carregar o conteúdo do modal -->
<script>
$(document).ready(function(){
    $('#novoModal').on('show.bs.modal', function (e) {
        var modal = $(this);
        modal.find('.modal-body').load('novo.php', function(response, status, xhr) {
            if (status == "error") {
                var msg = "Erro ao carregar conteúdo: ";
                $(".modal-body").html(msg + xhr.status + " " + xhr.statusText);
            }
        });
    });
});
</script>

</body>
</html>
