@extends('app')
@section('content')
    <div class="text-center m-5 w-80">
        @if (isset($natural))
            <div class="mt-5">
                <table class="table text-light">
                    <thead>
                        <tr>
                            <th scope="col">{{ $natural->tipo_id }}</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $natural->numero_id }}</td>
                            <td>{{ $natural->nombre }}</td>
                            <td>{{ $natural->apellido }}</td>
                            <td>{{ $natural->parent->telefono }}</td>
                            <td>{{ $natural->parent->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Editar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{route('cambiar.estado')}}" method="POST">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-black" id="exampleModalLabel">Cambiar estado
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-black">
                                                    ¿Deseas cambiar el estado del tercero?
                                                    <input type="text" name="id_tercero" value="{{ $natural->parent->id_tercero }}" hidden>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-primary">Sí</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
