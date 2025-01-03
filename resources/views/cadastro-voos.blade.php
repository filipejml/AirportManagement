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
            <select name="modelo_aviao" id="modelo_aviao" class="form-control" required>
                <option value="">Selecione um modelo</option>
                @foreach ($modelosAeronaves as $modelo)
                    <option value="{{ $modelo->id }}">{{ $modelo->modelo }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="qtd_passageiros" class="form-label">Quantidade de Passageiros</label>
            <input type="number" name="qtd_passageiros" id="qtd_passageiros" class="form-control" readonly>
        </div>

        <!-- Outros campos aqui -->

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<script>
    document.getElementById('modelo_aviao').addEventListener('change', function () {
        const modeloId = this.value;

        if (modeloId) {
            fetch(`/api/modelos-aeronaves/${modeloId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('qtd_passageiros').value = data.capacidade_passageiros || 0;
                })
                .catch(error => console.error('Erro ao buscar dados do modelo:', error));
        } else {
            document.getElementById('qtd_passageiros').value = 0;
        }
    });
</script>
@endsection
