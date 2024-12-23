@extends('layout')

@section('content')
<div class="container">
    <h2>Cadastro de Voos</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('voos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="numero_voo" class="form-label">Número do Voo</label>
            <input type="text" name="numero_voo" id="numero_voo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="companhia_aerea" class="form-label">Companhia Aérea</label>
            <input type="text" name="companhia_aerea" id="companhia_aerea" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="modelo_aviao" class="form-label">Modelo do Avião</label>
            <input type="text" name="modelo_aviao" id="modelo_aviao" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tipo_voo" class="form-label">Tipo de Voo</label>
            <input type="text" name="tipo_voo" id="tipo_voo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tipo_aeronave" class="form-label">Tipo de Aeronave</label>
            <input type="text" name="tipo_aeronave" id="tipo_aeronave" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="qtd_voos" class="form-label">Quantidade de Voos</label>
            <input type="number" name="qtd_voos" id="qtd_voos" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="horario_voo" class="form-label">Horário do Voo</label>
            <input type="time" name="horario_voo" id="horario_voo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="qtd_passageiros" class="form-label">Quantidade de Passageiros</label>
            <input type="number" name="qtd_passageiros" id="qtd_passageiros" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nota_obj" class="form-label">Nota de Objetividade</label>
            <input type="number" name="nota_obj" id="nota_obj" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nota_pontualidade" class="form-label">Nota de Pontualidade</label>
            <input type="number" name="nota_pontualidade" id="nota_pontualidade" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nota_servicos" class="form-label">Nota de Serviços</label>
            <input type="number" name="nota_servicos" id="nota_servicos" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nota_patio" class="form-label">Nota do Pátio</label>
            <input type="number" name="nota_patio" id="nota_patio" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
