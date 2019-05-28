@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Despesas de Senadores</h1>
        <form>
            <div class="form-group">
                <label>Selecione o mês de referência </label>
                <select onchange="searchDespesas()" name="gastos" id="mes">
                    <option value="">Selecione o mês</option>
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>
                <label> / 2013</label>

            </div>

            <div id="results">

            </div>

        </form>
    </div>
@endsection
