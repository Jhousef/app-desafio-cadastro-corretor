@extends('brokers.layouts.app')
@section('content')
{{-- <h1>Cadastro de Corretores</h1> --}}
<div class="row">
    @include('brokers.components.form')
</div>
<div class="row">
    @include('brokers.components.table')
</div>
@endsection
