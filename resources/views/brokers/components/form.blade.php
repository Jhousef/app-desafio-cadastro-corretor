@if (isset($broker))
<form class="form" action="{{ route('brokers.update', $broker->id) }}" method="POST">
@method('PUT')
@else
<form class="form" action="{{ route('brokers.store') }}" method="POST">
@endif
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label class="form-label" for="cpf">CPF:</label>
                <input value="@if(isset($broker)){{$broker->cpf}}@else{{ old('cpf')}}@endif" class="form-control" type="text" id="cpf" name="cpf" required maxlength="11">
                {{-- @error('cpf') --}}
                    <div class="invalid-feedback">
                        {{ 'error' }}
                    </div>
                {{-- @enderror --}}
        </div>
        <div class="col-md-8">
            <label class="form-label" for="creci">CRECI:</label>
            <div class="input-group has-validation">

                <input value="@if(isset($broker)){{ $broker->creci}}@else{{ old('creci')}}@endif" class="form-control" type="text" id="creci" name="creci" required minlength="2">
                @error('creci')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label class="form-label" for="name">Nome:</label>
            <div class="input-group has-validation">
                <input value="@if(isset($broker)){{$broker->name}}@else{{ old('name')}}@endif" class="form-control" type="text" id="name" name="name" required minlength="2">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-12 mb-4">
            @if (isset($broker))
            <button class="btn btn-secondary mt-3" type="submit">Salvar</button>
            <a href="{{ route('brokers.index') }}" class="btn btn-danger mt-3" type="submit">Cancelar</a>
            @else
            <button class="btn btn-success mt-3" type="submit">Enviar</button>
            @endif
        </div>
    </div>
</form>
