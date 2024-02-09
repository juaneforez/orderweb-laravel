@extends('templates.base')
@section('title', 'Listado de tipos de actividad')
@section('headers', 'Listado de tipos de actividad')

@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('type_activity.create') }}" class="btn btn-primary">Crear Tipos de actividad</a>
        </div>
    </div>

   @include('templates.messages')

   <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_date" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo de actividad</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                       
                </thead>
                <tbody>
                   
                    @foreach ($type_activitys as $type_activity)
                        
                    
                            <tr>
                                <td>{{$type_activity['id']}}</td>
                                <td>{{$type_activity['description']}}</td>
                                <td>
                                    <a href="{{ route('type_activity.edit', $type_activity['id']) }}" title="Editar" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                
                                    <a href="{{ route('type_activity.destroy', $type_activity['id'])}}" title="Eliminar" 
                                        class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>        
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
  
@endsection