@extends('templates.base')

@section('title', 'Editar Actividad')
@section('header', 'Editar Actividad')

@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col lg-12 mb-4">
            <form action="{{ route('activity.update', $activity['id']) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row form-group">
                    <div class="col lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" required
                        value="{{ $activity['description']}}">
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="hours">Horas estimadas</label>
                        <input type="number" class="form-control" id="hours" name="hours" required
                        {{ $activity['description']}}>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col lg-6 mb-4">
                        <label for="Technician_id">Tecnico</label>
                        <select class="form-control" id="technician_id" name="technician_id" required>
                            <option value="">Seleccione</option>
                            @foreach ($technicians as $technician)
                                <option value="{{ $technician['document'] }}"
                                    @if($technician['document'] == $activity['technician_id']) selected @endif >
                                    {{ $technician['name']}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="type_id">Tipo</label>
                        <select class="form-control" id="type_id" name="type_id" required>
                            <option value="">Seleccione</option>
                            @foreach ($types as $type)
                                <option value="{{ $type['id'] }}"
                                    @if($type['id'] == $activity['type_id']) selected @endif >
                                    {{ $type['description']}}
                                </option>
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
                        <a href="{{ route('activity.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                        </a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa-solid fa-lightbulb"></i>
                        Para añadir actividades la Actividad primero debe crearlas y luego dar click en la accion editar
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection