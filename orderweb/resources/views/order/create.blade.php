@extends('templates.base')

@section('title', 'Crear Ordenes')
@section('headers', 'Crear Ordenes')

@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col lg-12 mb-4">
            <form action="{{ route(}'order.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col lg-12 mb-4">
                        <label for="date">Fecha Legalización</label>
                        <input type="date" class="form-control" id="legalization_date" name="legalization_date" required>
                    </div>
                   
                    <div class="col lg-12 mb-4">
                        <label for="text">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class="col lg-12 mb-4">
                        <label for="text">Ciudad</label>
                        <select name="city" id="city" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($observations as $observation)

                            <option value="{{ $observation['id'] }}">
                                {{ $observation['description']}}
                            
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col lg-6 mb-4">
                        <label for="text">observación</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">observación</option>
                            @foreach ($observations as $observation)

                            <option value="{{ $observation['id'] }}">
                                {{ $observation['description']}}
                            
                            @endforeach
                        </select>
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="text">Causal</label>
                        <select name="causal" class="form-control">
                            <option value="">Causal</option>
                            @foreach ($causals as $causal)

                            <option value="{{ $causal['id'] }}">
                                {{ $causal['description']}}
                            
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">
                            Guardar
                        </button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('order.create') }}" class="btn btn-secondary btn-block">
                            Cancelar
                        </a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa-solid fa-lightbulb"></i>
                        Para añadir actividades a la orden primero debe crearlas y luego dar click en la accion editar
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection