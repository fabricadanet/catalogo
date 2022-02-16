<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dados do cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('carrinho.finalizar')}}">
                @csrf
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Telefone:</label>
                            <input type="text" class="form-control" name="telefone">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"
                        data-bs-dismiss="modal">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
