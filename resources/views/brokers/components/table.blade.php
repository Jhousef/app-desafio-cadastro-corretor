<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>CRECI</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brokers as $broker)
            <tr>
                <td>{{ $broker->id }}</td>
                <td>{{ $broker->name }}</td>
                <td>{{ $broker->formatCPF() }}</td>
                <td>{{ $broker->creci }}</td>
                <td>
                    <form action="{{ route('brokers.destroy', $broker->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Excluir</button>
                        <a class="btn btn-primary" href="{{ route('brokers.edit', $broker->id) }}">Editar</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
