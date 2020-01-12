@section('content')
    @parent
    <div class="modal fade" id="clientesModal" tabindex="-1" role="dialog" aria-labelledby="clientesModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="favoritesModalLabel">Clientes - Lista</h4>
                    <input type="text" class="form-control" placeholder="search" name="descricao"/>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Email</th>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td><a href="#" data-dismiss="modal" onclick="$('#clienteId').val({{ $cliente->id }});$('#clienteDesc').val('{{ $cliente->name }}');">{{ $cliente->id }}</a></td>
                                <td><a href="#" data-dismiss="modal" onclick="$('#clienteId').val({{ $cliente->id }});$('#clienteDesc').val('{{ $cliente->name }}');">{{ $cliente->name }}</a></td>
                                <td><a href="#" data-dismiss="modal" onclick="$('#clienteId').val({{ $cliente->id }});$('#clienteDesc').val('{{ $cliente->name }}');">{{ $cliente->email }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection