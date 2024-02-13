@extends('templates.base')

@section('title', 'Editar Ordenes')
@section('header', 'Editar Ordenes')

@section('content')
@include('templates.messages')

<div class="row">
    <div class="col lg-12 mb-4">
        <form action="{{ route(}'order.store') }}" method="POST">

            @csrf
            @method('PUT')
            <div class="row form-group">
                <div class="col lg-12 mb-4">
                    <label for="date">Fecha Legalización</label>
                    <input type="date" class="form-control" id="legalization_date" name="legalization_date" required
                    value="{{ $order['legalization_date']}}">
                </div>
               
                <div class="col lg-12 mb-4">
                    <label for="text">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address" required
                    value="{{ $order['address']}}">
                </div>

                <div class="col lg-12 mb-4">
                    <label for="text">Ciudad</label>
                    <select name="city" id="city" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach ($cities as $city)

                        <option value="{{ $city['value'] }}"
                            @if($city['value'] == $order['city']) selected @endif>
                            {{ $city['name']}}
                        
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

                        <option value="{{ $observation['id'] }}"
                            @if($observation['id'] == $order['observation_id']) selected @endif>
                            {{ $observation['description']}}
                        
                        @endforeach
                    </select>
                </div>
                <div class="col lg-6 mb-4">
                    <label for="text">Causal</label>
                    <select name="causal" class="form-control">
                        <option value="">Causal</option>
                        @foreach ($causals as $causal)

                        <option value="{{ $causal['id'] }}"
                        @if($observation['id'] == $order['observation_id']) selected @endif>>
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

        <hr>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Añadir/Retirar actividades
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row from-group">
                            <div class="col-lg-6 mb-4">
                                <label for="table_data">Actividades disponibles</label>
                                <table id="table_data" class="table table-stripped table-hover">
                                    <thead>
                                        <th>Id</th>
                                        <th>Descripción</th>
                                        <th>Horas</th>
                                        <th>Agregar</th>
                                    </thead>

                                    <tbody>
                                        @if(count($activitiesAdded) == 0)
                                            <tr>
                                                <td colspan="4">
                                                    No existen actividades agregadas
                                                </td>
                                            </tr>
                                            @foreach ($activitiesNotInOrder as $activity)
                                                <tr>
                                                    <td>{{ $activity->id}}</td>
                                                    <td>{{ $activity->description}}</td>
                                                    <td>{{ $activity->hours}}</td>
                                                    <td>
                                                        <a href="#" title="retirar" class="btn btn-danger btn-circle btn-sm">
                                                            <i class="fas fa-fw fa-minus"></i>
                                                        </a>
                                                    </td>
                                                </tr>    

                                            @endforeach   
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-6 mb-4">
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection